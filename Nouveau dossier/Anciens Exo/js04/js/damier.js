//ETAPE 1 DECLARATION DES VARIABLES
	nbrCase = 0;
	nbrColonnes = 0;
	nbrLignes = 0;
var htmlCaseBlancOuvrante = '<div class="blanc">';
	htmlCaseFermante = '</div>';
	htmlCaseNoirOuvrante = '<div class="noir">';

//ETAPE 2 DECLARATION DES FONCTIONS
function lireInput()
{
	//RECUPERER L'OBJET QUI REPRESENTE LA BALISE <input id="nbrColonnes">
	objetInput = document.getElementById("nbrColonnes");
	//LIT LE TEXTE ENTRE PAR L'UTILISATEUR
	texteInput = objetInput.value;
	//CONVERTIR LE TEXTE EN NOMBRE ENTIER
	nbrColonnes = parseInt(texteInput);
	//CARRE
	nbrLignes  = nbrColonnes;
	//LE CARRE
	nbrCase = nbrColonnes * nbrLignes;
}

//DAMIER V2
function dessinerWhile2()
{
	lireInput();
	//DESSINER LE DAMIER
	//RECUPERE L'OBJET
	objetDamier = document.getElementById("damierDessin");
	//AJOUTER LES NBRCASE
	compteur =0;
	objetDamier.innerHTML ="";//VIDE CONTENU DU DAMIER
	dessinBlanc = false;//COMMENCE PAR UNE CASE NOIRE
	//DESSINER LES LIGNES
	//ET DANS CHAQUE LIGNE IL FAUT DESSINER LES COLONNES
	compteurLigne   = 0;
	compteurColonne = 0;
	//TANT QUE LE COMPTEUR EST PLUS PETIT QUE LE NBRLIGNES
	while (compteurLigne<nbrLignes)
	{
		//AJOUTER UN AU COMPTEUR DE LIGNE
		compteurLigne = compteurLigne + 1;
		//DESSINER UNE LIGNE EN PLUS
		while (compteurColonne<nbrColonnes)
		{
		//AJOUTER UN AU COMPTEUR DE COLONNES
		compteurColonne = compteurColonne + 1;
		//AJOUTER AU COMPTEUR
		compteur = compteur +1;
		//DESSINER UNE CASE EN PLUS
			if(dessinBlanc)
			{
			objetDamier.innerHTML = objetDamier.innerHTML 
									+ htmlCaseBlancOuvrante 
									+ compteur
									+ htmlCaseFermante;
			//LA CASE SUIVANTE EST NOIRE
			dessinBlanc = false;

			}
			else
			{
			objetDamier.innerHTML = objetDamier.innerHTML 
									+ htmlCaseNoirOuvrante 
									+ compteur 
									+ htmlCaseFermante;
			//LA CASE SUIVANTE EST BLANCHE
			dessinBlanc = true;
			}
		}
		//AJOUTER LE BR POUR LE RETOUR A LA LIGNE
		objetDamier.innerHTML = objetDamier.innerHTML + '<br clear="both">';
		//REMETTRE A ZERO LE COMPTEUR DE COLONNES
		compteurColonne = 0;
		//SI ON A UN NOMBRE DE COLONNES PAIR
		//IL FAUT GARDER LA COULEUR POUR LA PREMIÉRE CASE DE LA LIGNE SUIVANTE
		if (nbrColonnes%2==0) 
		{
			//EQUIVAUT A dessinBlanc= ! dessinBlanc;
			if (dessinBlanc==true)
			{
				dessinBlanc = false;
			}
			else
			{
				dessinBlanc = true;
			}
		}
	}

}
//DAMIER V1
function monDamier()
{
	//LIRE LES ENTREES UTILISATEUR
	lireInput();
	//DESSINER LE DAMIER
	//RECUPERE L'OBJET QUI REPRESENTE LA BALISE <DIV ID="DAMIER">
	objetDamier = document.getElementById("damierDessin");
	//AJOUTER LES NBRCASE DEMANDEES
	compteur = 0;
	objetDamier.innerHTML =""; //VIDE CONTENU DU DAMIER
	dessinBlanc = false;
	//TANT QUE COMPTEUR EST PLUS PETIT QUE NBRCASE
	// IL FAUT AJOUTER UNE AUTRE CASE
	while(compteur<nbrCase)
	{
		//AJOUTER UN AU COMPTEUR
		compteur = compteur +1;
		//AJOUTER UNE DIV POUR AVOIR UNE CASE EN PLUS
		if (dessinBlanc)
		{
			objetDamier.innerHTML=objetDamier.innerHTML 
									+ htmlCaseBlancOuvrante
									+ compteur
									+ htmlCaseFermante;
			//LA PROCHAINE CASE EST NOIRE
			dessinBlanc = false;
		}
		else
		{
			objetDamier.innerHTML = objetDamier.innerHTML 
									+ htmlCaseNoirOuvrante
									+ compteur
									+ htmlCaseFermante;
			//LA PROCHAINE CASE ET BLANCHE
			dessinBlanc = true;
		}
		//TOUTES LES NBRCOLONNES, IL FAUT RAJOUTER UN <BR>
		//COMPTEUR % NBRCOLONNES DONNE LE RESTE DE LA DIVISION
		if (compteur % nbrColonnes ==0)
		{
			//AJOUTER LE BR
			objetDamier.innerHTML = objetDamier.innerHTML + '<br clear="both">';
			if (nbrColonnes % 2 ==0) 
			{
			//NEGATION
			dessinBlanc = ! dessinBlanc;
			}
		}

	}
}