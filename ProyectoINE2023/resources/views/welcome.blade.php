@extends('layouts.master')

@section('contenido')
     <section class='py-5'>
        <div class='container px-4 px-lg-5 mt-5'>
          <div class='row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 '>
            
            @for($i = 0; $i < 8; $i++)
              <div class='col mb-5'>
              <div class="card">
                <h5 class='card-header'> EDNL {{$i + 1}}</h5>
                <img class="card-img-top" src="https://www.grapheverywhere.com/wp-content/uploads/2019/07/pic004.jpg" />
              </div>
            </div>
            @endfor
          </div>    
      </section>
@endsection
