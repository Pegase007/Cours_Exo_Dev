/*
$(function(){
	//Offset retourne la position absolue
	$("#pour").click(function(){
		var btnPour = $("#pour").offset();
 		alert("Top: " + btnPour.top + " Left: " + btnPour.left);
	});

	//Position retourne la position relative
	$("#contre").click(function(){
			var btnContre = $("#contre").position();
	 		alert("Top: " + btnContre.top + " Left: " + btnContre.left);
	});

});
*/

/*
$(function(){
	$("#contre").on("mouseover", function(move){
	var btnContre= $("#contre").offset();	
	console.log(btnContre);
	
			$(this).css({
				top:((Math.random()*200)+20),
				left:((Math.random()*150)+10)
			});
	});
});
*/


/*
$(function(){
	$("#contre").on("mouseover", function(move){
	var btnContre= $("#contre").offset();	
	console.log(btnContre);
	
			$(this).css({
				top:((Math.random()*200)+20),
				left:((Math.random()*150)+10)
				//	btnContre.top += 50;
				//		$(this).css{
				//			top: btnContre.top,
				//			left:btnContre.left
						}	
				
			});
	});
});
*/
 /* Correction */
	 /*$(function() {

		$("#pour").on("mouseover", function() {
			var largeur = $(window).width(),
			    hauteur = $(window).height(),
			    x = Math.random() * largeur,
			    y = Math.random() * hauteur;


			  $(this).animate({
			  	position: "relative",
				left: x,
				top: y
			  });
		});

	});
	*/



/* Correction bouton bouge quand la souris approche de sa zone */
$(function() {

	const MARGIN = 10;

	var begin = 0;

	$("body").on("mousemove", function(ev) {
		
var mouseX = ev.pageX,
		    mouseY = ev.pageY,
    pos = $("#pour").offset(),
    btnX = pos.left,
    btnY = pos.top,
    btnWidth = $("#pour").width(),
    btnHeight = $("#pour").height();

if (	mouseX >= btnX - MARGIN && 
mouseX <= btnX + btnWidth + MARGIN &&
	mouseY  >= btnY - MARGIN && 
mouseY  <=  btnY + btnHeight + MARGIN) {

	if (begin > 0) {
		return false;
	}
	begin++;

		$("#pour").trigger("random");
}
	});

});


	
