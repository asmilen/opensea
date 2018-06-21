<?php
/**
 * Created by PhpStorm.
 * User: DiemND
 * Date: 1/31/2018
 * Time: 3:20 PM
 */

namespace App\Http\Controllers\Service;


use App\Models\Log;
use App\Models\Tour;
use App\Models\TourRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class RequestService extends BaseService
{
    public function index (Request $request) {
        $filter = $this->buildFilter($request);
        if ($request->has('status') && $request['status']) {
            $filter['status'] = $request['status'];
        }
        if ($request->has('id') && $request['id']) {
            $filter['id'] = $request['id'];
        }
        if ($request->has('email') && $request['email']) {
            $filter['email'] = $request['email'];
        }
        if ($request->has('order') && $request['order']) {
            if ($request['order'] == 'create_at_asc') {
                $filter['orders'] = ['created_at' => 'asc'];
            }
            if ($request['order'] == 'create_at_desc') {
                $filter['orders'] = ['created_at' => 'desc'];
            }
        }
        $data = App::make('requestService')->getData($filter);
        $paginator = App::make('requestService')->paginator($filter);
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
            'price' => $price,
            'include' => $request->input('include'),
            'add_on' => $request->input('add_on'),
            'type' => $request->input('type') ? $request->input('type') : Tour::TYPE_NORMAL,
        ];
        $articleObj = App::make('tourRequestService')->query()->create($dataCreate);
        return $this->response([
            'data' => $articleObj
        ]);
    }

    public function update (Request $request) {
        $id = $request->input('id');
        if (!$id) {
            return response()->json([
                'status' => 'fail',
                'message' => 'Invalid data input!'
            ]);
        }

        $dataUpdate = [
            'status' => $request->input('status')
        ];
        if ($request->input('note_new')) {
            $dataOld = \App\Models\Request::where('id', '=', $id)->first(['note']);
            if ($dataOld && $dataOld->note) {
                $note = json_decode($dataOld->note);
                array_unshift($note, [
                    'author' => Auth::user()->name,
                    'time' => date('Y-m-d H:i:s'),
                    'content' => $request->input('note_new')
                ]);
            } else {
                $note = [
                    [
                        'author' => Auth::user()->name,
                        'time' => date('Y-m-d H:i:s'),
                        'content' => $request->input('note_new')
                    ]
                ];
            }
            $dataUpdate['note'] = json_encode($note);
        }
        $articleObj = App::make('requestService')->baseQuery([
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