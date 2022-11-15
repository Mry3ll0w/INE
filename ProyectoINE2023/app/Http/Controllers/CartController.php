<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function show(Request $request){
        $cart = new Cart($request->session()->get('cart'));
        return view('cart.show',compact('cart'));
    }

    public function add(Request $request, Product $product){
        $cart = new Cart($request->session()->get('cart'));
        $cart->add($product);
        return $cart;
    }

    public function remove(Request $request, Product $product){
        $cart = new Cart($request->session()->get('cart'));
        $cart->remove($product);
        return $cart;
    }

    public function removeAll(Request $request, Product $product){
        $cart = new Cart($request->session()->get('cart'));
        $cart->removeAll($product);
        return $cart;
    }

    public function operation(String $sOperation, Product $product, Request $request){

        $cart = new Cart($request->session()->get('cart'));
        switch($sOperation){
            case "add":
                $cart = $this->add($request, $product);
            break;
            case "remove":
                $cart = $this->remove($request, $product);
            break;
            case "removeAll":
                $cart = $this->removeAll($request, $product);
            break;
        }

        $request->session()->put('cart',$cart);
        return view('cart.show',compact('cart'));
    }

}
