<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompareController extends Controller
{
    public function compare(){
        return view('client.compare.compare');
    }
}
