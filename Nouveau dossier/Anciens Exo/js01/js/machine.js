//DECLARATION DES VARIABLES
var nbrClick = 0;
	prixCafe = 0.5;
	prixTotal = 0; 
	prixTtc = 0;
	taxe = 20;
	nbrClick2 = 0;

	prixOrange= 1;
	nbOrangeaffiches = 0;
	nbCafeAffiches = 0;

//DECLARATION DES FONCTIONS
// image du café
function clickCafe()
{
	nbrClick = nbrClick + 1;

		 if (nbrClick<2) 
	 {
	 	alert("Tu as commandé " + nbrClick + " café");
	 }
	 	else if (nbrClick <=4)
	 {
	 	alert("Tu as commandé " + nbrClick + " cafés");
	 }
	 	else
	 	{
	 		nbrClick = 5;
	 		alert("Maximum de 5 cafes atteint");
	 		alert("Tu as commandé " + nbrClick + " cafés")
	 	}


}
//image de l'orange
 function clickOrange()
 {
 	nbrClick2 = nbrClick2 + 1;

 			if (nbrClick2==1)
 		{
 			alert("Tu as commandé " + nbrClick + " jus d'orange")
 		}
 			else
 		{
 			alert("Tu as commandé " + nbrClick2 + " jus d'oranges");
 		}
 	
 }
//Commandez
function commandeCafe()
{
	prixTotal = (prixCafe * nbrClick) + (prixOrange * nbrClick2);
	prixTtc = prixTotal + (prixTotal * taxe) / 100;
	document.write("Commande en cours - Vous devez payer " + prixTotal +" euros ");
	document.write("Soit " + prixTtc +" toutes taxes comprises")
	//Cafés	
	while(nbCafeAffiches<nbrClick)
	{
		document.write('<img src="img/cafe.jpg">');
		nbCafeAffiches = nbCafeAffiches + 1;
	}
	//Jus d'orange
	while(nbOrangeaffiches<nbrClick2)
	{

		document.write('<img src="img/orange.jpg">');
		nbOrangeaffiches = nbOrangeaffiches + 1 ;
	 }

}
