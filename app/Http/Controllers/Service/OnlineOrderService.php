<?php
/**
 * Created by PhpStorm.
 * User: DiemND
 * Date: 1/31/2018
 * Time: 3:20 PM
 */

namespace App\Http\Controllers\Service;


use App\Models\OnlineOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\helpers;

class OnlineOrderService
{

    public function create ($item) {

        //TODO: add validator here
        $id = random_str(20);
        $payment_status = OnlineOrder::PAYMENT_STATUS;
        $dataCreate = [
            'id' => $id,
            'user_gender' => $item['gender'],
            'user_first_name' => $item['first_name'],
            'user_last_name' => $item['last_name'],
            'user_email' => $item['email'],
            'user_address_line_1' => $item['address_line_1'],
            'user_address_line_2' => $item['address_line_2'],
            'user_city' => $item['city'],
            'user_postcode' => $item['postcode'],
            'user_state' => $item['state'],
            'user_country' => $item['country'],
            'payment_status' => $payment_status
        ];
        $articleObj = App::make('onlineOrderService')->query()->create($dataCreate);

        return $dataCreate;
    }
}