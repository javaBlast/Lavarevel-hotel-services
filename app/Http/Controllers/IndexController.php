<?php

namespace App\Http\Controllers;

use App\Hotels;
use Illuminate\Http\Request;

use App\Http\Requests;

class IndexController extends Controller
{
    public function index(){
        $hotels = Hotels::query();
        return view('index');
    }
}
