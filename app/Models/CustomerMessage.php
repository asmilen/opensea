<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerMessage extends BaseModel
{
    //
    protected $table = "customer_message";
    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'message',
    ];
}
