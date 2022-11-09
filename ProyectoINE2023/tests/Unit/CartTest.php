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
        $dPriceSum = 0;
        foreach($aProducts as $i){
            $cart->add($i);
            $dPriceSum +=$i->CalculatedPrice($i);
        }
        
        //Comprobamos la longitud del carrito (si todo esta correcto tiene que tener 3 elementos)
        $this->assertTrue(count($cart->htItem) == $cart->iTotalItems);
        $this->assertTrue($dPriceSum == $cart->dTotalPrice);

    }

    public function testRemoveAll(){
        //Inicializamos el carrito y metemos algunos elemento en el
        $cart = new Cart();
        $product = new Product();
        $aProducts = $product->Offerings();
        
        $dPriceSum = 0;
        foreach($aProducts as $i){
            $cart->add($i);
            $dPriceSum +=$i->CalculatedPrice($i);
        }
        $eliminatedProduct = $aProducts[0];
        $dPriceSum -= $eliminatedProduct->CalculatedPrice($eliminatedProduct);
        //Lo borramos y comprobamos que los elementos sean eliminados
        $cart->RemoveAll($eliminatedProduct);
        
        $this->assertTrue(count($cart->htItem) == 2);
        $this->assertTrue($cart->iTotalItems == 2);
        $this->assertTrue($dPriceSum == $cart->dTotalPrice);
        //! Falta comprobar resta de precio del producto del total
    }

    public function testRemove(){
        //Inicializamos el carrito y metemos algunos elemento en el
        $cart = new Cart();
        $product = new Product();
        $aProducts = $product->Offerings();

        $dPriceSum = 0;
        foreach($aProducts as $i){
            $cart->add($i);
            $dPriceSum +=$i->CalculatedPrice($i);
        }
        $eliminatedProduct = $aProducts[0];
        $cart->Remove($eliminatedProduct);
        $dPriceSum -= $eliminatedProduct->CalculatedPrice($eliminatedProduct);
        
        //Comprobamos que sigue dentro del carrito con cantidad 0 (ya que no se saca de los items totales, total de prods diferentes)        
        $this->assertTrue(count($aProducts) == $cart->iTotalItems);
        $this->assertTrue($dPriceSum == $cart->dTotalPrice);
    }

    
}
