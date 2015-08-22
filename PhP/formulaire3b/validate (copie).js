// 1ere phase : déclaration de mon plugin Jquery
// Je déclare la fonction validation au commun des fonctions Jquery
// J'étends Jquery avec ma fonction validation
// ma fonction validation prends des options en paramètre
// UN plugin se nomme par son fichier: validation.min.js
jQuery.fn.validation=function(options)
{
  
    //On définit nos paramètres par défaut dans un objet defaults
   var defaults =
   {
       "colorsuccess": "blue" // 1 attribut color avec sa valeur "blue",
     	 "colorerror": "red"
   };
  
  //On fusionne nos deux objets ! 
  // Je fusionne l'objet definit par défaut (defaults) avec celui envoyé en paramètre (options) 
   var parametres = $.extend(defaults, options); 
  

  	// je retourne une collection d'objets sur lequel mon plugin s'applique
   // Ma boucle each() me sert à parcourir tous mes objets sur lesquels mon plugin s'applique
    return this.each(function()
       {
      			// $(this) fais référence a l'élement courant
      			if($(this).val() != ""){
                 $(this).css('color', parametres.colorsuccess);
				
       			}else{
                 $(this).css('color', parametres.colorerror);
            }
      
      
     });
  

};


// 2eme phase : l'appel du plugin avec passage en parametre des options
//appel du plugin validation
$('input').validation(
  {
 		colorsuccess: "green",
    colorerror: "pink"
	}
);



