<?php
	header("Content-Type : application/json");
	$message = array(
		"message" = "message1",
		"message" = "message2"
		);
	echo json_encode($message);

?>