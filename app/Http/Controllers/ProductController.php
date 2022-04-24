<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Trending;

class ProductController extends Controller
{
    //return all product
    function index()
    {
        $data = Product::all();
        $trending = Trending::all();
        //pass data to the product view
        return view('product', ['products' => $data, 'trendings' => $trending]);
    }

    //find by id
    function detail($id)
    {
        //        return Product::find($id);
        $data = Product::find($id);
        return view('details', ['product' => $data]);
    }

    function trending_detail($id)
    {
        $data = Trending::find($id);
        return view('trending', ['product' => $data]);
    }

//cart
    function addToCart(Request $req)
    {
        if ($req->session()->has('user')) {
//add to database
            /*1 . new object*/
            $cart = new Cart();
            /*2. get data from session*/
            $cart->user_id=$req->session()->get('user')['id'];
            /*3. get data from form*/
            $cart->product_id=$req->product_id;
            /*4. save*/
            $cart->save();
            return redirect("/");
        } else {
            return redirect("/login");
        }
    }
}
