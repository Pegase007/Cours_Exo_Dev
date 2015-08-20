
var randoma=document.getElementById("randoma");
var random=Math.floor(Math.random() * (9 - 1)) + 1;
randoma.innerHTML=random;
var randomb=document.getElementById("randomb");
var randomtwice=Math.floor(Math.random() * (9 - 1)) + 1;
randomb.innerHTML=randomtwice;

//retranscrire text inseré dans title dans textarea

 	   title.addEventListener("keyup",function(e){
 	   	 var description =document.getElementById("description");
 	   	 var title =document.getElementById("title").value;
 	   	 if (description.value.length<10){
	   		
 			description.value=title;
		}
 });

//calcul du prix ttc lors de la saisie de données
ht.addEventListener("keyup",function(e){

	var ht = document.getElementById("ht").value;
	var tva = document.getElementById("tva").value;
	var reduc = document.getElementById("ht").value;
	var total=ht*(1+tva/100)-reduc
	ttc.value=total
});
//add 0 after prices if they are not complete

ht.addEventListener("blur",function(e){
		var reg=/\./
		var reg2=/[0-9]{1,}\.[0-9]$/
		if(!reg.test(ht.value)){

			ht.value=ht.value+ '.00'
		}
		else if(reg2.test(ht.value)){
			ht.value=ht.value+ '0'
		}
	});
cb.addEventListener("blur",function(e){
		var reg=/^[0-9]{16}$/

var cb=parseInt(document.getElementById("cb").value);
	
if(!reg.test(cb)){



}


	});

//au click de la souris, verifier les champs
var btn=document.getElementById("enregistrer");
btn.addEventListener("click",function(e){
	
// Numero de commande
var comnb=document.getElementById("comnb");
var reg=/^[0-9]{2}-[A-Z]{4}-[A-Z]2015$/
// get real year
function year() {
	var d = new Date();
	var n = d.getFullYear();
	return n
}
// getyear from form
var entyear=comnb.value.substring(10,15);

if(!reg.test(comnb.value) | entyear==year()){
	comnb.style.border="1px solid red";
}
else{
	comnb.style.border="1px solid lightgrey";
}
//titre
var title=document.getElementById("title");
var reg=/[a-zA-Z0-9]{5,}/
if(!reg.test(title.value)){
	title.style.border="1px solid red";
}
else{
	title.style.border="1px solid lightgrey";
}

//identifiant
var id=document.getElementById("id");
var reg=/^[1-9][0-9]*$/
if(!reg.test(id.value)){
	id.style.border="1px solid red";
}
else{
	id.style.border="1px solid lightgrey";
}

//description

var description=document.getElementById("description");
var reg=/[a-zA-Z-_ "'. ]{10,}/
if(!reg.test(description.value)){
	description.style.border="1px solid red";
}
else{
	description.style.border="1px solid lightgrey";
}

//quantity
var quantity=document.getElementById("quantity");
var reg=/^[1-9][0-9]*$/
if(!reg.test(quantity.value)){
	quantity.style.border="1px solid red";
}
else{
	quantity.style.border="1px solid lightgrey";
}

//color 

var color=document.getElementById("color");
var reg=/^(cyan|magenta|jaune|noir|#[a-zA-Z0-9]{6})$/i
if(!reg.test(color.value)){
	color.style.border="1px solid red";
}
else{
	color.style.border="1px solid lightgrey";
}

//prix ht

var ht=document.getElementById("ht");
var reg=/^[0-9]{1,}\.[0-9]{2}$/
if(!reg.test(ht.value)){
	ht.style.border="1px solid red";
}
else{
	ht.style.border="1px solid lightgrey";
}

//taux tva

var tva=document.getElementById("tva");
var reg=/^[0-9]{1,}\.[0-9]{1}%?$/
if(!reg.test(tva.value)){
	tva.style.border="1px solid red";
}
else{
	tva.style.border="1px solid lightgrey";
}

//reduction
var reduc=document.getElementById("reduc");
var reg=/^[0-9]{1,}\.[0-9]{2}$/
if(!reg.test(reduc.value)){
	reduc.style.border="1px solid red";
}	
else{
	reduc.style.border="1px solid lightgrey";
}


//prix ttc

var ttc=document.getElementById("ttc");
var reg=/^[0-9]{1,}\.[0-9]{2}$/

// Prix TTC = Prix HT * ( 1 + 19,6/100 )
var checkttc=(ht.value*(1+tva.value/100))-reduc.value

if(!reg.test(ttc.value) | checkttc!=ttc.value){
	ttc.style.border="1px solid red";
}
else{
	ttc.style.border="1px solid lightgrey";
}


//telephone
var tel=document.getElementById("tel");
var reg=/^([0-9]{2}[-. ]?){5}$/
if(!reg.test(tel.value)){
	tel.style.border="1px solid red";
}
else{
	tel.style.border="1px solid lightgrey";
}


//numero carte bancaire
var cb=document.getElementById("cb");
var reg=/^([0-9]{4}[-. ]?){4}$/

if(!reg.test(cb.value)){
	cb.style.border="1px solid red";
}
else{
	cb.style.border="1px solid lightgrey";
}


//cryptogramme
var crypto=document.getElementById("crypto");
var reg=/^[0-9]{3}$/
if(!reg.test(crypto.value)){
	crypto.style.border="1px solid red";
}	
else{
	crypto.style.border="1px solid lightgrey";
}


//date use by
var date=document.getElementById("date");
var reg=/^(1[0-2]|0[1-9])[.\/ ]([0-9]{2})$/

var month=parseInt(date.value.substring(0,2));
var year=parseInt(date.value.substring(3,5));

if(!reg.test(date.value) | year<=15 && month<07){
	date.style.border="1px solid red";
}
else{
	date.style.border="1px solid lightgrey";
}



//card name
var name=document.getElementById("name");
var reg=/[a-zA-Z]{3,}/
if(!reg.test(name.value)){
	name.style.border="1px solid red";
}	
else{
	name.style.border="1px solid lightgrey";
}

//email
var email=document.getElementById("email");
var reg=/^[a-zA-Z0-9_-]{2,}@[a-z0-9]{2,}\.[a-z]{2,3}$/
if(!reg.test(email.value)){
	email.style.border="1px solid red";
}
else{
	email.style.border="1px solid lightgrey";
}

//security
var capcha=document.getElementById("capcha");
var reg=/^([0-9]?){1,}[0-9]$/

var result=(random*5)+(randomtwice*7)


if(!reg.test(capcha.value) | result!=capcha.value){
	capcha.style.border="1px solid red";
}
else{
	capcha.style.border="1px solid lightgrey";
}




});
