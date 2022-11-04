@extends('templates.master')

@section('contenido')
    <section class='py-5'>
        <div class='container px-4 px-lg-5 mt-5'>
          <div class='row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 '>
            
            @foreach ($aProduct_offering as $i )
              <div class='col mb-5'>
              <div class="card d-flex">
                @if ($i->HasDiscount($i))
                  <h5 class="card-header" style="color: red"> Descuento: {{$i->discountPercent}}% </h5>  
                @endif
                <div class="card-body">
                  <h5 class='card-title d-flex justify-content-center'> {{$i->name}}</h5>
                  <img class="card-img-top mb-3" src="{{$i->imgUrl}}" />
                  <p class='card-text'>{{$i->description}} </p>
                </div>
                @if ($i->HasDiscount($i))
                  <h5 class="card-footer m-2 border d-flex justify-content-center">
                    <span style="text-decoration:line-through;">{{round($i->pricePerCredit * 6,2)}}€ </span>
                    <img style="margin-left:10px; margin-right:10px;" src="https://img.icons8.com/flat-round/23/000000/thick-long-right-arrow--v1.png"/>
                    <span style="color: red;font-weight:bold;"> {{round(($i->pricePerCredit * ((100-$i->discountPercent)/100))*6,2)}}€</span>
                  </h5>
                @else
                  <h5 class="card-footer m-2 border d-flex justify-content-center">
                    <span style="font-weight:bold;">{{round($i->pricePerCredit * 6,2)}}€ </span>
                    
                @endif
                
               
                </div>
            </div>
            @endforeach
          </div>    
      </section>
@endsection
