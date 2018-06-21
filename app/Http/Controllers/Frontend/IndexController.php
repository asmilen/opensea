<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tour;

class IndexController extends Controller
{
    public function index(){
    	$tours = Tour::orderBy('id')->get();
        return view('frontend.index.index', compact([
        	'tours'
        ]));
    }
}
