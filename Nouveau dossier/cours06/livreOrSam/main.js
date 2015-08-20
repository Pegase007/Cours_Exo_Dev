$(function() {
	var ul = $("<ul>");
	$("body").append(ul);

/* Ajout d'une ligne*/
	function refresh() {
		$.ajax({
		url: "ajax.php",
		method: "GET",
			success: function(ret) {
				

				var li, btn;
				//
					for (var i=0 ; i < ret.length ; i++) {
						li = $("<li>")/*.attr("contenteditable", true)*/;

				/* Creation du bouton de suppression*/			
					btn = $("<button>");
								btn.text("supprimer");
								btn.attr("data-id", ret[i].id);
								btn.addClass("delete");
								
								li.text(ret[i].contenu + " " + ret[i].date);
								li.html("<p>" + ret[i].contenu + "</p>");
								li.children("p").attr("contenteditable", true);


								li.append(btn);
								ul.append(li);
				}
			}

		});
	}

	//Fonction de suppression
	ul.on("click", ".delete", function() {
		var id = $(this).attr("data-id");

		$.ajax({
			url: "ajax.php?jefais=supprimer&id="+id,
			method: "POST",
			success: function(ret) {
				if (ret) {
					ul.children().children("button[data-id='" + id +"']".parent().remove());
					//Peut etre remplacé par
					//ul.find("button[data-id='" + id +"']".parent().remove());
				}
				$("textarea").val("");
		$("input").val("");
			}
		
		});
		
	});

	/*Fonction d'enregistrement des modif on blur*/
	ul.on("blur", "li>p", function(){
		var id = $(this).next("button").data("id");
		$.ajax({
			url:"ajax.php?jefais=mise-a-jour&id=" +id,
			data: {
				content:$(this).text()
			},
			method:"POST",
			success: function(ret){
				if(ret){
					console.log("bien modifié");
				}
			}
		});
	});

	//Fonction d'insertion	
		$("button").on("click", function() {
		$.ajax({
		url: "ajax.php?jefais=insertion",
			data: {
				content: $("textarea").val(),
				email: $("input").val()
			},
			method: "POST",
			success: function(ret) {
			if (ret) {
				var li = $("<li>")					
				li.text(ret.contenu);
				ul.append(li);		
			}
		$("textarea").val("");
		$("input").val("");
			}

		});
		return false;
	});

		refresh();


//Test Contenteditable
//$("body").attr("contenteditable", true);

});


