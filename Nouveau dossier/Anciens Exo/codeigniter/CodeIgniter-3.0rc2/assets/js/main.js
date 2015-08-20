/*
*	Programme de Jquery : 
*  0. Les bases de Jquery (rappel JS, bibliopthèque JS) + Etudier le documentation avec Cheat sheet 
*  1. Selecteurs
*  2. Manipulation CSS
*  3. Manipulation DOM
*  4. Traversing des éléments DOM
*  5. Evenements avec Jquery
*  6. Intégration JS avec Boostrap Twitter
*  7. Best plugins à integrer avec Jquery
*  8. Création de son propre plugin Jquery
*  9. Outil Compressions, Minimifiction, Concaténations etc...
*  10. Ouverture: Preprocessing avec pseudo langage SASS & Coffeescript

* ------------------------------------------------------------------------------------------------------------------------
*  
*  Estimation de temps : 3 x 3h.
*  
*  So, anyway... if so powerful you've become, why leave...?
*  Let me try & play within this f*ck'in awesome framework b***h beyond my limits ! ... :) 
*/

/**********************************************************************************************************************/


/**
* Debut 
*/
$(document).ready(function(){
// version raccourci : $(function() {

	/*//selection d'éléments par class
	console.log($('div#album img.img-thumbnail').length);
	console.log($('#content-wrapper > div.page-header').length);

	//selection par ID
	console.log($('div#album').length);

	//selection par éléments
	console.log($('h1').length);
	//selection par éléments
	console.log($('#content-wrapper > h3').length);
	//éléments frére noté avec le +
	$('#content-wrapper > div.page-header + h3').css({
		'color' :'blue',
		'font-size':'54px'
	});
	//Les éléments frére
	$('div#album ~ p').css('color','red');

	//Combinaison d'éléments
	$('p,h1,h2, div#album').css('color', 'grey');

	//:first pseudo sélecteur
	$('#content-wrapper h3:first').css('color', 'black');

	//:last pseudo sélecteur
	$('#content-wrapper h3:last').css('color','pink');

	//selection par index (commence par 0)
	$('#content-wrapper h3:eq(1)').css('color','green');

	//:gt plus grand que
	$('div#album img.img-thumbnail:gt(3)').css('opacity',0.5);

	//:lt plus petit que
	$('div#album img.img-thumbnail:lt(2)').css('border','1px solid #222');

	//selecteur rapide de tous les <Hn>
	$(':header').css('font-family','Verdana');

	//
	$(':radio:not(:checked) + span').css('color','blue');

	$('.theme-asphalt #main-navbar .widget-messages-alt .message-subject').css('color','red');

	// contains verifie le contenu au niveau du texte
	$('h3:contains("Julien")').css('color','purple');

	//selectionner un élément si il comporte un élément fils
	$('div#album:has(img.img-thumbnail)').css('opacity',0.3);

	//selecteur par attribut
	$('a[href]').css('color','tomato');

	$(':checkbox[checked]');

	$(':input[placeholder]').css('color','purple');*/
/*
	$('input[placeholder="Email"]').css('border', '1px solid red');
	$('input[placeholder="Password"]').css('border','1px solid red');
	$('textarea').css ('border','1px solid red');
	$(':radio(:checked) + span').css('color','red');
	$('button[type="submit"]').css('border','2px dashed red');
	$('button[type="submit"]').css('background','red');
	$('input[type=checkbox]+ span' ).css ('color','red');
	$('[placeholder]').css('background','red');

	$('img[src$=".jpeg"], img[src$=".jpg"]').css('border','1px dotted green');
*/
	/*$('input').attr('placeholder','Veuillez entrer votre texte');

	$('textarea, input').attr({
		'required':'required',
		'pattern' : ".{3,}"
		});

	//Supprime l'attribut placeholder
	$('input').removeAttr('placeholder');

	$('textarea').val('Petite description sympa...');

	$('input[type="url"]').val('http://');

	$('img.img-thumbnail:eq(1)').removeClass ('img-thumbnail').addClass('img-circle');

	$('img.img-thumbnail:eq(1)').toggleClass('img-circle','img-thumbnail');
	//$('img.img-thumbnail:eq(1)').attr('src','http://1.bp.blogspot.com/-YGhCz8G225c/UMH8GZRGZ8I/AAAAAAAAAT4/c_5PvbxELz0/s1600/tumblr_medadrYmE41rs6wx2o1_500_large.png');
*/

	/*//recupére le premier élément
	$('div#album img').first().css('border',"1px solid red");

	//recupére le dernier élément
	$('div#album img').last().css('border','1px solid #444');


	$('div#album img').eq(3).css('border',"2px solid pink");

	$('#content-wrapper div').filter('.table-primary').css("opacity", 0.5);

	alert($('#boite').is(':visible'));
	alert($('#boite').is(':hidden'));
	alert($('#sexe').is(':checked'));
	alert($('#cgu').is(':checked'));*/

	var nb = $('div#album').children().length;

	$('div#nbphotos').html('<h3>Il y a '+ nb +"photos</h3>");

	$('div#album').find('#lama').css('opacity', 0.5);

	//le frére suivant
	$('#textdemo p#middle').next().css('color','red');

	//le frére précédent
	$('#textdemo p#middle').prev().css('color','green');

	//tous les fréres suivants
	$('#textdemo p#middle').nextAll().css('color','red');

	//tous les fréres précédents
	$('#textdemo p#middle').prevAll().css('color','green');

	//récupére l'élément parent ou grand parent
	$('#lama').parents("div#album").css('border','5px dashed red');

	//traverser le parent et les enfants
	$('#textdemo p#middle').parents('#textdemo').find('p').css('font-size','11px');

	var html = $('<h1>Bonjour 3W Academy</h1>');
	var html2 = $('<h1>Yo</h1>');
	var html3 = $("<h1>Ca va ?</h1>");
	var html4 = $('<h1>La bez et toi</h1>');

	//Ajouter un élément html a la fin 
	$('#textdemo').append(html);
	$('#textdemo').prepend(html2);
	$('#textdemo').after(html3);
	$('#textdemo').before(html4);

});