@extends('templates.master')

@section('contenido')
    <div class="py-5">
      <div class='container px-4 px-lg-5 mt-5'>
        <div class='row justify-content-center gx-1 gx-lg-1 row-cols-1 row-cols-md-1 row-cols-xl-2 '>
          <div class="card d-flex">
              @if ($product->HasDiscount($product))
                <h5 class="card-header" style="color: red"> Descuento: {{$product->discountPercent}}% </h5>  
              @endif
                <div class="card-body">
                  <h5 class='card-title d-flex justify-content-center'> {{$product->name}}</h5>
                  <img class="card-img-top mb-3" src="{{$product->imgUrl}}" />
                  <p class='card-text'>{{$product->description}} </p>
                  <span style="font-weight:bold;">Creada por: {{$product->Company->name}} </span>
                </div>
                @if ($product->HasDiscount($product))
                  <h5 class="card-footer m-2 border d-flex justify-content-center">
                    <span style="text-decoration:line-through;">{{round($product->pricePerCredit * 6,2)}}€ </span>
                    <img style="margin-left:10px; margin-right:10px;" src="https://img.icons8.com/flat-round/23/000000/thick-long-right-arrow--v1.png"/>
                    <span style="color: red;font-weight:bold;"> {{round(($product->pricePerCredit * ((100-$product->discountPercent)/100))*6,2)}}€</span>
                  </h5>
                @else
                  <h5 class="card-footer m-2 border d-flex justify-content-center">
                    <span style="font-weight:bold;">{{round($product->pricePerCredit * 6,2)}}€ </span>   
                @endif
          </div>
        </div>
      </div>
    </div>
@endsection
