$(function() {

var li;



	$.ajax ({
		method: "GET",
		url: "ajax.php?jefais=affiche",
		success: function(elem) {

			var ul = $("body").append($("<ul>"));

			for (var i=0; i<elem.length; i++) {

				li = $("<li>");
				li.text(elem[i].pseudo + " : " + elem[i].message);
		/*Creation du bouton de suppression, avant la fermeture de la li*/
				btn = $("<button>");
				btn.text("Supprimer");
				btn.attr(???, ???);
				btn.addClass("delete");
				
				li.text(ret[i].contenu + " " + ret[i].date);
				li.append(btn);

				ul.append(li);

				



			}

		}


	});


	$(???).on("click", ???, function() {
	
	$.ajax({
	url: ???,
	method: ???,
	success: function(ret) {
		if (???) {
			console.log("Supprimé");	
		}
}

	});


});


	$(".btnPublier").on("click", function() {

		$.ajax ({
			method: "POST",
			url: "ajax.php?jefais=enreg",
			data: {
				pseudo: $("input[name='pseudo']").val(),
				message: $("textarea[name='message']").val()
			},
			success: function(ret) {
				if (ret) {
				var li = $("<li>");
				li.text(ret.message);
				ul.append(li)
				
				}
			}
		});
		return false;
	}); /* fin "btnPublier").on("click", */

});

