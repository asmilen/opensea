<?php

namespace App\Models;


class Tour extends BaseModel
{
    const TYPE_NORMAL = 'normal';
    const TYPE_FEATURE = 'feature';
    protected $table = 'tour';
    protected $fillable = [
        'name', 'description','description_vi', 'image',
        'price', 'include', 'add_on', 'type' , 'add_on_vi',
    ];
}
