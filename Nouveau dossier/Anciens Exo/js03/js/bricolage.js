var longueur = "";
	largeur  = "";
	hauteur  = "";

function lireInputLon()
{
	objetInput = document.getElementById("longueur");
	longueur = objetInput.value;
	nombre = parseFloat(longueur);

}
function lireInputLar()
{
	objetInput1 = document.getElementById("largeur");
	largeur = objetInput1.value;
	nombre1 = parseFloat(largeur);
	
}
function lireInputHau()
{
	objetInput2 = document.getElementById("hauteur");
	hauteur = objetInput2.value;
	nombre2 = parseFloat(hauteur);
	
}

function calcul()
{
	lireInputLon();
	lireInputLar();
	lireInputHau();
	objetSol = document.getElementById("sol");
	objetSol.innerHTML = (nombre) * (nombre1) + "m2";
	objetMur = document.getElementById("mur");
	objetMur.innerHTML = (nombre*nombre2) *2 + (nombre2*nombre1)*2 + "m2";
}