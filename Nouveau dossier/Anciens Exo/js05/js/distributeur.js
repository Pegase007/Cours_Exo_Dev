var min = 5;
	max = 1000;
	tableauBillets = [500,200,100,50,20,10,5];
monInit = function()
{
	jQuery("#credit").val(nbrHasard(5,1000));
	//INSTALLER LES ONCLICK
	jQuery("#btnCompte").on("click",affichageCompte);
	jQuery("#btnRetrait").on("click",affichageRetrait);

}
nbrHasard = function(min,max)
{
	resultat = Math.floor ( min + (max - min)*Math.random());
	return resultat;
}
affichageHasard = function ()
{
	texte = nbrHasard(5,1000);
	jQuery("#credit").val(texte);
}
affichageCompte = function ()
{
	alert('COMPTE');
}
affichageRetrait = function ()
{
	//LIRE LE MONTANT DEMANDE
	montant = jQuery("#montant").val();
	//CONVERTIR EN NOMBRE
	montant = parseInt(montant);
	credit = parseInt(jQuery("#credit").val());
	//PROTECTION
	//SI LE MONTANT N'EST PAS UN MULTIPLE DE 5
	//ALORS ON BLOQUE LE RETRAIT
	if (montant%5 !=0) 
		{
			alert('ENTRER UN MONTANT CORRECT (X5)');
			//ARRETE L'EXECUTION DE LA FONCTION
			return;
		}
		//PROTECTION
		//SI LE MONTANT DEMANDE EST PLUS QUE LE CREDIT
		//ALORS ON BLOQUE LE RETRAIT
	if (montant>credit) 
		{
			alert("Vous n'avez pas assez d'argent");
		}
	else 
		{

	alert('RETRAIT DE '+ montant + " euros");
	//MET A JOUR LE SOLDE
	credit = credit - montant;
	//METTRE A JOUR L'AFFICHAGE DU SOLDE
	jQuery("#credit").val(credit);
	//IL FAUT DISTRIBUER LES BILLETS
	//JE TESTE SUR LE PLUS GRAND BILLET SI JE PEUX EN DISTRIBUER
	//ET ENSUITE JE PASSE AU BILLET SUIVANT
	indexBillet = 0;
	//EFFACER LES BILLETS DEJA DISTRIBUES
	jQuery("#billets").hide()
					  .html("");
	while (indexBillet < tableauBillets.length)
	{
		//DANS billetEnCours, IL VA Y AVOIR 500 PUIS 200 PUIS 100 ETC..
		billetEnCours = tableauBillets[indexBillet];
		//alert(billetEnCours);
		//IL FAUT CALCULER COMBIEN DE BILLETS JE PEUX DISTRIBUER
		nbrBillet = Math.floor (montant / billetEnCours);
		//alert(nbrBillet);
		//DISTRIBUER LE NOMBRE DE billetEnCours
		for(indexImage = 0; indexImage<nbrBillet; indexImage = indexImage +1)
		{
			htmlImage ='<img src="img/euros-' + billetEnCours + '.jpg">'
			jQuery("#billets").append(htmlImage);

		}
		//ENLEVE LA SOMME DISTRIBUEE AU MONTANT RESTANT
		montant = montant - nbrBillet* billetEnCours;
		//AJOUTER UN A indexBillet	
		indexBillet = indexBillet +1;
		
		
	}
	jQuery("#billets").slideDown(5000);
		}
}
//IMPORTANT: LE POINT DE DEPART DE VOTRE PROGRAMME
jQuery(monInit);