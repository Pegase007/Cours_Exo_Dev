alert("Bonjour");

//Etape1: Declaration des variables
var prenom 		= "Thibaut";
	naissance 	= 1994;

	prenom2		= "Lan"
	naissance2	= 1979;

	prenom3		= "Elodie"
	naissance3	= 1988;

	maintenant	= 2015;
	resultat1 	= 0;

	tableauPrenom 	 =['Thibaut','Lan','Elodie','Guillaume'];
	tableauNaissance =[1994,1979,1988,1981];

	objetEleve  = {};
	objetEleve.prénom ="Thibaut";
	objetEleve.naissance ="1994";

	objetEleve2 = {};
	objetEleve2.prénom ="Lan";
	objetEleve2.naissance ="1979";

	objetEleve3 = 
	{
		prenom 	  : "long-hai",
		naissance : 1974
	};
//Etape2: Declaration des fonctions
function afficher ()
{
	alert(prenom + ' aura ' + (maintenant - naissance) + ' ans en ' + maintenant);
	alert(prenom2 + ' aura ' + (maintenant - naissance2) + ' ans en ' + maintenant);
}
function calculAge (year, birthyear)
{
	age = year - birthyear;
	return age; 
}
function afficher2 (p1,p2)
{
	alert(p1 + ' AURA ' + calculAge(maintenant, p2) + ' ans en ' + maintenant);
}
function addition(a, b)
{
	somme = a + b;
	return somme;
}
function plusPetit(a,b)
{
	if (a<b)
	{
		return a;
	}
	else 
	{
		return b;
	}
}
//Etape3: Activation des fonctions

afficher2(prenom, naissance);
afficher2(prenom2, naissance2);
afficher2(prenom3, naissance3);

resultat1 = addition(123, 456);
alert(resultat1);
resultat1 = plusPetit(5,17);
alert(resultat1);

index = 0;
while (index <tableauPrenom.length)
{ 	//Affichage de chaque élément des tableaux
	afficher2(tableauPrenom[index], tableauNaissance[index]);
	//Ajouter un au compteur
	index = index + 1;
}
for(index = 0; index < tableauPrenom.length; index = index +1)
{
	afficher2(tableauPrenom[index], tableauNaissance[index]);

}