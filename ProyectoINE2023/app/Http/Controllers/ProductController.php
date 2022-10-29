<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function welcome(){
        $aProduct_offering = Product::Offerings();
        $aProduct_new = Product::NewProducts();
        return view('welcome', compact('aProduct_offering', 'aProduct_new'));
    }

}
