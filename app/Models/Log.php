<?php

namespace App\Models;


class Log extends BaseModel
{
    protected $table = 'log';
    protected $fillable = [
        'before', 'after', 'action',
        'actor_id', 'page'
    ];
}
