<?php

echo "<br> Le type de vehicule est : " . $_POST['Type'];
echo "<br> La marque du vehicule est: " . $_POST['marque'];
echo "<br> Le modele est: " . $_POST['modeles'];
echo "<br> Le tranche prix est: " . $_POST['prix'];
echo "<br> Le tranche kmtrage est: " . $_POST['km'];
echo "<br> L'année minimum est " . $_POST['anneemin'];
echo "<br> L'année maximum est " . $_POST['anneemax'];
foreach( $_POST['carburant'] as $checked){
    echo "<br> Les carburants sont: " .$checked;
};
foreach( $_POST['conso'] as $checked){
    echo "<br> Les conso sont: " .$checked;
};
foreach( $_POST['portes'] as $checked){
    echo "<br> Le nombre de portes sont: " .$checked;
};
echo "<br> Le rapport est " . $_POST['rapport'];
echo "<br> La couleur est " . $_POST['couleur'];
echo "<br> La couleur hexa est " . $_POST['couleurhexa'];
echo "<br> Les moyens de trouver le formulaire sont " . $_POST['trouve'];






?>