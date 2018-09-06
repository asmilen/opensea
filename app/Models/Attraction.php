<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attraction extends BaseModel
{
    //
    protected $table = 'attraction';
    protected $fillable = [
        'name', 'description', 'image','description_vi','url',
    ];
}
