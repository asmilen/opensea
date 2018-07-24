<?php
/**
 * Created by PhpStorm.
 * User: DiemND
 * Date: 1/31/2018
 * Time: 3:20 PM
 */

namespace App\Http\Controllers\Service;


use App\Models\Attraction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class AttractionService extends BaseService
{
    public function index (Request $request) {
        $filter = $this->buildFilter($request);
        if ($request->has('search') && $request['search']) {
            $filter['search'] = $request['search'];
        }
        $data = App::make('attractionService')->getData($filter);
        if ($data) {
            foreach ($data as $item) {
                $item->slug = $this->getSlug($item->name) . '-tid' . $item->id;
            }
        }
        $paginator = App::make('attractionService')->paginator($filter);
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
        $price = $request->input('price');
        if ($price) {
            $price = json_encode($price);
        }
        $dataCreate = [
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'image' => $request->input('image'),
        ];
        $articleObj = App::make('attractionService')->query()->create($dataCreate);
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
        $price = $request->input('price');
        if ($price) {
            $price = json_encode($price);
        }
        $dataUpdate = [
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'image' => $request->input('image'),
        ];
        $articleObj = App::make('attractionService')->baseQuery([
            'id' => $id
        ])->update($dataUpdate);
        return $this->response([
            'data' => $articleObj
        ]);
    }

    public function delete (Request $request) {
        $result = [
            'status' => 'fail',
            'message' => 'fail'
        ];
        try {
            $data = App::make("attractionService")->baseQuery([
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