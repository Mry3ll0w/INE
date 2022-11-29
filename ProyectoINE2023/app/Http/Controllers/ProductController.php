<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Company;

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
        return view('product.show',compact('product', 'success'));
    }

    public function update(Product $product, Request $request){
        $aCompany = Company::all();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->company_id = $request->company_id; 
        $product->save();
        return view('product.edit',compact('product', 'aCompany'));
    }

    public function edit(Product $product){
        $aCompany = Company::all();
        return view('product.edit', compact('product', 'aCompany'));
    }

   

}
