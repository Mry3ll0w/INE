
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
        <a class="navbar-brand" href="/"><i class="fa-solid fa-shop me-2"></i> <strong>UCA SHOP</strong></a>
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
              <a class="nav-link mx-2 text-uppercase active" aria-current="page" href="#">Ofertas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2 text-uppercase" href="#">Productos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2 text-uppercase" href="#">Servicios</a>
            </li>
            
          </ul>
          <ul class="navbar-nav ms-auto ">
            <li class="nav-item">
              <a class="nav-link mx-2 text-uppercase" href="/cart"><i class="fa-solid fa-cart-shopping me-1"></i>
                <img src="https://img.icons8.com/dotty/30/null/shopping-cart.png" > 
                <span>
                  @if (session()->get('cart') !== null)
                    {{session()->get('cart')->iTotalItems}}
                  @endif 
                  
                </span>
              </a>
            </li>
            <li class="nav-item">
              
                @if (Auth::check())
                  <a class="nav-link mx-2 text-uppercase" href="/dashboard">
                    <i class="fa-solid fa-circle-user me-1"></i> 
                    {{ Auth::user()->name }} 
                    <span class=""> 
                      <img src="https://img.icons8.com/external-tal-revivo-filled-tal-revivo/40/000000/external-webpage-log-out-of-personal-account-layout-web-filled-tal-revivo.png"/>
                    </span>
                  </a>
                @else
                  <a class="nav-link mx-2 text-uppercase" href="/login">
                    <i class="fa-solid fa-circle-user me-1"></i>Autenticación</a>
                @endif
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>