alert("Salut");
//ETAPE1: DECLARATION DES VARIABLES


//ETAPE2: DECLARATION DES FONCTIONS
function copierMessage(texte)
{
	objetCopie = document.getElementById("copie");
	objetCopie.innerHTML=texte;
}
function clickOn()
{
	window.alert("Tu as clique");
	//Je veux afficher le titre de ma balise h1
	objetH1 = document.getElementById("titre");
	//Lit la div id="titre"
	copierMessage(objetH1.innerHTML);
}

//ETAPE3: APPEL DES FONCTIONS
