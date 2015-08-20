// ETAPE 1: DECLARATION DES VARIABLES
var nombreLongueur = 0;
var nombreLargeur  = 0;
var nombreHauteur  = 0;

// ETAPE 2	: DECLARATION DES FONCTIONS
function lireInput ()
{
	objetLongueur = document.getElementById("longueur");
	objetLargeur = document.getElementById("largeur");
	objetHauteur = document.getElementById("hauteur");

	texteLongueur = objetLongueur.value;
	texteLargeur = objetLargeur.value;
	texteHauteur = objetHauteur.value;

	nombreLongueur = parseFloat(texteLongueur);
	nombreLargeur = parseFloat(texteLargeur);
	nombreHauteur = parseFloat(texteHauteur);

}

function calculer ()
{
	// tire un nombre decimal entre 0 et 1
	// entier entre min=1 et max=10
	min 	= 1;
	max 	= 10;
	hasard 	= Math.floor( min + max * Math.random() );

	alert(hasard);

	// lire les entrees utilisateur
	lireInput();
	// et calculer les surfaces
	surfacesol = nombreLongueur * nombreLargeur;
	surfacemur = (nombreLargeur + nombreLongueur)*2*nombreHauteur;

	// affichage des resulats 
	objetSurfaceSol = document.getElementById("resultatSol");
	objetSurfaceMur = document.getElementById("resultatMur");

	objetSurfaceMur.innerHTML = "MURS: " + surfacemur;
	objetSurfaceSol.innerHTML = "SOL: " + surfacesol;
}