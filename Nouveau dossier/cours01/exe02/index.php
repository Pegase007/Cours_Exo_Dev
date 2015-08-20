<!-- Q1 et Q2 Ecrire le tableau de nombres en php, puis mettre les case impaires en rouger, les paires en vert (utiliser le modulo) -->
<?php

function monTableau(){
			
			echo"<table>";

				for($i=1; $i<10; $i++){
					echo"<tr>";
					
					for($j=1; $j<10; $j++){
							if ($i*$j%2 == 0){
								echo('<td style="color:#B378D0">'.($j*$i).'</td>');
							}
								else{
									echo('<td style="color:#75EABF">'.($j*$i).'</td>');
								}
					}	
					echo("<tr>");
				}
			echo"</table>";
}

monTableau();
?>

<!-- Correction Q1 et 2 -->







<!-- Correction Q3 : ajouter un parametre ds l'url qui définit la taille de la table de nombres.. Attention 
	à la securité -->

<?php
	
	define(“NB_COL_DEFAULT”, 15); //Mise en place de constantes (ici la taille min des colonnes)
	define(“NB_LIGNE_DEFAULT”, 15);

	$col = isset($_GET[“col”]) ? $_GET[“col”] : NB_COL_DEFAUT;
	$ligne = isset($_GET[“ligne”]) ? $_GET[“ligne”] : NB_LIGNE_DEFAUT;

	echo “<table>”;
		for ($i=1 ; $i <= $ligne ; $i++) {
			echo “<tr>”;
				for ($j=1 ; $j <= $col ; $j++) {
				$result = $i * $j;	

			echo “<td>”;

			if ($i == $j) {
				echo “<strong>”;
			}

			if($resulte %2 ==0){
			echo ‘<span style=”color: green”>’ . $result . ‘</span>’;
				}
				else {
				    echo ‘<span style=”color: red”>’ . $result . ‘</span>’;
				}

				if ($i == $j) {
				echo “</strong>”;
				}
			echo “</td>”;
		}
		echo “</tr>”;
	}
	echo “</table>”;

?>

<!-- Version mieux -->
<?php

define(“NB_COL_DEFAULT”, 15);
define(“NB_LIGNE_DEFAULT”, 15);

$col = isset($_GET[“col”]) ? $_GET[“col”] : NB_COL_DEFAULT;
$ligne = isset($_GET[“ligne”]) ? $_GET[“ligne”] : NB_LIGNE_DEFAULT;

echo “<table>”;
	for ($i=1 ; $i <= $ligne ; $i++) {
	echo “<tr>”;
		for ($j=1 ; $j <=  $col; $j++) {

			$result = $i * $j;

	echo “<td>”;

	if ($i == $j) {
		echo “<strong>”;
	}

	echo ‘<span style=”color: ‘ . ($result % 2 == 0 ? “green” : “red”) . ”>’ . $result . ‘</span>’;
					//Rappel si l'expression est bonne on applique vert, sinon rouge


	if ($i == $j) {
		echo “</strong>”;
		}
	echo “</td>”;	
	}
			echo “</tr>”;
		}
	echo “</table>”;

?>

<!-- Version sécurisée -->



<?php
	define(“NB_COL_DEFAULT”, 15);
	define(“NB_LIGNE_DEFAULT”, 15);


	function get($param, $default) {
   		return isset($_GET[$param]) && !empty($_GET[$param]) ? 
   		htmlspecialchars($_GET[$param]) : $default;
	}
	//Cette fonction verifie à chaque fois que ca existe et que ca n'est pas vide et pose la securité


	$col = get(“col”, NB_COL_DEFAULT);
	$ligne = get(“ligne”, NB_LIGNE_DEFAULT);

	echo “<table>”;
		for ($i=1 ; $i <= $ligne ; $i++) {
		echo “<tr>”;
			for ($j=1 ; $j <=  $col; $j++) {

				$result = $i * $j;

	echo “<td>”;

	if ($i == $j) {
		echo “<strong>”;
	}
	
	echo ‘<span style=”color: ‘ . ($result % 2 == 0 ? “green” : “red”) . ”>’ . $result . ‘</span>’;


	if ($i == $j) {
		echo “</strong>”;
		}

	echo “</td>”;
		
	}
			echo “</tr>”;
		}
	echo “</table>”;

?>
