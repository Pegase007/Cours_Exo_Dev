<h1>Hello world</h1>


<?php
echo"<h1>Bonjour</h1>";
$maVariable = 1;
echo $maVariable;
?> <br /> 
<?php
var_dump($maVariable);

?>

<br />

<?php
$maVariable = array(
	"nom" => "Sam",
	"age" => "26"
	);
echo $maVariable["nom"];
?>

<br />

<?php
	//Concanténation
	$name1 = "Jon";
	$name2 = "Cersey";
	echo $name1." ".$name2;
	//Possible de l'ecrire également (mais bon osef de celui là)
	echo "$name1 $name2";
?>

<br />

<?php

$maVariable = array("nom" => "Sam", "Jon");
	for($i=0; $i<count($maVariable); $i++);
	echo $maVariable["nom"];
	//var_dump($maVariable);
?>

<br />

<?php
$maVariable = array(
	"nom" => "Sam",
	"age" => "26"
	);
	foreach ($maVariable as $key => $value) {
		echo $key." ".":"." ".$value."<br />";
	}
	//$Key représente le nom de la propriété
?>

<!--
<?php
var_dump($_GET);
?>

<?php
	echo$_GET["name"];
	?>
-->

<?php
//Si l'age est supérieur à 18 = majeur, sinon mineur
$age = 12;
if($age >18){
	$text = "majeur";
	}else{
		$text = "mineur";
	}
	
//$text=$age>18? "majeur"; "mineur";

?>