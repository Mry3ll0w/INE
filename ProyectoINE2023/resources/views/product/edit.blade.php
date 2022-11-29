@extends('templates.master')
@section('contenido')
<div class="container d-flex mt-3 mb-3">
    <form 
        name="product-user-form" id="product-user-form"
        action="{{ route('product.update', ['product' => $product]) }}" method="post"
    >
    @method('PATCH')
    @csrf
        <div class="row d-flex">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Nombre</span>
                <input type="text" 
                    class="form-control" 
                    id="name"
                    name="name"
                    aria-describedby="basic-addon1"
                    value="{{$product->name}}"
                >
            </div>
            <div class="form-floating mb-4">
                <textarea id="description" name="description" class="form-control" placeholder='Sin descripcion' id="floatingTextarea2" style="min-height: 140px">
                    {{$product->description}}
                </textarea>
                <label for="floatingTextarea2">Descripcion del Producto</label>
            </div>
            <label for="company_id">{{ __('auth.Company') }}</label>
            <select class="form-control w-50 ms-4" name="company_id" id="company_id" required>
                <option value="selected">{{ __('auth.DoSelect') }}</option>
                @foreach($aCompany as $company)
                <option selected value="{{ $company->id }}">{{ $company->name }}</option>
                @endforeach
            </select>
            <div class="row">
                <button type="submit" class="btn btn-primary w-25 mt-3">
                    {{__('auth.Save') }}
                </button>
            </div>
        </div>
    </form>
</div>
@endsection