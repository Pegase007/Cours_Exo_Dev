// ETAPE 1: DECLARATION DES VARIABLES
var nbreColonnes  = 0;
var nbreCases 	  = 0;
var htmlCaseBlanc = '<div class="blanc"></div>';
var htmlCaseNoir  = '<div class="noir"></div>';

// ETAPE 2: DECLARATION DES FONCTIONS
function lireInput ()
{
	// recupere l'objet qui represente la balise <input id="nbreColonnes">
	objetInput   = document.getElementById("nbreColonnes");
	// lit le texte entre par l'utilisateur
	texteInput 	 = objetInput.value;
	// covertir le texte en nombre entier
	nbreColonnes = parseInt(texteInput);
	// carré
	nbreLignes   = nbreColonnes; 
	// le carré 
	nbreCases 	 = nbreColonnes * nbreLignes;
}


function dessiner ()
{
	// lire les entrees utilisateur
	lireInput();

	// dessiner le damier
	// recupere l'objet qui represente la balise <div id="damier">
	objetDamier = document.getElementById("damier");

	// ajouter les nbreCases demandées
	compteur 			  = 0;
	objetDamier.innerHTML = ''; 	// vide contenu du damier
	dessinBlanc 		  = false;  // commence par une case blanche
	// tant que compteur est plus petit que nbreCases
	// il faut ajouter une autre case
	while (compteur < nbreCases)
	{
		// ajouter un au compteur
		compteur = compteur +1;
		// ajouter une div pour avoir une case en plus à la fin
		if (dessinBlanc)
		{
			objetDamier.innerHTML = objetDamier.innerHTML + htmlCaseBlanc;
			// la prochaine case est noire
			dessinBlanc = false;
		}
		else
		{
			objetDamier.innerHTML = objetDamier.innerHTML + htmlCaseNoir;
			// la prochaine case est blanche
			dessinBlanc = true;
		}

		// toutes les nbreColonnes, il faut rajouter un <br>
		// compteur % nbreColonnes donne le reste de la division
		if (compteur % nbreColonnes == 0)
		{
			// ajouter le br
			objetDamier.innerHTML = objetDamier.innerHTML + '<br clear="both">';
			if (nbreColonnes % 2 == 0)
			{
				// negation
				dessinBlanc = ! dessinBlanc;
			}

		}
	}
}