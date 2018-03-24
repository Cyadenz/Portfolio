<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Portfolio - PERNICENI Ugo</title>

    <!-- Bootstrap core CSS
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
 <!--    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="{{ asset('vendor/magnific-popup/magnific-popup.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/creative.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  </head>

  <body id="page-top">

    <a href="#page-top" class="scrollToTop js-scroll-trigger"><i class="fa fa-chevron-up fa-3x"></i></a>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">PERNICENI Ugo</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">À propos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#competences">Compétences</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#Projets">Projets</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#veille">Veille technologique</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>Bienvenue sur mon Portfolio</strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5">Start Bootstrap can help you build better websites using the Bootstrap CSS framework! Just download your template and start going, no strings attached!</p>
            <a class="btn btn-primary btn-xl js-scroll-trigger sr-button" href="#about">En savoir plus<br/ ></a>
          </div>
        </div>
      </div>
    </header>

    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-center section-heading text-white"><i class="fa fa-info-circle fa-1.5x"></i> À propos</h2>
            <hr class="light my-4">
            <div class="LigneV mb-4"> 
              <p class="text-white mb-4 ml-2">Je suis actuellement étudiant en seconde année de BTS SIO (Services Informatiques aux Organisations), spécialisé dans l'option SLAM (Solutions Logicielles et Applications Métiers) et activement à la recherche d'une alternance pour pouvoir continuer mes études en licence profesionnelle !<br /><br />
              Vous trouverez sur ce portfolio mon Curriculum Vitae, mes compétences, TP, projets...
              </p>
            </div>
            <button class="button button1 sr-2button" type="button" data-toggle="modal" data-target="#Cv"><i class="fa fa-search"></i> Afficher mon CV</button>
            <a class="button button1 pull-right sr-2button" href="/doc/CV.pdf" download=""><i class="fa fa-download"></i> Télécharger mon CV</a>
            <br/ ><br/ ><br/ ><br/ >

            <center><a class="btn btn-light btn-xl js-scroll-trigger sr-button" href="#competences">Continuer</a></center>
          </div>
        </div>
      </div>
    </section>

<section id="competences">
    <div class="container">
       <h2 class="text-center mb-4"><i class="fa fa-bar-chart"></i> Compétences</h2><br />
        <div id="Pleft">
          <h5 class="text-center">Java</h5>
          <div class="barS">
            <div class="skills html sr-bar" style="background-color: #212529!important;width: 35%;">35%</div>
          </div>
        </div>
        <div id="Pright">
          <h5 class="text-center">PHP</h5>
          <div class="barS">
            <div class="skills html sr-bar" style="background-color: #006cf0!important;width: 45%;">45%</div>
          </div>
        </div><br/><br />

        <div id="Pleft">
          <h5 class="text-center">SQL</h5>
          <div class="barS">
            <div class="skills html sr-bar" style="background-color: #C08443!important;width: 60%;">60%</div>
          </div>
        </div>
        <div id="Pright">
          <h5 class="text-center">C</h5>
          <div class="barS">
            <div class="skills html sr-bar" style="background-color: #f05f40!important;width: 40%;">40%</div>
          </div>
        </div><br/><br />
        <div id="Pleft">
          <h5 class="text-center">Laravel</h5>
          <div class="barS">
            <div class="skills html sr-bar" style="background-color: #4CAF50!important;width: 50%;">50%</div>
          </div>
        </div>
        <div id="Pright">
          <h5 class="text-center">HTML/CSS</h5>
          <div class="barS">
            <div class="skills html sr-bar" style="background-color: #e6e600!important;width: 65%;">65%</div>
          </div>       
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <!-- <h2 class="section-heading">Tableau des compétences</h2> -->
            <br /><hr class="my-4">
            <p class="mb-5">Compétences relatives aux BTS SIO (Services Informatiques aux Organisations) SLAM (Solutions Logicielles et Applications Métiers)</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
              <button class="button button2 sr-button" type="button" data-toggle="modal" data-target="#compétences"><i class="fa fa-search"></i> Afficher les compétences</button>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <p>
              <a class="button button2 pull-right sr-button" href="/doc/CV.pdf" download=""><i class="fa fa-download"></i> Télécharger mon tableau</a>
            </p>
          </div>
        </div>
      </div> 
    </section>

    <section class="bg-primary" id="Projets">
      <div class="container text-center">

          <h2 class="text-center text-white mb-4"><i class="fa fa-book"></i> Mes projets</h2><br />
          <button class="tablink" onclick="openPage('a', this, 'white')" id="defaultOpen">Projets principaux</button>
          <button class="tablink" onclick="openPage('b', this, 'white')">TP</button>
          <button class="tablink" onclick="openPage('c', this, 'white')">PPE</button>
          <button class="tablink" onclick="openPage('d', this, 'white')">Stages</button> 
          <button class="tablink" onclick="openPage('e', this, 'white')">Compta & Gestion</button>

          <div id="a" class="tabcontent">
            <div class="main">
              <h3>Projets principaux</h3>
              <div class="row" id="page1">

                <div class="column">
                  <div class="img__wrap">
                    <div class="content">
                      <a class="abc" type="button" data-toggle="modal" data-target="#parking">
                        <img src="img/Logo/Parking.png" alt="Site Parking" style="width:100%">
                          <div class="img__description_layer">
                            <p class="img__description"><i class="fa fa-search-plus fa-4x"></i><br/>En savoir plus</p>
                           </div>
                          <h3>Parking</h3>
                          <p>Site parking de la M2L réalisé avec Laravel.</p>
                      </a>
                    </div>
                  </div>
              </div>
              

                <div class="column">
                  <div class="img__wrap">
                    <div class="content">
                      <a class="abc" type="button" data-toggle="modal" data-target="#solitaire">
                        <img src="img/Logo/Solitaire.png" alt="Console solitaire" style="width:100%">
                        <div class="img__description_layer">
                          <p class="img__description"><i class="fa fa-search-plus fa-4x"></i><br/>En savoir plus</p>
                        </div>
                        <h3>Solitaire</h3>
                        <p>Solitaire en version console sous Eclipse.</p>
                      </a>
                    </div>
                  </div>
                </div>

                <div class="column">
                  <div class="img__wrap">
                    <div class="content">
                      <a class="abc" type="button" data-toggle="modal" data-target="#plomberie">
                        <img src="img/Logo/site_plomberie.png" alt="Site plomberie" style="width:100%">
                        <div class="img__description_layer">
                          <p class="img__description"><i class="fa fa-search-plus fa-4x"></i><br/>En savoir plus</p>
                        </div>
                        <h3>Site de plomberie</h3>
                        <p>Site de plomberie (stage) réalisé avec Laravel.</p>
                      </a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row" id="page2" style="display: none;">
                
                <div class="column">
                  <div class="img__wrap">
                    <div class="content">
                      <a class="abc" type="button" data-toggle="modal" data-target="#parseur">
                        <img src="img/Logo/Parseur.png" alt="Graphique java" style="width:100%">
                          <div class="img__description_layer">
                            <p class="img__description"><i class="fa fa-search-plus fa-4x"></i><br/>En savoir plus</p>
                           </div>
                          <h3>Parsage de jenkins</h3>
                          <p>Parsage de données & traçage d'un graphique en Java (1ère année).</p>
                      </a>
                    </div>
                  </div>
                </div>
              

                <div class="column">
                  <div class="img__wrap">
                    <div class="content">
                      <a class="abc" type="button" data-toggle="modal" data-target="#boutique">
                        <img src="img/Logo/Boutique.png" alt="Site boutique" style="width:100%">
                        <div class="img__description_layer">
                          <p class="img__description"><i class="fa fa-search-plus fa-4x"></i><br/>En savoir plus</p>
                        </div>
                        <h3>Boutique</h3>
                        <p>Site boutique connecté à une base de données (1ère année).</p>
                      </a>
                    </div>
                  </div>
                </div>
              </div>

            </div>

            </div>


          <div id="b" class="tabcontent">
            <div class="main">
              <h3>Travaux pratiques</h3>
              <div class="row" id="page1">

                <div class="column">
                  <div class="img__wrap">
                    <div class="content">
                      <a class="abc" type="button" data-toggle="modal" data-target="#solitaire">
                        <img src="img/Logo/Solitaire.png" alt="Console Solitaire" style="width:100%">
                        <div class="img__description_layer">
                          <p class="img__description"><i class="fa fa-search-plus fa-4x"></i><br/>En savoir plus</p>
                        </div>
                        <h3>Solitaire</h3>
                        <p>Solitaire en version console sous Eclipse.</p>
                      </a>
                    </div>
                  </div>
                </div>
              
                <div class="column">
                  <div class="img__wrap">
                    <div class="content">
                      <a class="abc" type="button" data-toggle="modal" data-target="#boutique">
                        <img src="img/Logo/Boutique.png" alt="Site boutique" style="width:100%">
                        <div class="img__description_layer">
                          <p class="img__description"><i class="fa fa-search-plus fa-4x"></i><br/>En savoir plus</p>
                        </div>
                        <h3>Boutique</h3>
                        <p>Site boutique connecté à une base de données (1ère année).</p>
                      </a>
                    </div>
                  </div>
                </div>

                <div class="column">
                  <div class="img__wrap">
                    <div class="content">
                      <a class="abc" type="button" data-toggle="modal" data-target="#annuaire">
                        <img src="img/Logo/annuaire.jpg" alt="Annuaire" style="width:100%">
                        <div class="img__description_layer">
                          <p class="img__description"><i class="fa fa-search-plus fa-4x"></i><br/>En savoir plus</p>
                        </div>
                        <h3>Annuaire</h3>
                        <p>Annuaire de contacts réalisé sous Code::blocks (1ère année).</p>
                      </a>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>

          <div id="c" class="tabcontent">
            <div class="main">
              <h3>Projets par équipes</h3>
              <div class="row" id="page1">

                <div class="column">
                  <div class="img__wrap">
                    <div class="content">
                      <a class="abc" type="button" data-toggle="modal" data-target="#parking">
                        <img src="img/Logo/Parking.png" alt="Site Parking" style="width:100%">
                          <div class="img__description_layer">
                            <p class="img__description"><i class="fa fa-search-plus fa-4x"></i><br/>En savoir plus</p>
                           </div>
                          <h3>Parking</h3>
                          <p>Site parking de la M2L réalisé avec Laravel.</p>
                      </a>
                    </div>
                  </div>
                </div>

                <div class="column">
                  <div class="img__wrap">
                    <div class="content">
                      <a class="abc" type="button" data-toggle="modal" data-target="#siteM2L">
                        <img src="img/Logo/M2L.png" alt="Site de la M2L" style="width:100%">
                        <div class="img__description_layer">
                          <p class="img__description"><i class="fa fa-search-plus fa-4x"></i><br/>En savoir plus</p>
                        </div>
                        <h3>Site de la M2L</h3>
                        <p>Site de la M2L réalisé sous WAMP en PHP/HTML/CSS (1ère année).</p>
                      </a>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>

          <div id="d" class="tabcontent">
            <div class="main">
              <h3>Stages</h3>
              <div class="row" id="page1">

                <div class="column">
                  <div class="img__wrap">
                    <div class="content">
                      <a class="abc" type="button" data-toggle="modal" data-target="#plomberie">
                        <img src="img/Logo/site_plomberie.png" alt="Site plomberie" style="width:100%">
                        <div class="img__description_layer">
                          <p class="img__description"><i class="fa fa-search-plus fa-4x"></i><br/>En savoir plus</p>
                        </div>
                        <h3>Site de plomberie</h3>
                        <p>Site de plomberie (stage) réalisé avec Laravel.</p>
                      </a>
                    </div>
                  </div>
                </div>

                <div class="column">
                  <div class="img__wrap">
                    <div class="content">
                      <a class="abc" type="button" data-toggle="modal" data-target="#parseur">
                        <img src="img/Logo/Parseur.png" alt="Parseur Java" style="width:100%">
                          <div class="img__description_layer">
                            <p class="img__description"><i class="fa fa-search-plus fa-4x"></i><br/>En savoir plus</p>
                           </div>
                          <h3>Parsage de jenkins</h3>
                          <p>Parsage de données & traçage d'un graphique en Java (1ère année).</p>
                      </a>
                    </div>
                  </div>
                </div>

                <div class="column">
                  <div class="img__wrap">
                    <div class="content">
                      <a class="abc" type="button" data-toggle="modal" data-target="#utilj2ee">
                        <img src="img/Logo/UtilJ2ee.png" alt="Utilitaire RUM" style="width:100%">
                        <div class="img__description_layer">
                          <p class="img__description"><i class="fa fa-search-plus fa-4x"></i><br/>En savoir plus</p>
                        </div>
                        <h3>Utilitaire J2EE</h3>
                        <p>Création d'une JSP en relation avec une classe utilitaire (1ère année).</p>
                      </a>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>

          <div id="e" class="tabcontent">
            <div class="main">
              <h3>Comptabilité & Gestion</h3>
              <div class="row" id="page1">

                <div class="column">
                  <div class="img__wrap">
                    <div class="content">
                      <a class="abc" href="/">
                        <img src="img/font/indexPlomberie.png" alt="Mountains" style="width:100%">
                        <div class="img__description_layer">
                          <p class="img__description"><i class="fa fa-search-plus fa-4x"></i><br/>En savoir plus</p>
                        </div>
                        <h3>Facture</h3>
                        <p>Réalisation d'un tableur excel pour le calcul d'une facture.</p>
                      </a>
                    </div>
                  </div>
                </div>

                <div class="column">
                  <div class="img__wrap">
                    <div class="content">
                      <a class="abc" href="/">
                        <img src="img/font/indexPlomberie.png" alt="Mountains" style="width:100%">
                        <div class="img__description_layer">
                          <p class="img__description"><i class="fa fa-search-plus fa-4x"></i><br/>En savoir plus</p>
                        </div>
                        <h3>Amortissement</h3>
                        <p>Réalisation d'un tableur excel pour le calcul d'un amortissement.</p>
                      </a>
                    </div>
                  </div>
                </div>

                <div class="column">
                  <div class="img__wrap">
                    <div class="content">
                      <a class="abc" href="/">
                        <img src="img/font/indexPlomberie.png" alt="Mountains" style="width:100%">
                        <div class="img__description_layer">
                          <p class="img__description"><i class="fa fa-search-plus fa-4x"></i><br/>En savoir plus</p>
                        </div>
                        <h3>Emprunt</h3>
                        <p>Réalisation d'un tableur excel pour le cas TELINOS.</p>
                      </a>
                    </div>
                </div>
              </div>

              </div>
            </div>
          </div>  
                  <div class="pagination">
                    <a class="pag" id="flg" href="#1" onclick="showPages('1')">&laquo;</a>
                    <a class="pag" href="#1" id="focusMe" onclick="showPages('1')">1</a>
                    <a class="pag" href="#2" id="bt2" onclick="showPages('2')">2</a>
                    <a class="pag" id="fld" href="#2" onclick="showPages('2')">&raquo;</a>                 
                  </div>
            
      </div>
    </section>

    <section id="veille">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading"><i class="fa fa-1.5x fa-newspaper-o"></i> Veille technologique</h2>
            <hr class="my-4">
            <button class="accordion text-center mb-2 sr-veille">Qu'est ce que la veille technologique ? <div class="fa fa-chevron-right fa-1.5x rotate pull-right"></div></button>
              <div class="panel">
                <p>La veille technologique ou veille scientifique et technique consiste à s'informer de façon systématique sur les techniques les plus récentes et surtout sur leur mise à disposition commerciale. Aujourd’hui, la veille technologique possède une place majeure <br/>dans le travail d’un informaticien.</p>
              </div>
          </div>
        </div>
      </div><br/><br/>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <a class="liensV service-box mt-5 mx-auto" data-toggle="modal" href="#Veille1">
              <i class="fa fa-4x fa-heartbeat mb-3 sr-icons"></i>
              <h3 class="mb-3">Processeur</h3>
              <p class="text-muted mb-0">Consulter ma veille technologique sur les processeurs.</p>
            </a>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <a class="liensV service-box mt-5 mx-auto"  href="/">
              <i class="fa fa-4x fa-paper-plane mb-3 sr-icons"></i>
              <h3 class="mb-3">Ready to Ship</h3>
              <p class="text-muted mb-0">You can use this theme as is, or you can make changes!</p>
            </a>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <a class="liensV service-box mt-5 mx-auto"  href="/">
              <i class="fa fa-4x fa-newspaper-o mb-3 sr-icons"></i>
              <h3 class="mb-3">Up to Date</h3>
              <p class="text-muted mb-0">We update dependencies to keep things fresh.</p>
            </a>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <a class="liensV service-box mt-5 mx-auto"  href="/">
              <i class="fa fa-4x fa-heart mb-3 sr-icons"></i>
              <h3 class="mb-3">Made with Love</h3>
              <p class="text-muted mb-0">You have to make your websites with love these days!</p>
            </a>
          </div>
        </div><br/>


<hr class="separation"><br/>

 <center><p>Liens de mes recherches en rapport avec ma veille technologique</p><iframe src="//www.pearltrees.com/ugop?embed=2&d=201803181548" width="853" height="404" style="border:1px;" allowtransparency="true"></iframe><span style="display:block; padding-top:2px; color:#818181; font-size:13px;"><a href="http://www.pearltrees.com/ugop" style=" color:#818181; font-size:13px;" target="_blank">Ugop</a></span></center>


      </div>
    </section>
   <!--  <hr class="separation"> -->

    <section class="bg-primary text-white" id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Me contacter</h2>
            <hr class="my-4">
            <p class="mb-5">N'hésitez pas à me contacter, je répondrais au plus vite !</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
            <p style="color: #212529">/</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
            <p>
              <a style="color: white" href="ugo.perniceni@hotmail.fr">ugo.perniceni@hotmail.fr</a>
            </p>
          </div>
        </div>
      </div>
    </section>

    @include('extends.modals')

    <!-- Bootstrap core JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/scrollReveal.js/3.3.6/scrollreveal.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="{{ asset('js/creative.min.js') }}" type="text/javascript"></script>
  </body>

</html>
