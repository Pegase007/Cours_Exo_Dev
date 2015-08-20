//ETAPE 1: DECLARATION DES VARIABLES

var objetInput = null;
objetInput2    = null;
	texte	   = "";
	nombre 	   = 0;
	texte2 	   = "";
	nombre2    = 0;

function lireInput()
{
//RECUPERER L'OBJET QUI REPRESENTE LA BALISE <input id="formulaire">
	objetInput = document.getElementById("formulaire");
	//LIRE LE TEXTE DE LUTILISATEUR
	texte = objetInput.value;
	//CONVERTIT UN TEXTE EN NOMBRE DECIMAL
	nombre = parseFloat(texte);
}
function lireInput2()
{
	objetInput2 = document.getElementById("formulaire2");
	texte2 = objetInput2.value
	nombre2 = parseFloat(texte2)
}
//ETAPE 2: DECLARATION DES FONCTIONS

function affichage()
{
	//APPEL DE LA FONCTION
	lireInput();
	//AFFICHAGE
	alert(texte);
}
function modifier()
{
	lireInput()
	//AFFICHAGE DANS LA DIV id="modif"
	//RECUPERE LA BALISE EN JS
	objetModif = document.getElementById("modif");
	objetModif.innerHTML = texte;

}
function ajouterDebut()
{
	
	lireInput();

	objetDebut = objetModif.innerHTML;
	objetModif.innerHTML = texte + " " + objetModif.innerHTML;

}
function ajouterFin()
{
	lireInput();
	objetModif = document.getElementById("modif");
	objetModif.innerHTML = objetModif.innerHTML + " " + texte;

}
function addition()
{
	//LIRE LES VALEURS QUE L'UTILISATEUR ENTRE
	lireInput();
	lireInput2();
	objetModif = document.getElementById("modif");
	objetModif.innerHTML = (nombre) + (nombre2);

}