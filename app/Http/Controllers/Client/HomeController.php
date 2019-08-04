<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        return view('Client.home.index');
    }
    public function about(){
        return view('Client.home.about');
    }
    public function contact(){
        return view('Client.home.contact');
    }
    public function faq(){
        return view('Client.home.faq');
    }
}
