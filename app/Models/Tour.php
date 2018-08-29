<?php

namespace App\Models;


class Tour extends BaseModel
{
    use \Dimsav\Translatable\Translatable;

    const TYPE_NORMAL = 'normal';
    const TYPE_FUTURE = 'future';
    protected $table = 'tour';
    protected $fillable = [
        'name', 'description', 'image',
        'price', 'include', 'add_on', 'type'
    ];
    public $translatedAttributes = ['description_tl'];

}
