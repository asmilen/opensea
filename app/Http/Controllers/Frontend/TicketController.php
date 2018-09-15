<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Ticket;
use App\Models\TicketComponent;
use App\Models\TicketFeatures;
use App\Models\TicketInfo;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

use App\Http\Controllers\Controller;


class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tickets = Ticket::all();

        $ticketFeatureServ = App::make('ticketFeatureService');
        $ticketComponentServ = App::make('ticketComponentService');

        $ticketInfos = array();
        foreach ($tickets as $ticket) {
            $ticketInfo = new TicketInfo();
            #build ticket info

            $ticketInfo->id = $ticket->id;    
            $ticketInfo->name = $ticket->name;
            $ticketInfo->image = $ticket->image_url;
            $ticketInfo->popular = false; //$ticket->popular;
            $ticketInfo->type = $ticket->type;
            $ticketInfo->feature = [];
            $ticketInfo->exclusive_offer =[];

            #feature filter
            $featureFilter = ['ticket_id' => $ticket->id, 'columns' => '*'];
            $features = $ticketFeatureServ->getData($featureFilter);

            if ($features) {
                foreach ($features as $feature) {
                    //type, ticket_id, ticket_component_id
                    $component = $ticketComponentServ->getDataById(['id' => $feature->ticket_component_id]);
                    //convert it to json object
                    if ($component) {       
                        $component_json = array ('icon' => $component['icon'], 'text' => $component['description']);

                        if ($feature->type === TicketFeatures::FEATURE) {
                            $ticketInfo->feature[] = $component_json;
                        }elseif ($feature->type === TicketFeatures::EXCLUSIVE_OFFER) {
                            $ticketInfo->exclusive_offer[] = $component_json;
                        }    
                    }
                }
            }

            #price handle
            #explode(PHP_EOL, $tour->description_vi)
            #price: adult:1000:500;child:500:200
            
            $prices = explode (";", $ticket->price);
            foreach ($prices as $price) {
                $price_component = explode(":", $price);
                $ticketInfo->prices[$price_component[0]] = array ('number' => $price_component[1], 'save' => $price_component[2]);
            }
            $ticketInfo->currency = 'VND';
            $ticketInfos[] = $ticketInfo;
        }

        return response()->json($ticketInfos);
    }

}
