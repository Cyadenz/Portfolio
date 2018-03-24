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
      <img src="img/bg-mobile-fallback.jpg" alt="Norway" style="width: 100%;max-height:100%;opacity: 0.2;">
        <div style="    position: absolute;
                        top: 48%;
                        left: 66%;
                        transform: translate(-50%, -50%);;
                    /*background-color: blue;
                    ">

             @yield('content')
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
                  <li><a href="/mesProjets"> Mes projets</a></li>
                  <li id="flip1">TP <i class="fa fa-angle-right"></i>
                    <ul>           
                      <div id="panel1">
                        <li><a href="/solitaire"> Solitaire</a></li>
                        <li><a href="/boutique"> Boutique</a></li>
                        <li><a href="/annuaire"> Annuaire</a></li>
                      </div>
                    </ul>
                  </li>
                  <li id="flip2">PPE <i class="fa fa-angle-right"></i>
                    <ul>
                      <div id="panel2">
                        <li><a href="/parking"> Parking</a></li>
                        <li><a href="/annuaire"> Site de la M2L</a></li>
                      </div>
                    </ul>
                  </li>
                  <li id="flip3">Comptabilité & gestion <i class="fa fa-angle-right"></i>
                    <ul>
                      <div id="panel3">
                        <li><a href="/qsdfd">Viszegrzeols</a></li>
                      </div>
                    </ul>
                  </li>
                  <li id="flip4">Stages <i class="fa fa-angle-right"></i>
                    <ul>
                      <div id="panel4">
                        <li><a href="/premiereAnnee">Génération d'un mandat de prélèvement</a></li>
                        <li><a href="/premiereAnneeP2">Parseur & graphique</a></li>
                        <li><a href="/secondeAnnee">Site plomberie</a></li>
                      </div>
                    </ul>
                  </li>
                </ul>
              </p>

            </div>
            <br /><br /><br />
            <div class="masthead-content text-white py-5 py-md-0">
              <a class="btn btn-secondary" href="/#portfolio" type="button">&cularr; Retour page principal</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="social-icons">
      <ul class="list-unstyled text-center mb-0">
        
        @yield('complements')

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
