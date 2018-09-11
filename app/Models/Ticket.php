<?php

namespace App\Models;


class Ticket extends BaseModel
{
    const STATUS_ENABLE = 'enable';
    const STATUS_DISABLE = 'disable';
    protected $table = 'ticket';
    protected $fillable = [
        'name', 'price', 'type',
    ];
}
