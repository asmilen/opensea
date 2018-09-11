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

class TicketComponentService extends BaseService
{
    public function index (Request $request) {
        $filter = $this->buildFilter($request);
        $data = App::make('ticketComponentService')->getData($filter);
        if ($data) {
            foreach ($data as $item) {
                $item->slug = $this->getSlug($item->name) . '-tid' . $item->id;
            }
        }
        $paginator = App::make('ticketComponentService')->paginator($filter);
        return $this->response([
            'data' => $data,
            'paginator' => $paginator
        ]);
    }

    public function create (Request $request) {

        $dataCreate = [
            'description' => $request->input('description'),
            'description_vi' => $request->input('description_vi'),
            'image' => $request->input('image'),
        ];

        $articleObj = App::make('ticketComponentService')->query()->create($dataCreate);

        return $this->response([
            'data' => $articleObj
        ]);
    }

    public function update (Request $request) {
        $id = $request->input('id');
        $dataUpdate = [
            'description' => $request->input('description'),
            'description_vi' => $request->input('description_vi'),
            'image' => $request->input('image'),
        ];
        $articleObj = App::make('ticketComponentService')->baseQuery([
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
            $data = App::make("ticketComponentService")->baseQuery([
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