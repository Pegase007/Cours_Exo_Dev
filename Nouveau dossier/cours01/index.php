

<?php
        include ("header.php");

        // SI la propriété "page" existe dans l'url 
        // ET SI
        // elle correspond à une page qui existe 
        if (isset($_GET["page"]) && file_exists($_GET["page"] . ".php")) { 
        $page = $_GET["page"];
        }
        else {
        $page = "home";
        }

        include($page . ".php");

        include("footer.php");
?> 