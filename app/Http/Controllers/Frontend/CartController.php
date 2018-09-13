<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Ticket;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use \Cart as Cart;
use Validator;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return response()->json();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $retval = [
            'status' => 'fail',
            'message' => ''
        ];

        //TODO: add validation here

        $newItems = $this->convertToCartItem($request);
        foreach ($newItems as $item) {
                        
            $duplicates = Cart::search(function ($cartItem, $rowId) use ($item) {
                return ($cartItem->id === $item['id']) && ($cartItem->options['prize_type'] === $item['options']['prize_type']);
            });

            if (!$duplicates->isEmpty()) {
                //handle existed product
                Log::Info("row exist");
            }else{
                Cart::add($item);
            }

        }
        return response()->json(Cart::content());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function codeGen($item) {
        $validator = Validator::make($item, [
            'product' => 'required',
            'id' => 'required',
            'type' => 'required'
        ]);

        if ($validator->fails()) {
            Log::error("validate fialed: ". $validator->messages());
            return null;
        }

        $code = $item['product'] . '|' . $item['id'] . '|' . $item['type'];
        return $code;
    }

    private function convertToCartItem ($request) {
        $cartItems = [];
        Log::error("class type". get_class($request) . " request: ");
        Log::error($request->all());

        $ticketService = App::make('ticketService');

        foreach ($request->all() as $item) {
            //query for object prize


            Log::info ($item);
            $prizeTypes = $item['quantity'];

            foreach ($prizeTypes as $prizeType => $quantity) {
                $cartItem = [];

                if ($quantity <= 0) continue;

                $id = $this->codeGen($item);
                $cartItem = array_merge($cartItem, array('id' => $id));

                $cartItem = array_merge ($cartItem, ['name' => $item['name']] );

                Log::info ("prize type: ". $prizeType);
                
                $cartItem = array_merge ($cartItem ,['options' => ['prize_type' => $prizeType]]);
                
                //get ticket prize    
                if ($item['product'] === 'ticket') {
                    $ticket = $ticketService->getData(['id' => $item['id']])->first();
                    Log::Info("ticket querry");
                    Log::Info($ticket);
                    if ($ticket) {
                        $allPrize = [];
                        $prices = explode (";", $ticket->price);
                        foreach ($prices as $price) {
                            $price_component = explode(":", $price);
                            $allPrize  = array_merge ($allPrize, array ( $price_component[0] => $price_component[1] ));
                        }

                        if (array_key_exists($prizeType, $allPrize)) {
                            Log::Info("prize exist".$prizeType);
                            $cartItem = array_merge($cartItem, ['price' => floatval($allPrize[$prizeType])]);
                        }else{
                            continue;
                        }
                    }
                }else {
                    continue;
                }

                $cartItem = array_merge ($cartItem, ["qty" => $quantity]);

                $cartItems[] = $cartItem;
            }
        }
        Log::error ($cartItems);
        return $cartItems;
    } 
}
