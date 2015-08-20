/*
$('#myTab a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
});


 $(function() {
    $("#draggable").draggable();
    $("#droppable").droppable({
      drop: function( event, ui ) {
        $( this )
          .addClass( "ui-state-highlight" )
          .find( "p" )
            .html( "Dropped!" );
      }
    });
  });
  */

/*
$(function(){


	function afficher () {
		var li;
		$.ajax ({

			method: "GET",
			url: "json.php",
			success: function(elem) {
					
				for (var key in elem) {
					var id = elem[key].dossier_id;
						if(tab.indexOf(id)== -1){
							tab.push(id);
						}
						li.append(elem[key].nom);
						//li.append("<br><p><span class='pseudo'>" + elem[i].pseudo + "</span> : " +
						//	"<span class='msg'>" + elem[i].message +"</span>" +
						//	 "<br><span class='date'>date : " + elem[i].date + "</span></p>");
						
						ul.append(li);
					}
					return false;
				}
		});
	} // fin function afficher 

	afficher();
}
*/

/*
	$(function (){
		$( "#upload").on("click",function rechargePage(elem){
			var form= new FormData($("form")[0]);
			$ajax({
				url:"upload.php",
				data: form,
				processData: false,
				method:"POST",
				contentType:false,
				success: function(elem){
					$(".dossiers");
					}
			});

		});
	});

*/

$(function(){


$(".btn-info").on("click",function(ret){
	// $("form")
    var form = new FormData(document.querySelector("form"));

    $.ajax({
    	url: "traitement.php",
    	method: "POST",
    	data: form,
    	processData: false,
    	contentType: false,
    	success: function(ret) {
    		console.log(ret);
    	}

    });


});

});

