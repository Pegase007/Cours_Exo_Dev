<?php
	header("Content-Type : application/json");
	$user = array(
		"sam",
		"jim",
		"ana"
		);
	echo json_encode($user);

?>