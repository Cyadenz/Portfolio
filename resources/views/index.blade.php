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
              <a class="nav-link js-scroll-trigger" href="#veille">Veille technologique</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#Projets">Projets</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#competences">Compétences</a>
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
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">En savoir plus<br/ ></a>
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
              <p class="text-faded mb-4 ml-2">Je suis actuellement étudiant en seconde année de BTS SIO (Services Informatiques aux Organisations), spécialisé dans l'option SLAM (Solutions Logicielles et Applications Métiers) et activement à la recherche d'une alternance pour pouvoir continuer mes études en licence profesionnelle !<br /><br />
              Vous trouverez sur ce portfolio mon Curriculum Vitae, mes compétences, TP, projets...
              </p>
            </div>
            <button class="button button1" type="button" data-toggle="modal" data-target="#myModal"><i class="fa fa-search"></i> Afficher mon CV</button>
            <a class="button button1 pull-right" href="/doc/CV.pdf" download=""><i class="fa fa-download"></i> Télécharger mon CV</a>
            <br/ ><br/ ><br/ ><br/ >

            <center><a class="btn btn-light btn-xl js-scroll-trigger" href="#veille">Continuer</a></center>
          </div>
        </div>
      </div>
    </section>

    <section id="veille">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading"><i class="fa fa-1.5x fa-newspaper-o"></i> Veille technologique</h2>
            <hr class="my-4">
            <button class="accordion text-center mb-2">Qu'est ce que la veille technologique ?</button>
              <div class="panel">
                <p>La veille technologique ou veille scientifique et technique consiste à s'informer de façon systématique sur les techniques les plus récentes et surtout sur leur mise à disposition commerciale. Aujourd’hui, la veille technologique possède une place majeure <br/>dans le travail d’un informaticien.</p>
              </div>
          </div>
        </div>
      </div><br/><br/>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <a class="liensV service-box mt-5 mx-auto" href="/">
              <i class="fa fa-4x fa-heartbeat mb-3 sr-icons"></i>
              <h3 class="mb-3">Processeur</h3>
              <p class="text-muted mb-0">Consulter ma veille technologique des processeurs</p>
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
        </div>
      </div>
    </section>

    <section class="p-0" id="Projets">
      <div class="container-fluid p-0">
        <div class="row no-gutters popup-gallery">
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/1.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/1.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/2.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/2.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/3.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/3.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/4.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/4.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/5.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/5.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">

                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                  <div class="project-href">
                    <!-- <a href="#">a</a> -->
                  </div>
     
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/6.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/6.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>

      </div>
    </section>

    <section class="bg-dark text-white">
      <div class="container text-center">
        <h2 class="mb-4">Vous souhaitez voir tout mes projets en détails ?</h2>
        <a class="btn btn-light btn-xl sr-button" href="/mesProjets">Afficher mes projets</a>
      </div>
    </section>

    <section id="competences">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Tableau des compétences</h2>
            <hr class="my-4">
            <p class="mb-5">Compétences relatives aux BTS SIO (Services Informatiques aux Organisations) SLAM (Solutions Logicielles et Applications Métiers)</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
              <button class="button button2" type="button" data-toggle="modal" data-target="#myModal"><i class="fa fa-search"></i> Afficher mon tableau</button>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <p>
              <a class="button button2 pull-right" href="/doc/CV.pdf" download=""><i class="fa fa-download"></i> Télécharger mon tableau</a>
            </p>
          </div>
        </div>
      </div>
    </section>

   <!--  <hr class="separation"> -->

    <section class="bg-primary text-white" id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Let's Get In Touch!</h2>
            <hr class="my-4">
            <p class="mb-5">Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
            <p>123-456-6789</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
            <p>
              <a href="mailto:your-email@your-domain.com">feedback@startbootstrap.com</a>
            </p>
          </div>
        </div>
      </div>
    </section>

  <!-- MODAL myModal -->

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Curriculum Vitae</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body" style="max-height: 1000px;">
          <img class="CV" src="doc/CV_ugo.PNG">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>



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
