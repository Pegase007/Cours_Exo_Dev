
	function monTableau(col, row){
			
			document.write("<table border='1'>");

				for(var i=1; i<row; i++){
					document.write("<tr>");
					
					for(var j=1; j<col; j++){
					
							if (i==j){
								document.write("<td><strong>" + (j*i) + "</strong></td>");
							}
								else{
									document.write("<td>" + (j*i) + "</td>");
								}
					}	
					document.write("<tr>");
				}
			document.write("</table>");
	}

var nombreRow = (window.prompt("Entrez le nombre de lignes"));
var nombreCol = (window.prompt("Entrez le nombre de cellules"));

monTableau(nombreRow, nombreCol);