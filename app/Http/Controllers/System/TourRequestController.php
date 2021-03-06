<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 6/4/2018
 * Time: 10:21 PM
 */

namespace App\Http\Controllers\System;


use App\Http\Controllers\Controller;
use App\Models\TourRequest;

class TourRequestController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index () {
        return view('system.tour-request.index');
    }

    public function edit (TourRequest $tourRequest) {
        return view('system.tour-request.edit',compact('tourRequest'));
    }
}