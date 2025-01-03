<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscribesController extends Controller
{
    public function index(){
        return view('subscribes');
    }
}
