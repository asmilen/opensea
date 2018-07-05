<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tour;

class IndexController extends Controller
{
    public function index(){
        return view('frontend.index.index');
    }

    public function bus()
    {
        return view('frontend.index.bus');
    }
}
