<?php
	if(isset($_REQUEST["submit"])){
		//echo "test";


	$condition = pathinfo($_FILES["monFichier"]["name"]);
	$file = $_FILES["monFichier"];
		//strtolower sert à accepter les noms de fichier en majuscules
		if(in_array(strtolower($condition["extension"]), array("png", "jpg"))){
			echo "Bazinga";
			}else{
				echo "rate";
			}
		//On va maintenant utiliser une constante pour verifier que le type renvoyé existe bien. Bon comme c'est une constante, il faudra aller voir le tableau
		// des constantes, mais pour info, 1.gif 2.jpg 3.png

		if(image_type_to_mime_type(exif_imagetype($_FILES["monFichier"]["tmp_name"]))){
			echo "Fichier trouvé";
		}else{
			echo "Con de mime";
		}

		if(md5(($file).uniqid()). "." .extension){
			echo "Cryptage reussi";
		}
			else{
				echo "C'est roulé sous les aiselles";
			}


	//$file = $_FILES["monFichier"];
		move_uploaded_file($file["tmp_name"], "image/".$file["name"]);


	


	}
?>



































