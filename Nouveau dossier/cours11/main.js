$(function() {

	var files = {};

	$.ajax ({
		method: "GET",
		url: "dossier.php",
		success: function(ret) {
			
			var dirs = [], file;
			
			for (var i=0 ; i < ret.length ; i++) {
				
                    file = ret[i];

                    if (files[file.idDuDossier] == undefined) {
                    files[file.idDuDossier] = [];
                    }

                    files[file.idDuDossier].push(file);

                    if (dirs.indexOf(file.idDuDossier) == -1) {
                    li = $("<li>");		
					dirs.push(file.idDuDossier);
					li.attr("data-id", file.idDuDossier);
					li.addClass("dossier");
					li.text(file.dirname + " : ");
                    $("#dossiers").append(li);
				}

			}
		}
	});


	$("#upload").on("click", function() {

		var form = new FormData(document.getElementById("myform"));
		$.ajax({
			url: "upload.php?dossierId=" + idDossier,
			method: "POST",
			data: form,
			processData: false,
			contentType: false,
			success: function(ret) {
				if (ret) {
					alert("'upload a fonctionné");
				}
			}
		});
	});

	$("#dossiers").on("dblclick", ".dossier", function() {
		
	});



	$("#dossiers").on("dblclick", ".dossier", function() {
		var fichiers, li;

idDossier = $(this).attr("data-id");
		$("#dossiers").empty();

		fichiers = files[idDossier];

		 for (var i=0 ; i < fichiers.length ; i++) {
                li = $("<li>");
                li.text(fichiers[i].filename);
                $("#dossiers").append(li);
            }

	});

});