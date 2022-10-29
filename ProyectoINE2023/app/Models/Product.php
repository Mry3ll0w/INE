<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Product extends Model
{
    use HasFactory;

    static function NewProducts() {

        $sNow = date('Y-m-d H:i:s');
        $sPreviousWeek = date('Y-m-d H:i:s', strtotime($sNow . '- 1 week')); 

        return Product::where(DB::raw(
            'date_format(updated_at, "%Y-%m-%d")'),
            '<=', date('Y-m-d', strtotime($sNow)))->where('updated_at', '>=', 
            date('Y-m-d',strtotime($sPreviousWeek)))->get();
    }
    
    static function Offerings(){
        //si la fecha de hoy es menor o igual a la fecha caducidad de la oferta y mayor a la caducidad del inicio de la oferta
        $sNow = date('Y-m-d H:i:s');

        return Product::where(DB::raw(
            'date_format(discountStart_at, "%Y-%m-%d")'),
            '<=', date('Y-m-d', strtotime($sNow)))->where('discountEnd_at', '>=', 
            date('Y-m-d',strtotime($sNow)))->get();
        
    }
    
    public function HasDiscount(Product $p){
        $sNow = date('Y-m-d H:i:s');

        return ($p->discountPercent > 0) && ($p->discountStart_at <= $sNow && $sNow <= $p->discountEnd_at);
    }

}