<?php

namespace App\Models;


class Ticket extends BaseModel
{
    const STATUS_ENABLE = 'enable';
    const STATUS_DISABLE = 'disable';
    const TYPE_NORMAL = 'normal';
    const TYPE_FAMILY = 'family';
    protected $table = 'ticket';
    protected $fillable = [
        'name', 'price', 'type',
    ];
}
