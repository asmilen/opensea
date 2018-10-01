<?php

namespace App\Http\Controllers\System;

use App\Models\Ticket;
use App\Models\TicketComponent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TicketOffersController extends Controller
{
    public function store(Ticket $ticket, TicketComponent $offer)
    {
        $ticket->offers()->save($offer, ['type' => 'exclusive_offer']);
    }

    public function destroy(Ticket $ticket, TicketComponent $offer)
    {
        $ticket->offers()->detach($offer);
    }
}
