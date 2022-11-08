<?php

namespace App\Models;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    
    //Variables
    public $htItem = [];//Formato => id : ,quantity: ,  name : , price : 
    public $iTotalItems = 0;
    public $dTotalPrice = 0 ;

    public function __construct(Cart $cart = null){
        if($cart != null){
            $this->htItem = $cart->htItem;
            $this->iTotalItems = $cart->iTotalItems;
            $this->dTotalPrice = $cart->dTotalPrice;
        }
    }

    public function add(Product $product){
        
        if(array_key_exists($product->id, $this->htItem)){
            $htItem[$product->id]['quantity']++;
        }
        else{
            $this->htItem[$product->id] =  array(
                'id' => $product->id,
                'quantity' => 1,
                'name' => $product->name,
                'price' => $product->CalculatedPrice($product),
                'imgUrl' => $product->imgUrl
            );
        }
        $this->iTotalItems ++;
        $this->dTotalPrice += $product->CalculatedPrice($product);
        // ! ARREGLAR ASSERTS DEL TEST
    }

    public function RemoveAll(Product $product){
        if($product != null){
            unset($htItem[$product->id]);
            $dTotalPrice = 0;
            $iTotalItems = 0;
        }
    }

    public function Remove(){
        if(array_key_exists($product->id, $htItem)){
            if($htItem[$product->id]['quantity'] > 0)
                $htItem[$product->id]['quantity'] --;
            else
                $htItem[$product->id]['quantity'] = 0;
            $iTotalItems --;
            $dTotalPrice -= $htItem[$product->id]['price'];
        }
    }

}
