<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //return all product
    function index(){
        $data = Product::all();
    //pass data to the product view
        return view('product',['products'=>$data]);
    }
}
