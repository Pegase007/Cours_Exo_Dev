// ETAPE 1: DECLARATION DES VARIABLES
var objetInput = null;
var objetInput2 = null;
var texte      = "";
var nombre     = 0;
var texte2      = "";
var nombre2     = 0;

// ETAPE 2: DECLARATION DES FONCTIONS
function lireInput ()
{
	// RECUPERER L'OBJET QUI REPRESENTE LA BALISE <input id="formulaire">
	objetInput = document.getElementById("formulaire");
	// LIRE LE TEXTE DE L'UTILISATEUR
	texte  = objetInput.value;
	// CONVERTIT UN TEXTE EN NOMBRE DECIMAL
	nombre = parseFloat(texte);

	// RECUPERER L'OBJET QUI REPRESENTE LA BALISE <input id="formulaire">
	objetInput2 = document.getElementById("formulaire2");
	// LIRE LE TEXTE DE L'UTILISATEUR
	texte2  = objetInput2.value;
	// CONVERTIT UN TEXTE EN NOMBRE DECIMAL
	nombre2 = parseFloat(texte2);

}


function affichage ()
{
	// appel à la fonction lireInput
	lireInput();
	// AFFICHAGE
	alert(texte);
}

function modifier ()
{
	// appel à la fonction lireInput
	lireInput();

	// AFFICHAGE DANS LA DIV id="modif"
	// recupere la balise en JS
	objetModif = document.getElementById("modif");
	// modifier le contenu HTML dans la balise
	objetModif.innerHTML = texte;

}

function ajouterDebut ()
{
	// appel à la fonction lireInput
	lireInput();

	// AFFICHAGE DANS LA DIV id="modif"
	// recupere la balise en JS
	objetModif = document.getElementById("modif");
	// modifier le contenu HTML dans la balise
	objetModif.innerHTML = texte + objetModif.innerHTML;

}

function ajouterFin ()
{
	// appel à la fonction lireInput
	lireInput();

	// AFFICHAGE DANS LA DIV id="modif"
	// recupere la balise en JS
	objetModif = document.getElementById("modif");
	// modifier le contenu HTML dans la balise
	objetModif.innerHTML = objetModif.innerHTML + texte;

}

function addition ()
{
	// lire les vaaleurs que l'utilisateur entre
	lireInput();

	// AFFICHAGE DANS LA DIV id="modif"
	// recupere la balise en JS
	objetModif = document.getElementById("modif");
	// modifier le contenu HTML dans la balise
	objetModif.innerHTML = nombre + nombre2;

}