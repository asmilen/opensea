<?php

namespace App\Http\Controllers\System;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AttractionController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index () {
        return view('system.attraction.index');
    }
}
