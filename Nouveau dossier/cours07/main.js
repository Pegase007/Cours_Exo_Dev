$(function(){
	var id;
	var li;
	      
	
	/*	$.ajax({
		url: "https://graph.facebook.com/753493108",
		method: "GET",
			success: function(ret){
				$(".fb").append("<ul>");
				//id = ret["id"];
				//first_name = ret["first_name"];
				console.log(ret);
				//$("ul").append("<li>");
				for (var key in ret){
					var li = $("<li>").appendTo("ul");
					li.text(key + " : " + ret[key]);
				}
				
			}

		});

		*/
		$(".fb").append("<ul>");
		$("select").on("change", function(){
			var id = $("select option:selected").val();
				$.ajax({
					url: "https://graph.facebook.com/" + id,
					method: "GET",
					success: function(ret){
						$("ul").empty(); //Pour vider le ul precedent
						//id = ret["id"];
						console.log(ret);
				
						for (var key in ret){
							var li = $("<li>").appendTo("ul");
							li.text(key + " : " + ret[key]);
								}
					}	
				});

		});


});
