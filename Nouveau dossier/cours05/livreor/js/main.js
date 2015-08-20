$(function(){
	//$(".affichMessage").on("click", function(){
		var mesMsg;

		$.ajax({
			method:'GET',
			url:'index.php',
			success:function(ret){
				for(i=0; i<ret.lenght; i++){
					mesMsg=$(".affichMessage").append("div");
					mesMsg.append(ret[i].message);

				}
				
					echo(ret[0]);
					$(".envoi").append(ret[0]);
			},
			
			});
		//});

	});

	
	$("button").on("click", function() {
	$.ajax({
	url: "index.php?jefais=enregistre",
	data: {content: $("textarea").val()},
	method: "POST",
	success: function(ret) {
		if (???) {
			console.log("Message bien enregistré");
		}
}

	});

	});

});

