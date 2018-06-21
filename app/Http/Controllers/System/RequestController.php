<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 6/4/2018
 * Time: 10:21 PM
 */

namespace App\Http\Controllers\System;


use App\Http\Controllers\Controller;

class RequestController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index () {
        return view('system.request.index');
    }
}