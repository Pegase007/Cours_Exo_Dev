<?php

echo "<br> Le type de vehicule est : " . $_POST['type'];
echo "<br> La marque du vehicule est: " . $_POST['marque'];

if(!empty($_POST['modeles'])){
echo "<br> Le modele est: " . $_POST['modeles'];
}
else{
    echo "<br> Les modéles sont: Non defini";
}
echo "<br> Le tranche prix est: " . $_POST['prix'];
echo "<br> Le tranche kmtrage est: " . $_POST['km'];
echo "<br> L'année minimum est " . $_POST['anneemin'];
echo "<br> L'année maximum est " . $_POST['anneemax'];


if(!empty($_POST['carburant'])) {
    foreach ($_POST['carburant'] as $checked) {
        echo "<br> Les carburants sont: " . $checked;
    };
}
else{
    echo "<br> Les carburants sont: Non defini";
}
if(!empty($_POST['conso'])) {
    foreach ($_POST['conso'] as $checked) {
        echo "<br> Les conso sont: " . $checked;
    };
}
else{
    echo"<br> Les conso sont: Non defini";
}

if(!empty($_POST['portes'])) {
    foreach ($_POST['portes'] as $checked) {
        echo "<br> Le nombre de portes sont: " . $checked;
    };
}
else{
    echo "<br> Le nombre de portes sont: Non defini";
}

if(!empty($_POST['rapport'])) {
    echo "<br> Le rapport est " . $_POST['rapport'];
}
else{
    echo "<br> Le rapport est: Non defini";
}

echo "<br> La couleur est " . $_POST['couleur'];

if(!empty($_POST['rapport'])) {
    echo "<br> La couleur hexa est " . $_POST['couleurhexa'];
}


if(!empty($_POST['trouve'])) {
    foreach ($_POST['trouve'] as $type) {
        echo "<br> Les moyens de trouver ce formulaire sont: ".$type;
    };
}
else{
    echo "<br> Les moyens de trouver ce formulaire sont: Non defini";
}






?>