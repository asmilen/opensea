<?php

namespace App\Models;


class TourRequest extends BaseModel
{
    protected $table = 'tour_request';
    protected $fillable = [
        'name', 'email', 'contact',
        'nation', 'date', 'number_people', 'special_request',
        'tour_id', 'status', 'note', 'time',
    ];
}
