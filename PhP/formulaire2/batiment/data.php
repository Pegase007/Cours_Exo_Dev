<?php


echo "<br> La nature est: " . $_POST['nature'];
echo "<br> Le type est: " . $_POST['type'];

echo "<br> La tva est de: " . $_POST['tva'];
echo "<br> Le numéro siret est: " . $_POST['siret'];
echo "<br> Le nom est: " . $_POST['nom'];
echo "<br> La raison sociale est: " . $_POST['rs'];
echo "<br> L'Ape est: " . $_POST['ape'];
echo "<br> Le RCS est: " . $_POST['rcs'];
echo "<br> Le nom du projet est: " . $_POST['projet'];
echo "<br> La description est: " . $_POST['description'];
echo "<br> Le résumé est: " . $_POST['resume'];
echo "<br> Le Budget min est: " . $_POST['budgetmin'];
echo "<br> Le Budget max est: " . $_POST['budgetmax'];
echo "<br> La Superficie min est: " . $_POST['superficiemin'];
echo "<br> La Superficie max est: " . $_POST['superficiemax'];
echo "<br> L'URL est: " . $_POST['url'];

foreach( $_POST['autres'] as $checked){
    echo "<br> Les autres options sont: " .$checked;
};

echo "<br> Le Financement est: " . $_POST['financement'];
echo "<br> La condition est: " . $_POST['conditions'];








?>