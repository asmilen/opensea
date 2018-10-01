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

    public function features()
    {
        return $this->belongsToMany('App\Models\TicketComponent','ticket_features')->wherePivot('type', 'feature');
    }

    public function offers()
    {
        return $this->belongsToMany('App\Models\TicketComponent','ticket_features')->wherePivot('type', 'exclusive_offer');
    }

    public function components()
    {
        return $this->belongsToMany('App\Models\TicketComponent','ticket_features');
    }
}
