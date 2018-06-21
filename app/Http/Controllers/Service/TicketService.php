<?php
/**
 * Created by PhpStorm.
 * User: DiemND
 * Date: 1/31/2018
 * Time: 3:20 PM
 */

namespace App\Http\Controllers\Service;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class TicketService extends BaseService
{
    public function index (Request $request) {
        $filter = $this->buildFilter($request);
        if ($request->has('search') && $request['search']) {
            $filter['search'] = $request['search'];
        }
        if ($request->has('status') && $request['status']) {
            $filter['status'] = $request['status'];
        }

        $data = App::make('ticketService')->getData($filter);
        $paginator = App::make('ticketService')->paginator($filter);
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
        $slug = $request->input('slug') ? $request->input('slug') : $this->getSlug($request->input('title'));
        $checkSlug = App::make('ticketService')->checkSlug($slug);
        if (!$checkSlug) {
            return response()->json([
                'status' => 'fail',
                'message' => 'Duplicate slug, try again!!!'
            ]);
        }
        $dataCreate = [
            'name' => $request->input('name'),
            'type' => $request->input('type'),
            'status' => $request->input('status') ? $request->input('status') : 'enable',
            'content' => $request->input('content') ? $request->input('content') : '',
            'slug' => $slug
        ];
        $articleObj = App::make('ticketService')->query()->create($dataCreate);
        return $this->response([
            'data' => $articleObj
        ]);
    }

    public function update (Request $request) {
        if (!$request->input('title') || !$request->input('category_id') || !$request->input('id')) {
            return response()->json([
                'status' => 'fail',
                'message' => 'Invalid data input!'
            ]);
        }
        $id = $request->input('id');
        $slug = $request->input('slug') ? $request->input('slug') : $this->getSlug($request->input('title'));
        $checkSlug = App::make('ticketService')->checkSlug($slug, $id);
        if (!$checkSlug) {
            return response()->json([
                'status' => 'fail',
                'message' => 'Duplicate slug, try again!!!'
            ]);
        }
        $dataUpdate = [
            'title' => $request->input('title'),
            'category_id' => $request->input('category_id'),
            'description' => $request->input('description') ? $request->input('description') : '',
            'order' => $request->input('order') ? $request->input('order') : null,
            'meta_description' => $request->input('meta_description') ? $request->input('meta_description') : '',
            'meta_title' => $request->input('meta_title') ? $request->input('meta_title') : '',
            'meta_keywords' => $request->input('meta_keywords') ? $request->input('meta_keywords') : '',
            'status' => $request->input('status') ? $request->input('status') : 'enable',
            'content' => $request->input('content') ? $request->input('content') : '',
            'slug' => $slug,
            'modifier_id' => $request->user()->id
        ];
        $articleObj = App::make('ticketService')->baseQuery([
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
        $articleObj = App::make('ticketService')->baseQuery([
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
                App::make('ticketService')->baseQuery([
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
            $data = App::make("ticketService")->baseQuery([
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