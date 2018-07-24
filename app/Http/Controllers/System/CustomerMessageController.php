<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 6/4/2018
 * Time: 10:21 PM
 */

namespace App\Http\Controllers\System;


use App\Http\Controllers\Controller;
use App\Models\CustomerMessage;

class CustomerMessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index () {
        return view('system.customer-message.index');
    }

    public function edit (CustomerMessage $customerMessage) {
        return view('system.customer-message.edit',compact('customerMessage'));
    }
}