@extends('layouts.projet')

@section('content')
<div class="contenu">
	<div class="titre"><i class="fa fa-bookmark"></i> Solitaire</div><br />
	<p class="description">
		<i class="fa fa-quote-left fa-pull-left"></i>
		Il s'agit d'un projet en binôme où l'on devait réalisé un Solitaire en version console.<br/>
		Les caractéristiques du projets sont les suivantes :<br/>
		<ul class="fa-ul">
			<li class="square"> Langage utilisé : Java</li>
			<li class="square"> Environnement : IDE d'Eclispe</li>
			<li class="square"> Lien github : <a href="/mesProjets/TP/solitaire">https://github.com/lyauy/Solitaire-lyup</a></li>
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