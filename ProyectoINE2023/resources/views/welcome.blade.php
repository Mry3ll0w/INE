<!doctype html>
<!-- Bootstrap first template for Internet y Negocio Electrónico, University of Cadiz,
     since 2019, based on https://www.w3schools.com/bootstrap4/bootstrap_templates.asp -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">      
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <!-- 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script> 
    -->
    <style>
      .fakeimg { height: 100px; background: #aaa; }
    </style>

    <title>My INE project</title>
  </head>

  <body>

    <!-- LAYOUT: HEADER -->

      <!-- SECTION: Title -->
      <div class="jumbotron text-center" style="margin-bottom:0;padding:20px;">
        <h1>My INE project in Laravel/Bootstrap</h1>
        <p>Resize this responsive page to see the effect!</p>
      </div>

      <!-- SECTION: Main menu -->
      <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Link</a></li>    
          </ul>
        </div>  
      </nav>

    <!-- LAYOUT: CENTER -->
    <div class="container-fluid" style="margin-top:30px">
      <div class="row">

        <!-- BLOCK: LEFT -->
        <div class="col-sm-3"> <!-- col-sm-3 means three out of twelve columns -->

          <!-- SECTION: About me -->
          <h2>About Me</h2>
          <h5>Photo of me:</h5>
          <div class="fakeimg">Fake Picture</div>
          <p>Some text about me in culpa qui officia deserunt mollit anim.</p>
          
          <!-- SECTION: Some links -->
          <h3>Some Links</h3>
          <p>Lorem ipsum dolor sit ame.</p>
          <ul class="nav nav-pills flex-column">
            <li class="nav-item"><a class="nav-link active" href="#">Active</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
            <li class="nav-item"><a class="nav-link disabled" href="#">Disabled</a></li>
          </ul>
          <hr class="d-sm-none"/> <!-- d-sm-none means that the element will show only when the screen is small -->
        </div>

        <!-- BLOCK: CENTER -->
        <div class="col-sm-7"> <!-- col-sm-7 means seven out of twelve columns -->
          <!-- SECTION: Entries -->          
          <h2>TITLE HEADING 1</h2>
          <h5>Title description 1, Dec 7, 2018</h5>
          <div class="fakeimg">Fake Image 1</div> <!-- fakeimg is defined in the <style> tag, at the beginning -->
          <p>Some text...</p>
          <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
          <div class="alert alert-warning" role="alert">
            <strong>Warning!</strong> Example warning for entry 1.
          </div>
          <br/>
          <h2>TITLE HEADING 2</h2>
          <h5>Title description 2, Sep 2, 2019</h5>
          <div class="fakeimg">Fake Image 2</div>
          <p>Some text...</p>
          <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
          <br/>
        </div>

        <!-- BLOCK: RIGHT -->
        <div class="col-sm-2 sidenav"> <!-- col-sm-2 means two out of twelve columns -->
          <!-- SECTION: Cards -->
          <h2>Cards</h2>
          <!-- Style are directly included in the style attribute just for illustrative reasons. -->
          <!-- However, including them in <style> or in a CSS file is a better practice. -->
          <div class="card card-body bg-faded" style="background-color: #0ff; margin-bottom:15px;">
            <h4 class="card-title">Card 1</h4>
            <p class="card-text">Text of card 1.</p>
            <a href="#" class="btn btn-primary">This is a Button</a>
          </div>           
          <div class="card card-body bg-light" style="margin-bottom:15px;">
            <h4 class="card-title">Card 2</h4>
            <div class="fakeimg">Fake card 2 image</div>
            <p class="card-text">Text of card 2.</p>
          </div>           
        </div>
      </div>
    </div>

    <!-- LAYOUT: FOOTER -->
    <div class="jumbotron text-center" style="margin-bottom:0;padding:20px">
      <p>Footer</p>
    </div>

    <!-- Loading Javascripts -->   
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>')</script>
    <!-- <script src="../../assets/js/vendor/popper.min.js"></script> -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>