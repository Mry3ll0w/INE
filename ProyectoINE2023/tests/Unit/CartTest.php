<?php

namespace Tests\Unit;
use App\Models\Cart;
use App\Models\Product;

//use PHPUnit\Framework\TestCase;
use Tests\TestCase;

class CartTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_constructor()
    {
        $cart = new Cart();
        $this->assertTrue($cart->iTotalItems == 0);
        $this->assertTrue(empty($cart->htItems));
        $this->assertTrue($cart->dTotalPrice == 0);
        
    }

    
    public function testAdd(){
        $cart = new Cart();
        $product = new Product();
        $aProducts = $product->Offerings();
        //dd($cart->htItems);
        foreach($aProducts as $i){
            $cart->add($i);
        }

    }
    
}
