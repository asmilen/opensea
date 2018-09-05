<?php
/**
 * Created by PhpStorm.
 * User: DiemND
 * Date: 1/31/2018
 * Time: 3:20 PM
 */

namespace App\Http\Controllers\Service;


use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class TourService extends BaseService
{
    public function index (Request $request) {
        $filter = $this->buildFilter($request);
        if ($request->has('search') && $request['search']) {
            $filter['search'] = $request['search'];
        }
        if ($request->has('type') && $request['type']) {
            $filter['type'] = $request['type'];
        }

        $data = App::make('tourService')->getData($filter);
        if ($data) {
            foreach ($data as $item) {
                $item->slug = $this->getSlug($item->name) . '-tid' . $item->id;
            }
        }
        $paginator = App::make('tourService')->paginator($filter);
        return $this->response([
            'data' => $data,
            'paginator' => $paginator
        ]);
    }

    public function create (Request $request) {
        if (!$request->input('name')) {
            return response()->json([
                'status' => 'fail',
                'message' => 'Invalid data input!'
            ]);
        }

        $dataCreate = [
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'description_vi' => $request->input('description_vi'),
            'image' => $request->input('image'),
            'price' => $request->input('price'),
            'include' => $request->input('include'),
            'add_on' => $request->input('add_on'),
            'add_on_vi' => $request->input('add_on_vi'),
            'type' => $request->input('type') ? $request->input('type') : Tour::TYPE_NORMAL,
        ];
        $articleObj = App::make('tourService')->query()->create($dataCreate);

        return $this->response([
            'data' => $articleObj
        ]);
    }

    public function update (Request $request) {
        if (!$request->input('name') || !$request->input('id')) {
            return response()->json([
                'status' => 'fail',
                'message' => 'Invalid data input!'
            ]);
        }
        $id = $request->input('id');

        $dataUpdate = [
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'description_vi' => $request->input('description_vi'),
            'image' => $request->input('image'),
            'price' => $request->input('price'),
            'include' => $request->input('include'),
            'add_on_vi' => $request->input('add_on_vi'),
            'type' => $request->input('type') ? $request->input('type') : Tour::TYPE_NORMAL,
        ];
        $articleObj = App::make('tourService')->baseQuery([
            'id' => $id
        ])->update($dataUpdate);

        return $this->response([
            'data' => $articleObj
        ]);
    }

    public function updateOrder (Request $request) {
        if (!$request->input('id') || !$request->input('order')) {
            return response()->json([
                'status' => 'fail',
                'message' => 'Invalid data input!'
            ]);
        }
        $id = $request->input('id');
        $dataUpdate = [
            'order' => $request->input('order')
        ];
        $articleObj = App::make('articleService')->baseQuery([
            'id' => $id
        ])->update($dataUpdate);
        return $this->response([
            'data' => $articleObj
        ]);
    }

    public function updateMultiOrder (Request $request) {
        if (!$request->input('items')) {
            return response()->json([
                'status' => 'fail',
                'message' => 'Invalid data input!'
            ]);
        }
        $items = $request->input('items');
        if (count($items) > 0) {
            foreach ($items as $item) {
                $dataUpdate = [
                    'order' => $item['order']
                ];
                App::make('articleService')->baseQuery([
                    'id' => $item['id']
                ])->update($dataUpdate);
            }
        }
        return $this->response([]);
    }

    public function delete (Request $request) {
        $result = [
            'status' => 'fail',
            'message' => 'fail'
        ];
        try {
            $data = App::make("tourService")->baseQuery([
                'id' => $request->input('id') ? $request->input('id') : -1
            ])->delete();
            $result = [
                'status' => 'successful',
                'data' => $data
            ];
        } catch (\Exception $ex) {
            $result['message'] = $ex->getMessage();
        }
        return response()->json($result);
    }
}