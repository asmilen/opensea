<?php
/**
 * Created by PhpStorm.
 * User: DiemND
 * Date: 1/31/2018
 * Time: 3:20 PM
 */

namespace App\Http\Controllers\Service;


use App\Models\TicketInstance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\helpers;

class TicketInstanceService
{

    public function create ($item) {

        //TODO: add validator here
        $id = random_str(20);
        $status = TicketInstance::STATUS;
        $dataCreate = [
            'id' => $id,
            'type' => $item['type'],
            'status' => $status,
            'order_id' => $item['order_id'],
            'ticket_id' => $item['ticket_id']
        ];
        $articleObj = App::make('ticketInstanceService')->query()->create($dataCreate);

        return $dataCreate;
    }
}