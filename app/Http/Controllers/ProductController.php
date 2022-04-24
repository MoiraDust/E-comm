<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Trending;

class ProductController extends Controller
{
    //return all product
    function index(){
        $data = Product::all();
        $trending = Trending::all();
    //pass data to the product view
        return view('product',['products'=>$data,'trendings'=>$trending]);
    }
}
