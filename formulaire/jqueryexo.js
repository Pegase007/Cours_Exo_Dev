

$(document).ready(function() {
	console.log( "ready!" );



//REGEX
//numero de commande comnb
var regCom=/^[0-9]{2}[- ]?[A-Za-z]{4}[- ]?[A-Za-z]2015$/;
//title
var regTitle=/[a-zA-Z0-9]{5,}/;
//Id - Quantity
var regNb=/^[1-9][0-9]*$/;
//Descrition textarea
var regDesc=/[a-zA-Z-_ "'. ]{10,400}/;
//Color
var regCol=/^(cyan|magenta|jaune|noir|#[a-zA-Z0-9]{6})$/i;
//Prix Ht -Reduc -ttc
var regPrice=/^[0-9]{1,}(\.[0-9]{2})?$/;
//Tva
var regtva=/^[0-9]{1,}[\.]?[0-9]?$/;
//Telephone
var regtel=/^([0-9]{2}[-. ]?){5}$/;
//Carte Bancaire
var regcb=/^([0-9]{4}[-. ]?){4}$/;
//Criptogramme
var regCripto=/^[0-9]{3}$/;
//Date
var regDate=/^(1[0-2]|0[1-9])[.\/ ]([0-9]{2})$/;
// Name
var regName=/[a-zA-Z]{3,}/;
//Email
var regEmail=/^[a-zA-Z0-9_-]{2,}@[a-z0-9]{2,}\.[a-z]{2,3}$/;
// Capcha
var regCapcha=/^([0-9]?){1,}[0-9]$/;


//RANDOM NUMBER FOR CAPCHA

var random=Math.floor(Math.random() * (9 - 1)) + 1;
$("#randoma").text(random);

var randomtwice=Math.floor(Math.random() * (9 - 1)) + 1;
$("#randomb").text(randomtwice);

//TTC TVA

//calcul du prix ttc lors de la saisie de données
$("#ht").keyup(function(){

	var ht = $("#ht").val();
	var tva = $("#tva").val();
	var reduc = $("#ht").val();
	var total=ht*(1+tva/100)-reduc;
	$("#ttc").val(total);
});

//add 0 after prices if they are not complete

$("#ht").blur(function(){
	var reg=/\./;
	var reg2=/[0-9]{1,}\.[0-9]$/;

	if(!reg.test($('#ht').val())){

		$('#ht').val(ht.value+ '.00');
	}
	else if(reg2.test($('#ht').val()) ){

		$('#ht').val(ht.value+ '0');
	}
}); //end 00 ht



$("#reduc").blur(function(){
	var reg=/\./;
	var reg2=/[0-9]{1,}\.[0-9]$/;

	if(!reg.test($('#reduc').val())){

		$('#reduc').val(reduc.value+ '.00');
	}
	else if(reg2.test($('#reduc').val()) ){

		$('#reduc').val(reduc.value+ '0');
	}
}); //end 00 reduc


$("#ttc").blur(function(){
	var reg=/\./;
	var reg2=/[0-9]{1,}\.[0-9]$/;

	if(!reg.test($('#ttc').val())){

		$('#ttc').val(ttc.value+ '.00');
	}
	else if(reg2.test($('#ttc').val()) ){

		$('#ttc').val(ttc.value+ '0');
	}
}); //end 00 ttc


$("#tva").blur(function(){
	var reg=/\./;
	
	if(!reg.test($('#tva').val())){

		$('#tva').val(tva.value+ '.0');
	}
	
}); //end 00 tva

// CAPCHA

function capchatest(regEx){

	var idvalue= parseInt($("#capcha").val());
	var reg =!regEx.test("#capcha");

	var result=(random*2)+(randomtwice*3);
	console.log(result);
	console.log(idvalue);
	
	if(!reg || result != idvalue ) {
		console.log("banana");
		$("#capcha").parent().removeClass("has-success").addClass("has-error");
	}
	else{
		console.log("bananabizzz");
		$("#capcha").parent().removeClass("has-error").addClass("has-success");
	}

}//end capchatest

function comptecb(chiffre){



	if (chiffre==4){
		$("#carte").html('<img src="visa.png" class="img-responsive" alt="Responsive image"></img>');

	}
	if (chiffre==5){
		$("#carte").html('<img src="mastercard.png"class="img-responsive" alt="Responsive image"></img>');

	}
		if (chiffre==3){

$("#carte").html('<img src="amex.png" class="img-responsive" alt="Responsive image"></img>');
	}

}//end comptecb

//Real YEAR numero commande

// get real year
function year() {
	var d = new Date();
	var n = d.getFullYear();
	return n
}
// getyear from form
var entyear=comnb.value.substring(10,15);


//limit caracters textarea
var limitnum = 40; // set your int limit for max number of characters

function limits(obj, limit) {
  
  var cnt = $("#counter > span");
  var txt = $(obj).val(); 
  var len = txt.length;
    
  // check if the current length is over the limit
  if(len >= limit){
  	$("#description").attr("disabled","disabled")
  	$("#modify").removeClass("hidden");
  	$("#counter").addClass("hidden")
    $(obj).val(txt.substr(0,limit));
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
}


function testinput(obj,regEx){
	
	var idvalue= obj.val();
	var reg= !regEx.test(idvalue);


	if(reg){
		obj.parent().removeClass("has-success").addClass("has-error");
		// console.log($('#cmnb'));
	}
	else{

		obj.parent().removeClass("has-error").addClass("has-success");
		console.log("banana bizzz")
	}

}
  //end testinput function



$('#comnb').keyup(function(){
//numero de commande comnb

	
	var idvalue= $(this).val();
	var reg= !regCom.test(idvalue);


//check regex
	if(reg ){
		$(this).parent().removeClass("has-success").addClass("has-error");
		// console.log($('#cmnb'));
	}
	else{

		$(this).parent().removeClass("has-error").addClass("has-success");
		console.log("banana bizzz")
			
		//check that end of year is equal to actual year
			if (entyear==year()) {

				$(this).parent().removeClass("has-success").addClass("has-error");
			console.log(baaaaaanana)

			}
			else{

				$(this).parent().removeClass("has-error").addClass("has-success");

			}
	}







});
$('#title').keyup(function(){
//title
testinput($("#title"),regTitle);
});

$('#ide').keyup(function(){
//Id - Quantity
testinput($("#ide"),regNb);
});
$('#quantity').keyup(function(){
	testinput($("#quantity"),regNb);
});

$('#description').keyup(function(){
//Descrition textarea
testinput($("#description"),regDesc);
limits($(this), limitnum);
});
$('#color').keyup(function(){
//Color
testinput($("#color"),regCol);
});
$('#ht').keyup(function(){
//Prix Ht -Reduc -ttc
testinput($("#ht"),regPrice);
});
$('#tva').keyup(function(){
//Tva
testinput($("#tva"),regtva);
});
$('#reduc').keyup(function(){
	testinput($("#reduc"),regPrice);
});
$('#ttc').keyup(function(){
	testinput($("#ttc"),regPrice);
});
$('#tel').keyup(function(){
//Telephone
testinput($("#tel"),regtel);
});
$('#cb').keyup(function(){
//Carte Bancaire
testinput($("#cb"),regtel);

var chiffre=$("#cb").val().substring(0);
console.log(chiffre)
comptecb(chiffre);


});
//Criptogramme
$('#crypto').keyup(function(){
	testinput($("#crypto"),regCripto);
});
//Date
$('#date').keyup(function(){
	testinput($("#date"),regDate);
});
// Name
$('#name').keyup(function(){
	testinput($("#name"),regName);
});
//Email
$('#email').keyup(function(){
	testinput($("#email"),regEmail);
});
// Capcha
$('#capcha').keyup(function(){
	capchatest(regCapcha);

});

$("#modify").click(function(){

	$("#modify").addClass("hidden");
	$("#description").removeAttr("disabled","disabled");
	limitnum=41;

})





});//fin ouverture