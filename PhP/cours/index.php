<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">

</head>

<body>
<p>Minions ipsum aaaaaah jeje para tú hana dul sae po kass hana dul sae.
	Uuuhhh bee do bee do bee do bananaaaa jeje po kass bee do bee do bee do bee do bee do bee do tulaliloo bee do bee do bee do.
	Poulet tikka masala jiji hahaha underweaaar chasy. Wiiiii belloo! La bodaaa daa la bodaaa tank yuuu!
	Tatata bala tu hahaha po kass hahaha pepete. Belloo! underweaaar bee do bee do bee do bappleees la bodaaa tatata bala
	tu la bodaaa hahaha hana dul sae. Ti aamoo! tatata bala tu potatoooo aaaaaah jiji belloo! Wiiiii.</p>

<?php

echo "<h1> Bonjour les copains  Banana </h1>";
echo "<h2>Yuuuuuupiiiii</h2>";
// declarer une variable
$nom="Boyer";
$prenom="Julien";
echo $nom. " " .$prenom;
echo "<br>";
$age="27";
echo $age;
echo "<br>";
$ville="Lyon";
echo $ville;
echo "<br>";
$email="machinmuch@meetserieous.com";
echo $email;

if($nom=="Boyer"){

	echo "<br>Je suis Admin";
}
if($age<=18){
	echo "<br>mineur";
}
else{
	echo "<br>majeur";
}

$phrase = "Il n'y a rien de plus chouette que \"les Minions\"";
echo $phrase;

$age = 12;
$note = 52.15;
$flag = true;


if($phrase == "Il fait beau"){
	echo "Chouette ! Grillades à volonté";
}
else{
	echo "<br>too bad";
}

if($note > 50){
	echo "<br>Bonne note";
}
else{
	echo "<br>Moyen";

}

echo "<br>".$nom . " / ". $prenom . " à l'age de ".$age;

echo "<p>Le nom est de {$nom}</p>";


$noteexact=($note *5)/100;

echo "La note sur 20 est de : ".$noteexact. "/20";

$notemoyenne=($note *5)*10/100;
echo "La moyenne est de:".$notemoyenne;

if($age > 1 && $age < 10){
	echo "Enfant";

}
elseif($age >=10 && $age < 18 ){
	echo "Adolescent";
}
elseif($age >=18 && $age < 30 ){
	echo "Adulte";
}
elseif($age >=30 && $age < 50){
	echo "Joli(e)";
}
else{
	echo "Sexy";

}

if($nom=="Boyer" || $prenom=="Marjorie"){
	echo "Marjorie Boyer ?";

}
// condition false
if ($flag != false){
	echo "Flag alors";
}
// négation
if(!$flag){

	echo "Le flag ne marche pas";
}


$compteur = 1;

while( $compteur < 6){
	echo "<h{$compteur}>Mon Titre</h{$compteur}>";
	$compteur++;
}

for ($nombre_de_lignes =1; $nombre_de_lignes <=100; $nombre_de_lignes ++)
{
	echo '<p>Ceci est la ligne n°' . $nombre_de_lignes . '</p>';
}
//création de la fonction
function direBonjour(){
	echo "Hello les Minions";
}

function message($message){
	echo $message;
}

direBonjour();


function notification($notif){
	//retour de valeur
	return "<div class='alert alert-block'>".$notif."</div>";
}


function panier($produit, $quantite, $prix){
	return $produit ." avec la quantité de ".$quantite. " et le prix total de ".$prix;

}
// aRgument est facultatif la valeur est par défaut je ne suis pas obligé de renseigner la valeur
function servir_cafe($type = "cappuccino")
{
	return "Servir un {$type}.\n";
}

//ce sont de fonctions inées à php
$phrase = 'Bonjour tout le monde ! Je suis une phrase !';
$longueur = strlen($phrase);

echo "<il y a {$longueur} </p>";


$chaine = "bim bam boum";

// str_replace : pour remplacer les "b" par des "p"
echo str_replace("b", "p", $chaine);

// transformer tout en minuscule et tt en majuscule
echo $chaine = strtoupper ($chaine); // Transforme en majuscules (By Jessy :D)

// MINISCULE
echo $chaine = strtolower($chaine);



//j'appelLE ma fonction

direBonjour();

echo notification("dsfdsfds");

message('Hello Everybody!');


echo panier("Places pour Canyoning de Grenoble", 5, 480);
echo panier("Places pour Canyoning de Grenoble", 5, 480) . " " . panier("Places pour Speleo de Grenoble", 3, 360);


echo servir_cafe();
echo servir_cafe("espresso");

$tab = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche" ];
$tab2 = array("Thais", "Marjorie", "Matthieu", "Julien", "Daniel", "Jessy");

for($i=0 ; $i< count($tab2) ; $i++){

	echo $tab2[$i];
}

$nb = array("1","7","8","12","9","6","15","8","19","17","48","63","25","14","78");

for ($i=0; $i<count($nb) ; $i++){

	if ($nb[$i]%2==0){

		echo $nb[$i],"<br>" ;
	}

}
$add=0;
$notes=array("1","7","8","12","9","6","15","8","19","17");
for ($i=0 ; $i<count($notes) ; $i++){

	echo $notes[$i],"<br>";
	$add=$add+$notes[$i];
}

$moyenne=$add/count($notes);

echo "La moyenne est de ".$moyenne;




echo "<h2>Tableaux associatif</h2>";


$tab = array(
	"nom" => "Boyer", //1er element dans le tableau avec une forme clef => valeur
	"prenom" => "Julien"
);


echo $tab["nom"];
$tab["nom"] = "De Brito";

// rajouter
$tab["age"] = 27;

$profil = [
	"email" => "julien@meetserious.com",
	"ville" => "Lyon"
];

echo "<br>";

echo $profil['ville'];

foreach($profil as $clef => $valeur){
	echo $clef . " : ". $valeur,"<br>";

}
echo "<br>";
$produit=array(

	"titre" => "banana",
	"quantité"=> "plein",
	"prix"=>"pas cher",
	"description" => "un produit delicieux",
	"reference" => "minion",
	"couleur" => ["yellow","blanc","vert"]

);
foreach($produit as $clef => $valeur){

	echo "{$clef} : {$valeur} <br>";

}

echo $produit['couleur'][0];

foreach($produit["couleur"] as $couleur){
	echo "La couleur est : {$couleur}";

}

$anneefrance=array(

	"ete" => ["juin" => 30,"juillet" => 31,"aout" => 31],
	"automne" => ["septembre" => 31,"octobre" => 30,"novembre" => 30],
	"hiver" => ["decembre" => 30,"janvier" => 31,"fevrier" => 28],
	"printemps" => ["mars" => 31,"avril" => 30,"mai" => 31]

);


foreach($anneefrance as $clef => $valeur){

	echo "<br> {$clef}: ";

	foreach($valeur as $mois => $val){

		echo $mois. " : ". $val;
	}

}
echo "<br>";

$voitures=array(

	"citadine" =>

		["peugeot" =>
			[ ">106" =>
				[" titre"=>
					"voiture",
					"nb portes" =>
						"5",
					"km"=>
						"0",
					"prix" =>
						58635 ,
					"descriptif"=>
						"belle voiture",
					"coloris"=>
						"bleu" ],
				">107" =>
					[" titre"=>
						"voiture",
						"nb portes" =>
							"5",
						"km"=>
							"0",
						"prix" =>
							12356 ,
						"descriptif"=>
							"belle voiture",
						"coloris"=>
							"bleu" ]
			],

			"citroen" =>
				[ ">c1" =>
					[" titre"=>
						"voiture",
						"nb portes" =>
							"5",
						"km"=>
							"0",
						"prix" =>
							19300 ,
						"descriptif"=>
							"belle voiture",
						"coloris"=>
							"bleu" ],

					">banane" =>
						[" titre"=>
							"voiture",
							"nb portes" =>
								"5",
							"km"=>
								"0",
							"prix" =>
								32150 ,
							"descriptif"=>
								"belle voiture",
							"coloris"=>
								"bleu" ]
				] ],

	"break" =>

		["tesla" =>

			[ ">je connais pas" =>
				[" titre"=>
					"voiture",
					"nb portes" =>
						"5",
					"km"=>
						"0",
					"prix" =>
						53000,
					"descriptif"=>
						"belle voiture",
					"coloris"=>
						"bleu" ],

				">je connais pas" =>
					[" titre"=>
						"voiture",
						"nb portes" =>
							"5",
						"km"=>
							"0",
						"prix" =>
							21000000,
						"descriptif"=>
							"belle voiture",
						"coloris"=>
							"bleu" ]
			],

			"citroen" =>
				[ ">blabla" =>
					[" titre"=>
						"voiture",
						"nb portes" =>
							"5",
						"km"=>
							"0",
						"prix" =>
							25000 ,
						"descriptif"=>
							"belle voiture",
						"coloris"=>
							"bleu" ],

					">Connais pas" =>
						[" titre"=>
							"voiture",
							"nb portes" =>
								"5",
							"km"=>
								"0",
							"prix" =>
								105000 ,
							"descriptif"=>
								"belle voiture",
							"coloris"=>
								"bleu" ]
				]

		],
	"berline" =>

		["BA" =>

			[ ">a" =>
				[" titre"=>
					"voiture",
					"nb portes" =>
						"2",
					"km"=>
						"0",
					"prix" =>
						53000,
					"descriptif"=>
						"belle voiture",
					"coloris"=>
						"bleu" ],

				">b" =>
					[" titre"=>
						"voiture",
						"nb portes" =>
							"8",
						"km"=>
							"0",
						"prix" =>
							21000000,
						"descriptif"=>
							"belle voiture",
						"coloris"=>
							"bleu" ]
			],

			"citroen" =>
				[ ">c" =>
					[" titre"=>
						"voiture",
						"nb portes" =>
							"2",
						"km"=>
							"0",
						"prix" =>
							25000 ,
						"descriptif"=>
							"belle voiture",
						"coloris"=>
							"bleu" ],

					">d" =>
						[" titre"=>
							"voiture",
							"nb portes" =>
								"5",
							"km"=>
								"0",
							"prix" =>
								105000 ,
							"descriptif"=>
								"belle voiture",
							"coloris"=>
								"bleu" ]
				]

		]);

//afficher tableau
echo"<h3>afficher le tableau </h3>";
foreach($voitures as $clef => $valeur){

	echo "<br> <h1> {$clef}: </h1> <br> ";

	foreach ($valeur as $marque =>$modele){
		echo "<h2>{$marque},</h2> <br>";

		foreach ($modele as $modele => $description){
			echo "<h4>{$modele},</h4> <br>";

			foreach ($description as $clef => $valeur){
				echo "<h7> {$clef}: {$valeur}</h7>  <br> ";


			}

		}
	}


}
//calculer la moyenne de prix des citroens

//echo$voitures['citadine']['citroen']['>c1']['prix'];
echo"<h3>moyenne de prix des citroens </h3>";
$prix=0;
$count=0;
foreach ($voitures as $type => $marque) {

	foreach ( $marque["citroen"] as $modele=> $vehicule) {

		echo $vehicule["prix"] ."<br>";
		$prix = $prix +  $vehicule["prix"];
		$count++;

		}

}
$moyenne=$prix/$count;
echo "La moyenne est de: {$moyenne}";

echo"<h3>voiture la plus chere </h3>";
// Afficher la voiture la plus cher en Break
$prix=0;
$count=0;
foreach ($voitures["break"] as $type => $marque) {

	foreach ( $marque as $modele=> $vehicule) {

		echo "  <br> Le prix est de: {$vehicule["prix"]}";

		if($vehicule["prix"]> $prix){

			$prix=$vehicule["prix"];


		}

	}

}
echo "<br>la plus chere est:{$prix}";

// Afficher la moyenne arrtondie du nb de porte pour les voiture berlines
echo"<h3>nb de portes </h3>";
$portes=0;
$count=0;
foreach ($voitures["berline"] as $type => $marque) {

	foreach ( $marque as $modele=> $vehicule) {

		echo "  <br> Le nb de portes est de: {$vehicule["nb portes"]}";

		$portes=$portes+$vehicule["nb portes"];
		$count++;


		}

	}

$moyportes=$portes/$count;

echo "<br>la moyenne de portes est:{$moyportes}";








?>




</body>
</html>
