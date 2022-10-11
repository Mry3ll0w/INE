<!doctype html>
<!-- Bootstrap first template for Internet y Negocio Electrónico, University of Cadiz,
     since 2019, based on https://www.w3schools.com/bootstrap4/bootstrap_templates.asp -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">      
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <style>
      .fakeimg { height: 100px; background: #aaa; }
    </style>

    <title>Proyecto de INE</title>
  </head>
  <header>
    <style>
      a {
	        font-size: 14px;
	        font-weight: 700
	    }
    
	    .superNav {
	        font-size: 13px;
	    }
    
	    .form-control {
	        outline: none !important;
	        box-shadow: none !important;
	    }
    
	    @media screen and (max-width:540px) {
	      .centerOnMobile {
	          text-align: center
	      }
	    }
    </style>
  
    <nav class="navbar navbar-expand-lg bg-white sticky-top navbar-light p-3 shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><i class="fa-solid fa-shop me-2"></i> <strong>UCA SHOP</strong></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="mx-auto my-3 d-lg-none d-sm-block d-xs-block">
          <div class="input-group">
            <span class="border-warning input-group-text bg-warning text-white"><i class="fa-solid fa-magnifying-glass"></i></span>
            <input type="text" class="form-control border-warning" style="color:#7a7a7a">
            <button class="btn btn-warning text-white">Buscar</button>
          </div>
        </div>
        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
          <div class="ms-auto d-none d-lg-block">
            <div class="input-group">
              <span class="border-warning input-group-text bg-warning text-white"><i class="fa-solid fa-magnifying-glass"></i></span>
              <input type="text" class="form-control border-warning" style="color:#7a7a7a">
              <button class="btn btn-warning text-white">Buscar</button>
            </div>
          </div>
          <ul class="navbar-nav ms-auto ">
            <li class="nav-item">
              <a class="nav-link mx-2 text-uppercase active" aria-current="page" href="#">Offers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2 text-uppercase" href="#">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2 text-uppercase" href="#">Catalog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2 text-uppercase" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2 text-uppercase" href="#">About</a>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto ">
            <li class="nav-item">
              <a class="nav-link mx-2 text-uppercase" href="#"><i class="fa-solid fa-cart-shopping me-1"></i> Cart</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2 text-uppercase" href="#"><i class="fa-solid fa-circle-user me-1"></i> Account</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <body>
  
  

  <!-- FOOTER -->
  </body>
  <div class="container my-5">

  <footer class="fixed-bottom text-center text-lg-start text-white" style="background-color: rgba(253, 159, 23, 100)">
    <!-- Grid container -->
    <div class="container p-1" style="font-size: 13px">
      <!--Grid row-->
      <div class="row mt-4">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Acerca de</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white"><i class="fas fa-book fa-fw fa-sm me-2"></i>Quienes somos</a>
            </li>
            <li>
              <a href="#!" class="text-white"><i class="fas fa-book fa-fw fa-sm me-2"></i>Trabaja con nosotros</a>
            </li>
            <li>
              <a href="#!" class="text-white"><i class="fas fa-user-edit fa-fw fa-sm me-2"></i>Aviso legal</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Navegación</h5>

          <ul class="list-unstyled">
            <li>
              <a href="#!" class="text-white"><i class="fas fa-shipping-fast fa-fw fa-sm me-2"></i>idioma/lenguaje</a>
            </li>
            <li>
              <a href="#!" class="text-white"><i class="fas fa-backspace fa-fw fa-sm me-2"></i>Mapa del sitio</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0" style="font-size: 13px">
          <h5 class="text-uppercase">Ayuda</h5>

          <ul class="list-unstyled">
            <li>
              <a href="#!" class="text-white"><i class="fas fa-at fa-fw fa-sm me-2"></i>Gestión de compras</a>
            </li>
            <li>
              <a href="#!" class="text-white"><i class="fas fa-at fa-fw fa-sm me-2"></i>Tarifas y politicas de envio</a>
            </li>
            <li>
              <a href="#!" class="text-white"><i class="fas fa-at fa-fw fa-sm me-2"></i>Devolver/reemplazar productos</a>
            </li>

            <li>
              <a href="#!" class="text-white"><i class="fas fa-at fa-fw fa-sm me-2"></i>Formas de pago</a>
            </li>
            
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Contacto</h5>

          <ul class="list-unstyled">
            <li>
              <a href="#!" class="text-white"><i class="fas fa-at fa-fw fa-sm me-2"></i>Atención al cliente</a>
            </li>
            <li>
              <a href="#!" class="text-white"><i class="fas fa-shipping-fast fa-fw fa-sm me-2"></i>              </a>
            </li>
            <li>
              <a href="#!" class="text-white"><i class="fas fa-shipping-fast fa-fw fa-sm me-2"></i><img src="https://img.icons8.com/ios-filled/33/1A1A1A/twitter-circled--v1.png"/>
              </a>
            </li>
          </ul>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->
  </footer>

<!-- End of .container -->
  </div>  
  
</html>