<?php
/**
 * Created by PhpStorm.
 * User: tuanpa
 * Date: 1/18/18
 * Time: 11:31 AM
 */

namespace App\Models;
class OnlineOrder extends BaseModel
{

	const PAYMENT_STATUS = 'pending';
    protected $table = 'online_order';
    protected $fillable = [
        'id', 'user_gender', 'user_first_name', 'user_last_name',
        'user_email', 'user_address_line_1',  'user_address_line_2', 'user_city',
        'user_postcode', 'user_state', 'user_country', 'payment_status'
    ];
}
