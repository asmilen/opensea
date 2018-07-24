<?php
/**
 * Created by PhpStorm.
 * User: DiemND
 * Date: 1/31/2018
 * Time: 3:20 PM
 */

namespace App\Http\Controllers\Service;


use App\Models\CustomerMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class CustomerMessageService extends BaseService
{
    public function index (Request $request) {
        $filter = $this->buildFilter($request);
        if ($request->has('email') && $request['email']) {
            $filter['email'] = $request['email'];
        }
        if ($request->has('phone_number') && $request['phone_number']) {
            $filter['phone_number'] = $request['phone_number'];
        }
        if ($request->has('name') && $request['name']) {
            $filter['name'] = $request['name'];
        }
        if ($request->has('status') && $request['status']) {
            $filter['status'] = $request['status'];
        }

        $data = App::make('customerMessageService')->getData($filter);
        if ($data) {
            foreach ($data as $item) {
                $item->slug = $this->getSlug($item->name) . '-tid' . $item->id;
            }
        }
        $paginator = App::make('customerMessageService')->paginator($filter);
        return $this->response([
            'data' => $data,
            'paginator' => $paginator
        ]);
    }

    public function update (Request $request) {

        $id = $request->input('id');

        $dataUpdate = [
            'status' => $request->input('status')
        ];

        $customerMessage = CustomerMessage::where('id', '=', $id)->first();

        $dataBefore = [
            'status' => $customerMessage->status
        ];

        $log = [
            'author' => Auth::user()->name,
            'time' => date('Y-m-d H:i:s'),
            'content' => $request->input('note_new'),
            'old_data' => $dataBefore,
            'new_data' => $dataUpdate
        ];

        if ($customerMessage && $customerMessage->note) {
            $note = json_decode($customerMessage->note);
            array_unshift($note, $log);
        } else {
            $note = [$log];
        }

        $dataUpdate['note'] = json_encode($note);

        $articleObj = App::make('customerMessageService')->baseQuery([
            'id' => $id
        ])->update($dataUpdate);

        return $this->response([
            'data' => $articleObj
        ]);
    }

    public function detail($id) {
        $orderObj = App::make('customerMessageService')->query()->findOrFail($id);
        return $this->response([
            'data' => $orderObj
        ]);
    }
}