<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function shop(){
        return view('Client.product.shop-left-sidebar');
    }
}
