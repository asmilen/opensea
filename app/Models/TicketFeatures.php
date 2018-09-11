<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicketFeatures extends BaseModel
{
    //
    const FEATURE = 'feature';
    const EXCLUSIVE_OFFER = 'exclusive_offer';
    protected $table = 'ticket_features';
    protected $fillable = [
    	'ticket_id', 'ticket_component_id', 'type'
    ];
}
