<?php

namespace App\Http\Controllers\System;

use App\Models\Ticket;
use App\Models\TicketComponent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TicketFeaturesController extends Controller
{
    public function store(Ticket $ticket, TicketComponent $feature)
    {
        $ticket->features()->save($feature, ['type' => 'feature']);
    }

    public function destroy(Ticket $ticket, TicketComponent $feature)
    {
        $ticket->features()->detach($feature);
    }
}
