<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\cart;
use App\Order;
use Session;
use Illuminate\Support\Facades\DB; 

class ProductController extends Controller
{
    //
    function index()
    {
        $data= Product::all();
        return view ('product',['products'=>$data]);
    }
    function detail($id)
    {
        $data =Product::find($id);
        return view('detail',['products'=>$data]);
    }
    function search(Request $request)
    {
        return $req->input();
        where('name','like','%',$req->input('query'),'%')
        ->get();
        return view('search',['products'->$data]);
    }
    function addToCart(Request $req)
    {
        if($req->session()->has('logins'))
        {
            $carts= new Cart;
            $carts->user_id=$req->session()->has('logins')['id'];
            $carts->product_id=$req->product_id;
            $carts->save();
            return redirect('/');
        }
        else
        {
            return redirect('/login');
        }
    }
    static function cartItem()
    {
        $userId=Session::get('logins')['id'];
        return cart::where('user_id',$userId)->count();
    }
    function cartlist()
    {
        $userId=Session::get('logins')['id'];
        $data= DB::table('carts')
        ->join('products','carts.product_id','products.id')
        ->select('products.*','cart_id as cart_id')
        ->where('cart.user_id',$userId)
        ->get();

        return view('cartlist',['products'=>$data]);
    }
    function removeCart($id)
    {
        cart::destroy($id);
        return redirect('cartlist');
    }
    function ordernow()
    {
        $userId=Session::get('logins')['id'];
        $total= DB::table('carts')
        ->join('products','carts.product_id','products.id')
        ->where('cart.user_id',$userId)
        ->sum('products.price');

        return view('ordernow',['total'=>$total]);        
    }
    function orderplace(Request $req)
    {
        $userId=Session::get('logins')['id'];
        $allCart=cart::where('user_id',$userId)->get();
        foreach($allCart as $carts)
        {
            $order=new Order;
            $order->product_id=$carts['product_id'];
            $order->user_id=$carts['user_id'];
            $order->address=$req->address;
            $order->status="pending";
            $order->payment_method=$req->payment;
            $order->payment_status="pending";
            $order->save();
        }
        cart::where('user_id',$userId)->delete();
        return redirect('/');
        //return $req->input();
    }
    function myorder()
    {
        $userId=Session::get('logins')['id'];
        return DB::table('orders')
        ->join('products','orders.product_id','products.id')
        ->where('orders.user_id',$userId)
        ->get();

        return view('myorder',['orders'=>$orders]); 
    }
}
