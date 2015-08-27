$(document).ready(function(){

//REGEx


//TVA
var regTva=/^FR[0-9]{11}$/
//SIRET
var regSiret=/^([0-9]{3}[ ]?){3}[0-9]{5}$/
//NOM
var regNom=/[a-zA-Z0-9 ]{1,}/
//APE
var regApe=/^(NAF 2008[ ]?:[ ]?)[0-9]{2}\.[0-9]{2}[a-zA-Z]$/
//RCS
var regRcs=/^RCS [a-zA-Z ]{1,}([0-9]{3} ){2}[0-9]{3}$/
//NOM PROJET
var regProj=/[a-zA-Z0-9 ]{1,}/;
//RESUME
var regResume=/[a-zA-Z0-9 ]{1,}/;
//DESCRIPTION
var regDesc=/[a-zA-Z0-9 ]{1,}/;
//BUDGET
var regBudget=/^[0-9]{5,10}$/;
//SUPERFICIE
var regSuperf=/^[0-9]{3,}$/;
//URL
var regUrl=/(https?:\/\/)?[a-zA-Z0-9/]{1,}\.(jpg|pdf|png|jpeg)$/;
//ETAGES
var regEtages=/^[0-9]{1,}$/


//VARIALBE TEST REGEX on input
function testinput(obj,regEx){
	
	var idvalue= obj.val();
	var reg= !regEx.test(idvalue);


	if(reg){
		obj.parent().removeClass("has-success").addClass("has-error");
		// console.log($('#cmnb'));
	}
	else{

		obj.parent().removeClass("has-error").addClass("has-success");
		
	}

} //end testinput function

//limit caracters textarea
var limitnum = 40; // set your int limit for max number of characters

function limits(obj, limit) {

	var cnt = obj.parent().find("p >span");
	var txt = obj.val(); 
	var len = txt.length;

  // check if the current length is over the limit
  if(len >= limit){
  	obj.attr("disabled","disabled")
  	obj.parent().find("button").removeClass("hidden");
  	obj.parent().find("p").addClass("hidden")
  	obj.val(txt.substr(0,limit));
  	$(cnt).html(len-1);

  } 
  else { 
  	$(cnt).html(40-len);
  }

  // check if user has less than 20 chars left
  if (40-len >= 30){
  	$(cnt).parent().addClass("text-success");
  }

  else if (40-len >= 20){
  	$(cnt).parent().addClass("text-warning");
  }

  else if(40-len >= 10) {
  	$(cnt).parent().removeClass("text-warning").removeClass("text-success").addClass("text-danger");
  }
 }; //end  funtion limits





// TEST SELECTS

function selects(obj){

	if (obj.val()=="Selectionner"){

		obj.parent().removeClass("has-success").addClass("has-error");

	}

	else{
		obj.parent().removeClass("has-error").addClass("has-success");
	}

} //end selects




$('#tva').keyup(function(){
//tva
testinput($("#tva"),regTva);
});

$('#siret').keyup(function(){
//siret
testinput($("#siret"),regSiret);
});

$('#nom').keyup(function(){
//nom
testinput($("#nom"),regNom);
});

$('#rs').keyup(function(){
//rs
testinput($("#rs"),regTva);
});

$('#ape').keyup(function(){
//ape
testinput($("#ape"),regApe);
});

$('#rcs').keyup(function(){
//rcs
testinput($("#rcs"),regRcs);
});

$('#projet').keyup(function(){
//projet
testinput($("#projet"),regProj);
});

$('#description').keyup(function(){
//description
testinput($("#description"),regDesc);
limits($("#description"), limitnum);
});
// on click of the button description modify, hide counter and enable text
$("#modifydesc").click(function(){

	$("#modifydesc").addClass("hidden");
	$("#description").removeAttr("disabled","disabled");
	limitnum=41;

});
// on click of the button resume modify, hide counter and enable text
$("#modifyres").click(function(){

	$("#modifyres").addClass("hidden");
	$("#resume").removeAttr("disabled","disabled");
	limitnum=41;

});


$('#resume').keyup(function(){
//resume
testinput($("#resume"),regDesc);
limits($(this), limitnum);
});




$('#budgetmin,#budgetmax').keyup(function(){



if( !regBudget.test($("#budgetmin")) || $("#budgetmin").val()<10000 || $("#budgetmin").val() > $("#budgetmax").val() ){
	
	$(this).parent().removeClass("has-success").addClass("has-error");

}
else{
	$(this).parent().removeClass("has-error").addClass("has-success");
}

if( !regBudget.test($("#budgetmin"))|| $("#budgetmax").val()>1000000000 || $("#budgetmin").val() > $("#budgetmax").val() ){
	
	$(this).parent().removeClass("has-success").addClass("has-error");

}
else{
	$(this).parent().removeClass("has-error").addClass("has-success");
}


});






$('#superficiemin,#superficiemax').keyup(function(){
//superficiemin
testinput($("#superficiemin"),regSuperf);
//superficiemax
testinput($("#superficiemax"),regSuperf);
});

$('#url').keyup(function(){
//url
testinput($("#url"),regUrl);
});

$('#etages').keyup(function(){
//etages
testinput($("#etages"),regEtages);
});

$("#nature").click(function(){

	selects($("#nature"));

});

$("#rs").click(function(){

	selects($("#rs"));

});





















}); //end of file
