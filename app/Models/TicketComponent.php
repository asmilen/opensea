<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicketComponent extends BaseModel
{
    //
    protected $table = 'ticket_components';
    protected $fillable = [
        'description', 'image','description_vi',
    ];
}
