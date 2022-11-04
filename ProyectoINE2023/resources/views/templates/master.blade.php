<!doctype html>
<!-- Bootstrap first template for Internet y Negocio Electrónico, University of Cadiz,
     since 2019, based on https://www.w3schools.com/bootstrap4/bootstrap_templates.asp -->
<html class="h-100" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">      
    <link rel="stylesheet" href="/css/bootstrap.min.css"/>
    <style>
      .fakeimg { height: 100px; background: #aaa; }
    </style>

    <title>Proyecto de INE</title>
  </head>
@include('layouts.header')
  <body class="d-flex flex-column h-100">
    @yield('contenido')
    @include('layouts.footer')
  </body>
</html>
