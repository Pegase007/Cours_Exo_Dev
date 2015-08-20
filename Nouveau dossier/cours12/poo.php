<?php

	class Guerrier{
		var $force = 0;
		var $pv = 0;
		
		

		function attaquer($guerrierAttack){
			$guerrierAttack->pv -= 2;
			echo $guerrierAttack->pv;
		}	

		function getPv($pvRestants){
			$pvRestants->$pv == $pv-$force;
		}



	}


$ezreal = new guerrier();
	$ezreal->force=2;
	$ezreal->pv=10;
	
$nidalee = new guerrier();
	$nidalee->force=1;
	$nidalee->pv=20;

$ezreal->attaquer($nidalee);




?>