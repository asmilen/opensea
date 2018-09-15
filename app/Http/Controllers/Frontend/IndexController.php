<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Attraction;
use App\Models\CustomerMessage;
use App\Transformers\FrontendAttractionTransformer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class IndexController extends Controller
{
    public function index(){
        return view('frontend.home');
    }

    public function bonbon()
    {
        return view('frontend.bonbon');
    }

    public function rewind()
    {
        return view('frontend.rewind');
    }

    public function cart()
    {
        return view('frontend.cart');
    }

    public function faq()
    {
        return view('frontend.faq');
    }

    public function customerMessage(Request $request)
    {
        $retval = [
            'status' => 'error',
            'message' => "",
        ];

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'name' => 'required',
            'phone_number' => 'required',
            'message' => 'required'
        ]);

        if ($validator->fails()) {
            $retval['message'] = $validator->messages();
        } else {
            CustomerMessage::create($request->all());
            $retval['message'] = "THANK YOU FOR CONTACT US";
            $retval['status'] = "success";
        }

        return $retval;
    }

    public function attraction(Request $request)
    {
        $attaction = Attraction::all();

        $attaction->transform(function ($item, $key) {
            return (new FrontendAttractionTransformer())->transform($item);
        });

        return response()->json($attaction);
    }
}
