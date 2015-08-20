<?php 



   $info =pathinfo($_FILES["monfichier"]["name"]);



   if(in_array(strtolower($info["extension"]),array("png","jpeg","gif","jpg"))){

        
   		echo move_uploaded_file($_FILES["monfichier"]
	["tmp_name"],"images/".$_FILES["monfichier"]["name"]);
       

   }



   //if(image_type_to_mime_type(exif_imagetype($_FILES["monfichier"]["tmp_name"]))){

   	//	echo"yes";

 //  }
   //else {

  // 	echo"no";
  // }

   









   
 


    
   

     

?>