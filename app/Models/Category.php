<?php

namespace App\Models;
class Category extends BaseModel
{
    const STATUS_ENABLE = 'enable';
    const STATUS_DISABLE = 'disable';
    protected $table = 'category';
    protected $fillable = [
        'name', 'status'
    ];

}
