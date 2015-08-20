//Etape 1: declaration des variables
var prenom 	   ="Thibaut";
	naissance  = 1994;
	maintenant = 2015;
	age 	   = maintenant-naissance;
	nbrClick   = 0;
//Etape 2: declaration de fonction
function afficher()
{
	alert("Coucou");
} 
function clickTitre ()
{
	//ajouter 1 au compteur de click
	nbrClick = nbrClick + 1; // nbrClick++
	alert("Tu as cliqué " + nbrClick + " fois");
}
//Etape 3: code de votre programme
alert("Bonjour " + prenom +" tu auras " + age + " ans en "+ maintenant);
alert("Au revoir "+ prenom);

//Appel de fonction
afficher();