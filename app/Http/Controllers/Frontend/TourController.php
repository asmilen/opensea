<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tour;
use App\Models\TourRequest;
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
            'email' => 'required|email',
            'name' => 'required',
            'contact' => 'required',
            'date' => 'date'
        ]);

        if ($validator->fails()) {
            $retval['errors'] = $validator->messages();
        } else {
            TourRequest::create($request->all());
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
