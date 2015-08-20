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
            url: "upload.php",
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

});
