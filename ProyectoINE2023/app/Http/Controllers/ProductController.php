<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;

class ProductController extends Controller
{
    public function welcome(){
        $aProduct_offering = Product::Offerings();
        $aProduct_new = Product::NewProducts();
        return view('welcome', compact('aProduct_offering', 'aProduct_new'));
    }
    public function show(Product $product){
        return view('product.show',compact('product'));
    }

    public function addToCart(Product $product, Request $request){
        
        if($request->session()->exists('cart')){
            $cart = new Cart($request->session()->get('cart'));
            $cart->add($product);
            $request->session()->put('cart',$cart);
            $success = 'El producto ha sido añadido al carro.';  
        }
        else{
            $cart = new Cart();
            $cart->add($product);
            $request->session()->put('cart',$cart);
            $success = 'El producto ha sido añadido al carro.';   
        }
            // ! PREGUNTAR SI ES CORRECTO ASI
        return view('product.show',compact('product', 'success'));
    }
}
