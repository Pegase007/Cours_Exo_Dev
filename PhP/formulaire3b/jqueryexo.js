$(document).ready(function(){

// PLUGINS


$('#prix').slider()
$('#km').slider()

$("#trouve").select2();


// $(".js-example-basic-multiple").select2();
$(".js-example-basic-multiple").select2({
});







// REGEX
var regHexa=/^#[0-9a-zA-Z]{6}$/
var regYear=/^[1|2][0-9a-zA-Z]{3}$/


// get real year
function year() {
	var d = new Date();
	var n = d.getFullYear();
	return n
}

// getyear from form


function voiture(marque){
	console.log(marque);

	var mark=$('#modeles').find( $(" :not(option[name="+ marque+ "]) "));

	console.log (mark)
	$("#modeles").removeAttr("disabled");

	$("#modeles").find($("option").removeClass("hidden"));
	mark.addClass("hidden");

}



$("#couleurhexa").parent().addClass("hidden");
$("#modeles").attr("disabled","disabled")

$( "#marque" ).change(function() {

	console.log($("#marque").val())

	var marque = $("#marque").val();
	console.log(marque);
	voiture(marque)

});


$("#anneemin").keyup(function(){

	if(!regYear.test($(this).val()) || $(this).val() > $('#anneemax').val() || $(this).val() < 1900 ){

		$(this).parent().addClass("has-error");		
	}
	else{
		$(this).parent().removeClass("has-error").addClass("has-success");
	}
});

$("#anneemax").keyup(function(){

	if(!regYear.test($(this).val()) || $('#anneemin').val()>$(this).val() || $(this)>year() ){

		$(this).parent().addClass("has-error");		
	}
	else{
		$(this).parent().removeClass("has-error").addClass("has-success")
	}
});



$("#couleur").click(function(){
	console.log($("#couleur").val());
	
	if($("#couleur").val()=="vide"){
		$("#couleur").parent().addClass("has-error");

	}

	else if($("#couleur").val()=="autres" ){

		$("#couleur").parent().removeClass("has-error");
		$("#couleurhexa").parent().removeClass("hidden");
	}
	else{
		$("#couleurhexa").parent().addClass("hidden");
	}
});

$("#couleurhexa").keyup(function(){

	if(!regHexa.test($(this).val()) ){

		$(this).parent().addClass("has-error");		
	}
	else{
		$(this).parent().removeClass("has-error").addClass("has-success");
	}
});


// $("#carburants input[type=checkbox]").click(function(){

// console.log($(this).val()) 

// });











});


