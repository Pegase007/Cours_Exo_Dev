//ETAPE 1: DECLARATION DES VARIABLES



//ETAPE 2: DECLARATION DES FONCTIONS
monInit = function ()
{
	//alert('monInit');
	//ON VA RENDRE LE TITRE H1 CLIQUABLE
	//ON SELECTIONNE L'ELEMENT SUR LEQUEL ON VEUT AGIR
	//ON LE REND CLIQUABLE
	$("h1").on("click", clickH1);

	//AJOUTER LE CALENDRIER
	$("#calendrier").datepicker();
	$.datepicker.setDefaults( $.datepicker.regional[ "fr" ] );
	//QUAND ON CLIQUE SUR LE BOUTON LIRE INPUT
	//IL FAUT AFFICHER LE CONTENU ENTRE PAR L'UTILISATEUR
	$("#btnLire").on("click", affichage);
	$("#btnAvant").on("click", affichageAvant);
	$("#btnAprés").on("click", affichageAprés);
	$("#btnHasard").on("click", affichageHasard);
}
hasardEntre = function(min,max)
{
	resultat = Math.floor ( min + (max - min)*Math.random());
	return resultat;
}
affichageHasard = function ()
{
	//TIRER UN NOMBRE AU HASARD ENTRE MIN ET MAX
//var min = 1;
//var max =100;
	//texte = Math.floor(min + (max - min) * Math.random());
	//AFFICHAGE DANS UNE DIV
	texte = hasardEntre(1,100);
	$("#resultat").html(texte);
}
affichage = function ()
{
	//RECUPERER L'OBJET QUI REPRESENTE LA BALISE INPUT
	//ET ENSUITE ON LIT LA VALEUR ENTRE PAR L'UTILISATEUR
	texte = $("#calendrier").val();

	//AFFICHAGE DANS UNE DIV
	$("#resultat").html(texte);
}
affichageAvant = function ()
{
	//RECUPERER L'OBJET QUI REPRESENTE LA BALISE INPUT
	//ET ENSUITE ON LIT LA VALEUR ENTRE PAR L'UTILISATEUR
	texte = $("#calendrier").val();

	//AFFICHAGE DANS UNE DIV
	$("#resultat").prepend(texte + "<br>");
}
affichageAprés = function ()
{
	//RECUPERER L'OBJET QUI REPRESENTE LA BALISE INPUT
	//ET ENSUITE ON LIT LA VALEUR ENTRE PAR L'UTILISATEUR
	texte = $("#calendrier").val();

	//AFFICHAGE DANS UNE DIV
	$("#resultat").append(texte);
}

 clickH1 = function ()
{
	//alert("tu as cliqué");
	//ON FAIT DISPARAITRE LA BALISE H2
	jQuery("h2,h3").slideToggle(2000);
}


//ETAPE 3: ACTIVATION DES FONCTIONS
//DEMANDE A JQUERY D'APPELLER LA FONCTION monInit QUAND LA PAGE EST PRÉTE 
jQuery(monInit);
//alert('bonjour');
