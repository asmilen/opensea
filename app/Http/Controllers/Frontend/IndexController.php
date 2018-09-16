<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Attraction;
use App\Models\CustomerMessage;
use App\Transformers\FrontendAttractionTransformer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \Cart as Cart;
use Validator;

class IndexController extends Controller
{

    public function index(){
        $cartCount = Cart::content()->groupBy('id')->count();
        return view('frontend.home',compact('cartCount'));
    }

    public function bonbon()
    {
        $cartCount = Cart::content()->groupBy('id')->count();
        return view('frontend.bonbon',compact('cartCount'));
    }

    public function rewind()
    {
        $cartCount = Cart::content()->groupBy('id')->count();
        return view('frontend.rewind',compact('cartCount'));
    }

    public function cart()
    {
        $cartCount = Cart::content()->groupBy('id')->count();
        return view('frontend.cart',compact('cartCount'));
    }

    public function checkout()
    {
        $cartCount = Cart::content()->groupBy('id')->count();
        return view('frontend.checkout',compact('cartCount'));
    }

    public function faq()
    {
        $cartCount = Cart::content()->groupBy('id')->count();
        return view('frontend.faq',compact('cartCount'));
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
