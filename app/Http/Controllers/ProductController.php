<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Session;
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
            $cart->user_id = $req->session()->get('user')['id'];
            /*3. get data from form*/
            $cart->product_id = $req->product_id;
            /*4. save*/
            $cart->save();
            return redirect("/");
        } else {
            return redirect("/login");
        }
    }

//    product search
    function search(Request $req)
    {
        $data = Product::where('productName', 'like', '%' . $req->input('query') . '%')->get();
        return view('search', ['products' => $data]);
    }

//    count items in cart
    static function cartItem()
    {
//        因为需要userID所以需要导入session
        $userId = Session::get('user')['id'];
        return Cart::where("user_id", $userId)->count();
    }

    //    cart list
    function cartList()
    {
        $userId = Session::get('user')['id'];
        $product = DB::table("carts")
            ->join('products', 'carts.product_id', '=', 'products.id')
            ->where('carts.user_id', $userId)
            ->select('products.*', 'carts.id as cart_id')
            ->get();
        return view('cart', ['products' => $product]);
    }

    // remove item
    function removeItem($id)
    {
        Cart::destroy($id);
        return redirect("/cart");
    }

    //check order
    function checkOrder()
    {
        $userId = Session::get('user')['id'];
        $total = DB::table("carts")
            ->join('products', 'carts.product_id', '=', 'products.id')
            ->where('carts.user_id', $userId)
            ->select('products.*', 'carts.id as cart_id')
            ->sum('products.price');
        return view('checkorder', ['total' => $total]);
    }

    //place order
    function placeOrder(Request $req)
    {
        /*1. $req是表单的信息*/
        /*2. 获取Cart的信息*/
        $userId = Session::get('user')['id'];
        $cartsInfo = Cart::where('user_id', $userId)->get();
        /*3. 赋值.carts [] */
        foreach ($cartsInfo as $cartInfo) {
            /*4. new object*/
            $orderInfo = new Order();
            $orderInfo->product_id = $cartInfo->product_id;
            $orderInfo->user_id = $userId;
            $orderInfo->status = "pending";
            $orderInfo->payment_method = $req->payment;
            $orderInfo->address = $req->address;
            $orderInfo->save();
        }
        /*5. delete the cart*/
        Cart::where('user_id', $userId)->delete();
        return redirect('/');
    }

    //history order
    function orderHistory()
    {
        $userId = Session::get('user')['id'];
        $order = DB::table("orders")
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->where('orders.user_id', $userId)
            ->select('*')
            ->get();
        return view('/myorders', ['products' => $order]);
    }
}
