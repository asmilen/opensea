<?php

namespace App\Models;


class Request extends BaseModel
{
    protected $table = 'request';
    protected $fillable = [
        'name', 'email', 'contact', 'status', 'note', 'phone'
    ];
}
