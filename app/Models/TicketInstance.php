<?php
/**
 * Created by PhpStorm.
 * User: tuanpa
 * Date: 1/18/18
 * Time: 11:31 AM
 */

namespace App\Models;
class TicketInstance extends BaseModel
{

    protected $table = 'ticket_instance';
    protected $fillable = [
        'id', 'type', 'status', 'order_id', 'ticket_id'
    ];
}
