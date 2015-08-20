

<?php

$bdd = new PDO('mysql:host=localhost;dbname=cinecanicule;charset=utf8', 'root', 'troiswa');

// Essayer de me connecter a la bdd
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=cinecanicule;charset=utf8', 'root', 'troiswa');
}
// capturer l'erreur si ma connexion en bdd échoue
catch (Exception $e)
{
    // die : tue le processus et affche le message d'erreur
    die('Erreur : ' . $e->getMessage());
}



?>