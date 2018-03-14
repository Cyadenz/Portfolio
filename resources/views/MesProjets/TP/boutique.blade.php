@extends('layouts.projet')

@section('content')
<div class="contenu">
	<div class="titre"><i class="fa fa-bookmark"></i> Boutique (1ère année)</div><br />
	<p class="description">
		<i class="fa fa-quote-left fa-pull-left"></i>
		Il s'agit d'un projet en binôme où l'on devait réalisé un site connecté à une base de données nous permettant de vendre des éléments de notre choix.<br/>
		Les caractéristiques du projet sont les suivantes :<br/>
		<ul class="fa-ul">
			<li class="square"> Langage utilisé : HTML/CSS & PHP</li>
			<li class="square"> Environnement : MySQL, WampServeur</li>
			<li class="square"> Lien github : <a href="">Lien non implenté</a></li>
		</ul>
	</p>
	<hr><br />
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