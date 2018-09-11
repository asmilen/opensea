<?php

namespace App\Transformers;
use \League\Fractal\TransformerAbstract;

use App\Models\Ticket;

class FrontendTicketTransformer extends TransformerAbstract
{
    public function transform(Ticket $ticket)
    {
        //transform ticket to json here
        return [
        ];
    }
}