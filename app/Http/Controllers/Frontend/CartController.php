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

        $items = $this->convertCartItemToJson();
        //
        return response()->json($items);
    }

    public function count()
    {
        $ret = [
            'count' => Cart::content()->groupBy('id')->count()
        ];
        return response()->json($ret);
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
            'success' => false,
            'message' => 'unknown error'
        ];
        $code = 400;
        //TODO: add validation here

        $newItems = $this->convertToCartItem($request);

        foreach ($newItems as $item) {
                        
            $duplicates = Cart::search(function ($cartItem, $rowId) use ($item) {
                return ($cartItem->id === $item['id']) && ($cartItem->options['prize_type'] === $item['options']['prize_type']);
            });

            if (!$duplicates->isEmpty()) {
                //handle existed product
                //Log::Info("row exist");
                $retval['message'] = 'item already on cart';
            }else{
                Cart::add($item);
                $retval['success'] = true;
                $retval['message'] = '';
                $code = 200;
            }

        }

        return response()->json($retval, $code);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $rowId)
    {   
        $retVal = [];
        
        if (array_key_exists($rowId, Cart::content())) {
            $items = $this->convertCartItemToJson();    
            $cartItem = Cart::content()[$rowId];

            foreach ($items as $item) {
                if ($this->codeGen($item) === $cartItem->id) {
                    $retVal = $item;
                    unset($retVal['row_id']);
                    break;
                }
            }
        }

        return response()->json($retVal);
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
        $retVal = [
            "success" => false,
            "message" => ''
        ];
        $retCode = 400;

        $cartItem = Cart::content()[$id];
        $validItem = [];
        $flag = true;
        $err = '';
        if ($cartItem) {
            $quantities = $request->all();

            foreach ($quantities as $quantity => $value) {
                $duplicates = Cart::search (function ($item, $rowId) use ($cartItem, $quantity) {
                    return ($item->id === $cartItem->id) && ($quantity === $item->options['prize_type']);
                });

                if (count($duplicates) === 1) {
                    $dup = $duplicates->first();
                    $validItem[] = array ('item' => $dup, 'newQty' => $value);
                }else {
                    $flag = false;
                    $err = $quantity;
                    break;
                }
            }

            if ($flag) {
                foreach ($validItem as $item) {
                    Cart::update($item['item']->rowId, $item['newQty']);
                }
                $retVal['success'] = true;
                $retCode = 200;
            }else {
                $retVal['message'] = 'unknow value: ' . $err;
            }
        }else {
            $retVal['message'] = 'blank update field';
        }   

        return response()->json($retVal, $retCode);
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

    private function decode ($item) {
        $decoded = explode ('|', $item);
        return $decoded;
    }
    private function convertToCartItem ($request) {
        $cartItems = [];

        $ticketService = App::make('ticketService');
        //Log::error ($request->all());
        foreach ($request->all() as $item) {
            //query for object prize

            $prizeTypes = $item['quantity'];

            foreach ($prizeTypes as $prizeType => $quantity) {
                $cartItem = [];

                if ($quantity <= 0) continue;

                $id = $this->codeGen($item);

                $cartItem = array_merge($cartItem, array('id' => $id));

                $cartItem = array_merge ($cartItem, ['name' => $item['name']] );

                //Log::info ("prize type: ". $prizeType);

                $cartItem = array_merge ($cartItem ,['options' => ['prize_type' => $prizeType]]);
                
                //get ticket prize    
                if ($item['product'] === 'ticket') {
                    $ticket = $ticketService->getData(['id' => $item['id']])->first();
                    //Log::Info("ticket querry");
                    //Log::Info($ticket);
                    if ($ticket) {
                        $allPrize = [];
                        $prices = explode (";", $ticket->price);
                        foreach ($prices as $price) {
                            $price_component = explode(":", $price);
                            $allPrize  = array_merge ($allPrize, array ( $price_component[0] => $price_component[1] ));
                        }

                        if (array_key_exists($prizeType, $allPrize)) {
                            //Log::Info("prize exist".$prizeType);
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
        //Log::error ($cartItems);
        return $cartItems;
    } 

    private function convertCartItemToJson () {
        $items = [];
        $exist = [];
        foreach (Cart::content() as $key => $value) {
            $item['row_id'] = $value->rowId;

            if (array_key_exists($value->id, $exist)) {
                continue;
            }

            //explode id
            $decoded = $this->decode($value->id);

            $item['id'] = $decoded[1];
            $item['product'] = $decoded[0];
            $item['type'] = $decoded[2];

            $item['name'] = $value->name;

            //get all dupplicates
            //dd(Cart::content());
            $duplicates = Cart::search(function ($cartItem, $rowId) use ($value) {
                return $cartItem->id === $value->id;
            });
            //dd ($duplicates);
            $item['quantity'] = [];
            $item['price'] = [];
            $item['sub_total'] = 0;

            foreach ($duplicates as $dup) {
                $item['quantity'] = array_merge($item['quantity'], [$dup->options['prize_type'] => $dup->qty]);
                $item['price'] = array_merge($item['price'], [$dup->options['prize_type'] => $dup->price]);
                $dup_sup = $dup->price * $dup->qty;
                $item['sub_total'] += $dup_sup;
            }
            //get quantity 
            //$item['quantity'] = [$value->options['prize_type'] => $value->qty];

            //create prize
            //$item['price'] = [$value->options['prize_type'] => $value->price];

            //$item['sub_total'] = $value->price * $value->qty;
            
            $items[] = $item;
            $exist[$value->id] = true;
        }
        
        return $items;
    }   
}
