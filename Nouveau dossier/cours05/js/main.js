
$(function(){
	$(".affichMessage").on("click", function(){
		$.ajax({
			method:'GET',
			url:'ajax.php',
			success:function(ret){
				//$(".bonjour").append(ret);
				//ret=$.parseJSON(ret);//Plus besoin de parse avec le header mis dans ajax.php
					console.log(ret[0]);
					$(".bonjour").append(ret[0]);
			},
			/* Bien sur pour l'erreur, remplacer genre ajax.php par ajac.php	*/ 
			error:function(err){
				console.log(err.status, err.statusText);
			}
		});

		$(".bonjour").append("hello<br>");
		return false;
	});

	
});



/* Requete ajax 

$.ajax({
	method:'GET',
	url:'ajax.php',
	success:function(){
		alert('plop');
	}
});
*/