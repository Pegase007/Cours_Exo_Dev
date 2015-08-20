<?php 

//fonction pour afficher le prix proprement
function price($prix){
	return '<b>'.number_format($prix, 2,',',' ').'<b> €';
}

//fonction pour générer mes étoiles
function generatestar($nb){
	return str_repeat('<span class="fa fa-star"></span>',$nb);
}

//fonction qui gére la visibilité
function visibility($visible){
	if($visible == true){
		return "<span class='fa fa-eye'></span>";
	}else{
		return "<span class='fa fa-eye-slash'></span>";
	}
}

//fonction qui gére la couverture
function cover($cover){
	if($cover == true){
		return "<span class='text-success fa fa-star'></span>";
	}else{
		return "";
	}
}

function readmore($text, $limit, $lien){
	$html = substr(utf8_encode(htmlentities(strip_tags($text),ENT_QUOTES,'UTF-8')), 0, strpos(wordwrap($text, $limit), "\n"))." ...";
	 $html .= "<a href=".$lien.">
	 	lire la suite
	 	</a>";

	 return $html;
}
function embed($iframe){
	$html = '<div class="embed-responsive embed-responsive-16by9">'.
			$iframe
			.'</div>';
	return $html;
}
function ago($time){
	$periods = array("seconde","minute","heure","jour","semaine","mois","année","décénie");
	$lengths = array("60","60","24","7","4.35","12","10");

	$now = time();

	$difference = $now - strtotime($time);

	for($j = 0; $difference >= $lengths[$j] && $j < count($lengths)-1; $j++){
		$difference /= $lengths[$j];
	}
	$difference = abs(round($difference));

	if($difference != 1 && $periods[$j] != "mois"){
		$periods[$j].="s";
	}
	return "<span class='fa fa-dashboard text-warning'></span> Il y a".$difference ." ".$periods[$j];
}