<?php

namespace App\Models;


class Tour extends BaseModel
{
    const TYPE_NORMAL = 'normal';
    const TYPE_FUTURE = 'future';
    protected $table = 'tour';
    protected $fillable = [
        'name', 'description', 'image',
        'price', 'include', 'add_on', 'type'
    ];
}
