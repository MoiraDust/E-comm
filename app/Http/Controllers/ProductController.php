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
    //find by id
    function detail($id){
//        return Product::find($id);
        $data = Product::find($id);
        return view('details',['product'=>$data]);
    }
    function trending_detail($id){
        $data = Trending::find($id);
        return view('trending',['product'=>$data]);
    }
}
