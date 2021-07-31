<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB\Driver\Session;

class WebController extends Controller
{
    //
    public function home()
    {
        return view("home");
    }

    public function aboutUs()
    {
        return view("about-us");
    }

    public function brand()
    {
        return view("brand");
    }

    public function cart()
    {
        $cart = Session::get("cart");
        return view("cart.cart", ["cart" => $cart]);
    }
    public function checkout(){
        $cart = Session::get("cart");
        if (!count($cart)>0){
            return redirect()->to("/cart");
        }
        return view("cart.checkout",["cart"=>$cart]);
    }
}
