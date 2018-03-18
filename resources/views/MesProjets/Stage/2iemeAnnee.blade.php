@extends('layouts.projet')

@section('content')
<div class="contenu">
	<div class="titre"><i class="fa fa-bookmark"></i> Stage de 2ieme année</div><br />
	<p class="contexte">
		<i class="fa fa-quote-left fa-pull-left"></i>
		Lors de mon stage de seconde année j’ai été accueilli dans l'entreprise AG2 de Plomberie situé au : 167-177, avenue de Joliot Curie – 92013 Nanterre Cedex. Cette ESI est en charge d'applications telle que SATELIT ( Paiement de l'impôt par Internet ) et PASIFAE ( un des modules composant le prélèvement à la source des impôts qui devait rentrer en vigueur le 1er janvier 2018). Ces 2 applications étant en développement et maintenance.<br/><br />

		Je devais créer un site web de plomberie présentant l'entreprise. J'ai donc ainsi choisis d'utiliser Laravel pour réaliser ce projet.<br />
		<ul class="fa-ul">
			<li class="square"> Langage utilisé : HTML/CSS & PHP ( framework Laravel )<li>
			<li class="square"> Environnement : Laravel ( framework PHP )</li>
		</ul>
	</p>
<h5><center><i class="fa fa-file-image-o"></i> Captures d'écran</center></h5>

<div id="slider">
  <a href="#" class="control_next">></a>
  <a href="#" class="control_prev"><</a>
  <ul>
    <li><img src="img/header.jpg" style="width:100%"></li>
    <li style="background: #aaa;">SLIDE 2</li>
    <li>SLIDE 3</li>
    <li style="background: #aaa;">SLIDE 4</li>
  </ul>  
</div>
<!-- <div class="slider_option">
  <input type="checkbox" id="checkbox">
  <label for="checkbox">Autoplay Slider</label>
</div> -->
</div>
@endsection

@section('complements')
        <li class="list-unstyled-item">
          <a href="#">
            <i class="fa fa-info"></i>
          </a>
        </li>
        <li class="list-unstyled-item">
          <a href="#">
            <i class="fa fa-github"></i>
          </a>
        </li>
        <li class="list-unstyled-item">
          <a href="#">
            <i class="fa fa-file-pdf-o"></i>
          </a>
        </li>
@endsection