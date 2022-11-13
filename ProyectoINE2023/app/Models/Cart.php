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
            $this->htItem[$product->id]['quantity']++;
        }
        else{
            $this->htItem[$product->id] =  array(
                'id' => $product->id,
                'quantity' => 1,
                'name' => $product->name,
                'price' => $product->CalculatedPrice($product),
                'imgUrl' => $product->imgUrl
            );
            $this->iTotalItems ++;
        }
        
        $this->dTotalPrice += $product->CalculatedPrice($product);
        
    }

    public function RemoveAll(Product $product){
        if($product != null){
            $this->iTotalItems --;//Sacamos del total de elementos 1 de los productos
            $this->dTotalPrice -= $product->CalculatedPrice($product) * $this->htItem[$product->id]['quantity'];
            unset($this->htItem[$product->id]);
        }
    }

    public function Remove(Product $product){
        if(array_key_exists($product->id, $this->htItem)){
            if($this->htItem[$product->id]['quantity'] > 0)
                $this->htItem[$product->id]['quantity'] --;
            else
                $this->htItem[$product->id]['quantity'] = 0;
            
            $this->dTotalPrice -= $this->htItem[$product->id]['price'];
        }
    }

}
