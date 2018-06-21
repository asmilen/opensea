<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tour;
use App\Transformers\FrontendTourTransformer;
use Validator;

class TourController extends Controller
{
    public function sendRequest(Request $request){
        $retval = [
            'status' => 'fail',
            'message' => "",
        ];

        $validator = Validator::make($request->all(), [
            'bookingInfo.email' => 'required|email',
            'bookingInfo.name' => 'required',
            'bookingInfo.contact' => 'required',
            'bookingInfo.date' => 'date'
        ]);

        if ($validator->fails()) {

            $retval['errors'] = $validator->messages();
        } else {
            $newTour = \App\Models\TourRequest::create($request->input('bookingInfo'));
            $newTour->tour_id = $request->input('tour_id');
            $retval['message'] = "THANK YOU FOR BOOKING WITH US";
            $retval['status'] = "success";
        }


        return $retval;
    }

    public function index(Request $request)
    {
        $tours = Tour::all();

        $tours->transform(function ($item, $key) {
            return (new FrontendTourTransformer)->transform($item);
        });

        return response()->json($tours);
    }
}
