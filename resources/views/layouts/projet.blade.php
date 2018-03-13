<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Portfolio - PERNICENI Ugo</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/coming-soon.min.css') }}" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  </head>

  <body>

    <div class="overlay">
      <div class="overlayFenetre">
        <div style="margin-left: 40%; 
                    margin-right: 15%; 
                    margin-top: 1.5%; 
                    margin-bottom: : 1.5%;
                    /*background-color: blue;*/
                    ">

             @yield('content')

        </div> 
      </div>
    </div>

    <div class="masthead">
      <div class="masthead-bg"></div>
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-12 my-auto">
            <div class="masthead-content text-white py-5 py-md-0">
              <h1 class="mb-3">Mes projets</h1>
              <p class="mb-5">Voici l'arborescence de mes projets :
                <ul>
                  <li><a href="/mesProjets">Mes projets</a></li>
                  <li id="flip1">TP
                    <ul>           
                      <div id="panel1">
                        <li><a href="/mesProjets/TP/solitaire">Solitaire</a></li>
                      </div>
                    </ul>
                  </li>
                  <li id="flip2">PPE
                    <ul>
                      <div id="panel2">
                        <li><a href="/esf">Vzegzergergls</a></li>
                      </div>
                    </ul>
                  </li>
                  <li id="flip3">Comptabilité & gestion
                    <ul>
                      <div id="panel3">
                        <li><a href="/qsdfd">Viszegrzeols</a></li>
                      </div>
                    </ul>
                  </li>
                  <li id="flip4">Stage
                    <ul>
                      <div id="panel4">
                        <li><a href="/fsqf">Vzefetgzerls</a></li>
                      </div>
                    </ul>
                  </li>
                </ul>
              </p>

            </div>
            <br /><br /><br />
            <div class="masthead-content text-white py-5 py-md-0">
              <a class="btn btn-secondary" href="/" type="button">&cularr; Retour page principal</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="social-icons">
      <ul class="list-unstyled text-center mb-0">
        <li class="list-unstyled-item">
          <a href="#">
            <i class="fa fa-twitter"></i>
          </a>
        </li>
        <li class="list-unstyled-item">
          <a href="#">
            <i class="fa fa-facebook"></i>
          </a>
        </li>
        <li class="list-unstyled-item">
          <a href="#">
            <i class="fa fa-instagram"></i>
          </a>
        </li>
      </ul>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vide/0.5.1/jquery.vide.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="{{ asset('js/coming-soon.min.js') }}" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  </body>

</html>
