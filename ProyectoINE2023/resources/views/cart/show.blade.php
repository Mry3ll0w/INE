@extends('templates.master')
@section('contenido')

<div class="d-flex m-4">
    <div class="container-fluid">
    @if($cart != null)    
    @foreach ($cart->htItem as $i)
    <div class="row">
      <div class="col-sm-6">
        <div class="card mt-3">
          <div class="row g-0 d-flex">
            <div class="col-4">
              <img class="img-fluid h-100" src={{$i['imgUrl']}} alt="..." width="200">
            </div>
            <div class="col-8">
            <div class="card-body">
                <h5 class="card-title">{{$i['name']}}</h5>
                <p class="card-text">
                    <span class='ml-2 mr-2'>{{$i['price']}} € </span>
                    <br />
                    <span class='ml-2 mr-2'>Cantidad : {{$i['quantity']}}
                        <a 
                            href="{{ route('cart.operation',[ 'operation' => 'add', 'product' => $i['id']]) }}"
                        >
                            <img 
                                class='img-fluid mr-2'
                                src="https://img.icons8.com/dotty/40/null/plus-2-math.png"
                                
                            />
                        </a>
                        <a
                            href={{ route('cart.operation',[ 'operation' => 'remove', 'product' => $i['id']]) }}
                        >
                            <img 
                                class='img-fluid mr-2'
                                src="https://img.icons8.com/dotty/40/null/minus-2-math.png"
                            />
                        </a>
                        <a href={{ 
                            route('cart.operation',[ 'operation' => 'removeAll', 'product' => $i['id']]) }}> 
                            Eliminar Producto 
                        </a>
                    </span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    
    </div>
    @endforeach
    @endif
    <div class='container d-flex m-4'>
        @if($cart->dTotalPrice >= 0)
            <h2> Subtotal: {{$cart->dTotalPrice}} € </h2>
        @else
            <div class="d-flex justify-content-center">
                <h1> No hay elementos en el carro </h1>
            </div>
        @endif
        <br />
    </div>
    </div>
</div>
@endsection