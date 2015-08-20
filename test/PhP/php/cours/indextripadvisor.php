<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">


</head>

<body>


<?php

include 'data.php';

//AFFICHER TABLEAU

///*foreach($biensimmobiliers as $saison => $type){
//    echo "<h1>{$saison} </h1> <br>";
//
//    foreach($type as $type => $ville){
//        echo "<h2>{$type}</h2>  <br>";
//
//        foreach($ville as $ville => $appart){
//            echo "<h3>{$ville}</h3> <br>";
//
//            foreach($appart as $appart => $description){
//                echo "<h4>{$appart}</h4> <br>";
//
//
//                foreach($description as $detail => $valeur){
//                    echo "<h5>{$detail}</h5> <br>";
//
//                    if(is_array($valeur)){
//                        foreach($valeur as $detail => $valeur){
//                            echo "{$detail} :  {$valeur} <br>";
//
//                            if(is_array($valeur)){
//                                foreach($valeur as $detail => $valeur){
//                                    echo "{$detail} :  {$valeur} <br>";
//                                }
//
//
//                            }
//                        }
//
//
//                    }
//
//                    else{
//                        echo "{$valeur} <br>";
//                    }
//
//                }
//
//
//            }
//
//        }
//
//    }
//
//}*/

//PERIODE AVEC LES PLUS DE LOCATIONS
echo "<h2> Periode ou il y a le plus de locations</h2>";
//Verifier le nombre d'offres d'appart en été
$counterete=0;
foreach($biensimmobiliers['ete'] as $saison => $type) {
    foreach ($type as $type => $ville) {
        $counterete++;
    }
}
//afficher le nombre d'appartements trouvés
//echo "appartement été {$counterete}<br>";

//Verifier le nombre d'offre d'appart en hiver
$counterhiver=0;
foreach($biensimmobiliers['hiver'] as $saison => $type) {
    foreach ($type as $type => $ville) {
        $counterhiver++;
    }
}
//afficher le nombre d'apparts trouvés
//echo "appartement hiver {$counterhiver} <br>";

//Afficher la periode avec les plus de locations

if($counterete>$counterhiver){

    echo"Il y a plus d'appartements en location en été avec: {$counterete} locations.";
}
else{
    echo "Il y a plus d'appartements en location en hiver avec:{$counterhiver} locations.";
}

// notation ternaire (condition) ? Oui : Non
$reponse = ($counterete>$counterhiver) ? "Il y a plus d'appartements en location en été avec: {$counterete} locations." :
    "Il y a plus d'appartements en location en hiver avec:{$counterhiver} locations.";

echo $reponse;





//
//foreach($biensimmobiliers as $saison => $type) {
//
//foreach ($type as $type => $ville) {
//
//foreach ($ville as $ville => $details) {
//
//
//foreach ($details as $details=> $valeurs) {
//
//    echo $valeurs['prix']."<br>" ;
//}

echo "<h2>Moyenne des prix</h2>";

//MOYENNE DE PRIX A PARIS
$counterparis=0;
$prixparis=0;

foreach($biensimmobiliers as $saison => $type) {

    foreach ($type as $type => $ville) {


        foreach ($ville['paris'] as $details => $valeurs) {

            echo "<br>".$valeurs['prix'];

            $prixparis=$prixparis+$valeurs['prix'];
            $counterparis++;

        }
    }
}
$moyenneparis=$prixparis/$counterparis;
echo "<br> La moyenne de prix à Paris est de {$moyenneparis} Euros";


//MOYENNE DE PRIX A LISBONNE
$counterlisbonne=0;
$prixlisbonne=0;
$tabmoyenne=[];

foreach($biensimmobiliers as $saison => $type) {

    foreach ($type as $type => $ville) {


        foreach ($ville['lisbonne'] as $details => $valeurs) {

            echo "<br>".$valeurs['prix'];

            $prixlisbonne=$prixlisbonne+$valeurs['prix'];
            $counterlisbonne++;

        }
    }
}
$moyennelisbonne=$prixlisbonne/$counterlisbonne;

echo "<br> La moyenne de prix à Lisbonne est de {$moyennelisbonne} Euros";

//MOYENNE DE PRIX A MADRID
$countermadrid=0;
$prixmadrid=0;

foreach($biensimmobiliers as $saison => $type) {

    foreach ($type as $type => $ville) {


        foreach ($ville['madrid'] as $details => $valeurs) {

            echo "<br>".$valeurs['prix'];

            $prixmadrid=$prixmadrid+$valeurs['prix'];
            $countermadrid++;

        }
    }
}
$moyennemadrid=$prixmadrid/$countermadrid;
echo "<br> La moyenne de prix à Madrid est de {$moyennemadrid} Euros";


//MOYENNE DE PRIX A BERLIN
$counterberlin=0;
$prixberlin=0;

foreach($biensimmobiliers as $saison => $type) {

    foreach ($type as $type => $ville) {


        foreach ($ville['berlin'] as $details => $valeurs) {

            echo "<br>".$valeurs['prix'];

            $prixberlin=$prixberlin+$valeurs['prix'];
            $counterberlin++;

        }
    }
}
$moyenneberlin=$prixberlin/$counterberlin;
echo "<br> La moyenne de prix à Berlin est de {$moyenneberlin} Euros";


echo ("<br> Les meilleurs prix sont de ". min($moyenneparis,$moyennemadrid,$moyenneberlin,$moyennelisbonne));






// NB TOTAL DE VUES DE BIENS IMMOBILIERS A LISBONNE
echo "<h2> Le nombre de vues des biens immobiliers à Lisbonne</h2>";
$vues=0;

foreach($biensimmobiliers as $saison => $type) {

    foreach ($type as $type => $ville) {


        foreach ($ville['lisbonne'] as $details => $valeurs) {

//            echo "<br>".$valeurs['nbvues'];

           $vues=$vues+$valeurs['nbvues'];



        }
    }
}
echo "<br> Le nombre total de vues des biens immobiliers à Lisbonne est de {$vues}";

//Maisons les mieux notées

echo "<h2>Classement des maisons de la meilleure à la moins bonne note</h2>";

$tab=[];
foreach($biensimmobiliers as $saison => $type) {

    foreach ($type['maison'] as $type => $ville) {

        foreach ($ville as $details => $valeurs) {
//            echo "<br>".$valeurs['note'];
//
//            echo "<br>".substr($valeurs['note'], 0,2 );

            $tab[$valeurs['titres']]=substr($valeurs['note'], 0,2 );

            arsort($tab);

        }
    }
}
foreach($tab as $key => $val){

    echo "<br> {$val} : {$key} ";
}




?>



</body>
</html>
