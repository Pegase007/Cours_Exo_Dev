//declaration des variables
nbrClick = 0;



//declaration des fonctions
function clickCafe()
 {
 	//ajouter un café
 	nbrClick = nbrClick + 1;
 	//recupérer objet compteur
	objetCompteur = document.getElementById("compteur");
	//changer son html
	objetCompteur.innerHTML = nbrClick;

}
function clickCommande()
{
	htmlImg = '<img src="img/cafe.jpg">';
	//Contiendra tout le code HTML pour les images
	listeHtmlImg = '';
	//Compteur pour savoir combien images ont ete affiches
	nbImgAffiche = 0;
	//On repete la boucle tant qu'on a pas affiché le nombre de cafe voulu
	while (nbImgAffiche < nbrClick)
	{
		//Ajoute une image
		listeHtmlImg = listeHtmlImg + htmlImg;
		//Ajoute un au compteur
		nbImgAffiche = nbImgAffiche + 1;
	}
	//Recuperer objet commande
	objetCommande = document.getElementById("commande");
	//Changer son HTML
	objetCommande.innerHTML = listeHtmlImg;

}

//Appel des fonctions