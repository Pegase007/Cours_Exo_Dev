<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">


</head>

<body>


<?php

$biensimmobiliers=array(


"ete" =>
["appart"=>
    ["paris"=>
        ["details"=>
            [ "titres"=>"Bel appartement à paris",
                "description"=> "Proche de la tour Eiffel",
                "sponsors"=>
                    ["sponsor1","sponsor2","sponsor3"],
                "prix"=>"54€",
                "achetable"=>"oui",
                "nbpieces"=>"2",
                "photos"=>
                    ["photo1","photo2","photo3"],
                "nbvues"=>"43",
                "commentaires"=>
                    ["com1","com2","com3"],
                "note"=>"10/20",
                "options"=>
                    ["clim"=>"non",
                        "chauffage"=>"oui",
                        "piscine"=>"non"
                    ]
            ]
        ],
        "lisbonne"=>
            ["details"=>
                [ "titres"=>"Bel appartement à Lisbonne",
                    "description"=> "Proche de la gare",
                    "sponsors"=>
                        ["sponsor1","sponsor2","sponsor3"],
                    "prix"=>"32€",
                    "achetable"=> "non",
                    "nbpieces"=>"3",
                    "photos"=>
                        ["photo1","photo2","photo3"],
                    "nbvues"=>"12",
                    "commentaires"=>
                        ["com1","com2","com3"],
                    "note"=>"15/20",
                    "options"=>
                        ["clim"=>"oui",
                            "chauffage"=>"non",
                            "piscine"=> "non"
                        ]
                ]
            ],
        "madrid"=>
            ["details"=>
                [ "titres"=>"Appartement de charme à Madrid",
                    "description"=> "A 5minutes du centre ville",
                    "sponsors"=>
                        ["sponsor1","sponsor2","sponsor3"],
                    "prix"=>"62€",
                    "achetable"=> "oui",
                    "nbpieces"=>"2",
                    "photos"=>
                        ["photo1","photo2","photo3"],
                    "nbvues"=>"72",
                    "commentaires"=>
                        ["com1","com2","com3"],
                    "note"=>"13/20",
                    "options"=>
                        ["clim"=>"oui",
                            "chauffage"=>"oui",
                            "piscine"=> "oui"
                        ]
                ]
            ],
        "berlin"=>
            ["details"=>
                [ "titres"=>"Appartement typique Berlin Est",
                    "description"=> "Proche de Brandeburger tor",
                    "sponsors"=>
                        ["sponsor1","sponsor2","sponsor3"],
                    "prix"=>"70€",
                    "achetable"=> "non",
                    "nbpieces"=>"5",
                    "photos"=>
                        ["photo1","photo2","photo3"],
                    "nbvues"=>"35",
                    "commentaires"=>
                        ["com1","com2","com3"],
                    "note"=>"18/20",
                    "options"=>
                        ["clim"=>"non",
                            "chauffage"=>"oui",
                            "piscine"=> "non"
                        ]
                ]
            ]
    ],
    "maison"=>
        ["paris"=>
            ["details"=>
                [ "titres"=>"Maison de charme à 30 minutes de Paris",
                    "description"=> "Proche des transports en commun",
                    "sponsors"=>
                        ["sponsor1","sponsor2","sponsor3"],
                    "prix"=>"85€",
                    "achetable"=> "non",
                    "nbpieces"=>"4",
                    "photos"=>
                        ["photo1","photo2","photo3"],
                    "nbvues"=>"35",
                    "commentaires"=>
                        ["com1","com2","com3"],
                    "note"=>"18/20",
                    "options"=>
                        ["clim"=>"non",
                            "chauffage"=>"oui",
                            "piscine"=> "non"
                        ]
                ]
            ],
            "lisbonne"=>
                ["details"=>
                    [ "titres"=>"Maison de ville centre ville",
                        "description"=> "Petit maison équipée proche de tout",
                        "sponsors"=>
                            ["sponsor1","sponsor2","sponsor3"],
                        "prix"=>"70€",
                        "achetable"=> "oui",
                        "nbpieces"=>"3",
                        "photos"=>
                            ["photo1","photo2","photo3"],
                        "nbvues"=>"12",
                        "commentaires"=>
                            ["com1","com2","com3"],
                        "note"=>"14/20",
                        "options"=>
                            ["clim"=>"oui",
                                "chauffage"=>"oui",
                                "piscine"=> "oui"
                            ]
                    ]
                ],
            "madrid"=>
                ["details"=>
                    [ "titres"=>"Maison à 10 minutes du centre ville",
                        "description"=> "Maison d'archicture typique",
                        "sponsors"=>
                            ["sponsor1","sponsor2","sponsor3"],
                        "prix"=>"48€",
                        "achetable"=> "non",
                        "nbpieces"=>"2",
                        "photos"=>
                            ["photo1","photo2","photo3"],
                        "nbvues"=>"56",
                        "commentaires"=>
                            ["com1","com2","com3"],
                        "note"=>"12/20",
                        "options"=>
                            ["clim"=>"non",
                                "chauffage"=>"oui",
                                "piscine"=> "oui"
                            ]
                    ]
                ],
            "berlin"=>
                ["details"=>
                    [ "titres"=>"Maison proche de Sachsenhausen Memorial ",
                        "description"=> "A quelques minutes du centre ville",
                        "sponsors"=>
                            ["sponsor1","sponsor2","sponsor3"],
                        "prix"=>"43€",
                        "achetable"=> "oui",
                        "nbpieces"=>"4",
                        "photos"=>
                            ["photo1","photo2","photo3"],
                        "nbvues"=>"54",
                        "commentaires"=>
                            ["com1","com2","com3"],
                        "note"=>"13/20",
                        "options"=>
                            ["clim"=>"oui",
                                "chauffage"=>"oui",
                                "piscine"=> "non"
                            ]
                    ]
                ]
        ]
],

"hiver"=>
["appart"=>
    ["paris"=>
        ["details"=>
            [ "titres"=>"Petit chalet à quelques minutes de Paris",
                "description"=> "Petite escapade à quelques minutes de la belle ville de Paris",
                "sponsors"=>
                    ["sponsor1","sponsor2","sponsor3"],
                "prix"=>"83€",
                "achetable"=> "non",
                "nbpieces"=>"2",
                "photos"=>
                    ["photo1","photo2","photo3"],
                "nbvues"=>"13",
                "commentaires"=>
                    ["com1","com2","com3"],
                "note"=>"18/20",
                "options"=>
                    ["clim"=>"non",
                        "chauffage"=>"oui",
                        "piscine"=>"non"
                    ]
            ]
        ],
        "lisbonne"=>
            ["details"=>
                [ "titres"=>"Beau chalet cosy à Lisbonne",
                    "description"=> "Proche de la gare",
                    "sponsors"=>
                        ["sponsor1","sponsor2","sponsor3"],
                    "prix"=>"46€",
                    "achetable"=> "non",
                    "nbpieces"=>"4",
                    "photos"=>
                        ["photo1","photo2","photo3"],
                    "nbvues"=>"19",
                    "commentaires"=>
                        ["com1","com2","com3"],
                    "note"=>"09/20",
                    "options"=>
                        ["clim"=>"non",
                            "chauffage"=>"oui",
                            "piscine"=> "non"
                        ]
                ]
            ],
        "madrid"=>
            ["details"=>
                [ "titres"=>"Petit appartement d'hiver à Madrid",
                    "description"=> "Tout confort",
                    "sponsors"=>
                        ["sponsor1","sponsor2","sponsor3"],
                    "prix"=>"32€",
                    "achetable"=> "non",
                    "nbpieces"=>"2",
                    "photos"=>
                        ["photo1","photo2","photo3"],
                    "nbvues"=>"23",
                    "commentaires"=>
                        ["com1","com2","com3"],
                    "note"=>"17/20",
                    "options"=>
                        ["clim"=>"oui",
                            "chauffage"=>"oui",
                            "piscine"=> "non"
                        ]
                ]
            ],
        "berlin"=>
            ["details"=>
                [ "titres"=>"Appartement typique Berlin Est",
                    "description"=> "Proche de Brandeburger tor",
                    "sponsors"=>
                        ["sponsor1","sponsor2","sponsor3"],
                    "prix"=>"70€",
                    "achetable"=> "non",
                    "nbpieces"=>"5",
                    "photos"=>
                        ["photo1","photo2","photo3"],
                    "nbvues"=>"35",
                    "commentaires"=>
                        ["com1","com2","com3"],
                    "note"=>"18/20",
                    "options"=>
                        ["clim"=>"non",
                            "chauffage"=>"oui",
                            "piscine"=> "non"
                        ]
                ]
            ]
    ],
    "maison"=>
        ["paris"=>
            ["details"=>
                [ "titres"=>"Maisonette Parisienne",
                    "description"=> "Proche de toutes commoditées",
                    "sponsors"=>
                        ["sponsor1","sponsor2","sponsor3"],
                    "prix"=>"122€",
                    "achetable"=> "non",
                    "nbpieces"=>"4",
                    "photos"=>
                        ["photo1","photo2","photo3"],
                    "nbvues"=>"25",
                    "commentaires"=>
                        ["com1","com2","com3"],
                    "note"=>"12/20",
                    "options"=>
                        ["clim"=>"oui",
                            "chauffage"=>"oui",
                            "piscine"=> "non"
                        ]
                ]
            ],
            "lisbonne"=>
                ["details"=>
                    [ "titres"=>"Maison portuguaise",
                        "description"=> "Petit maison équipée proche de tout",
                        "sponsors"=>
                            ["sponsor1","sponsor2","sponsor3"],
                        "prix"=>"43€",
                        "achetable"=> "oui",
                        "nbpieces"=>"2",
                        "photos"=>
                            ["photo1","photo2","photo3"],
                        "nbvues"=>"27",
                        "commentaires"=>
                            ["com1","com2","com3"],
                        "note"=>"13/20",
                        "options"=>
                            ["clim"=>"non",
                                "chauffage"=>"oui",
                                "piscine"=> "oui"
                            ]
                    ]
                ],
            "madrid"=>
                ["details"=>
                    [ "titres"=>"Maison madrilenne",
                        "description"=> "Maison d'hivers",
                        "sponsors"=>
                            ["sponsor1","sponsor2","sponsor3"],
                        "prix"=>"62€",
                        "achetable"=> "oui",
                        "nbpieces"=>"4",
                        "photos"=>
                            ["photo1","photo2","photo3"],
                        "nbvues"=>"16",
                        "commentaires"=>
                            ["com1","com2","com3"],
                        "note"=>"10/20",
                        "options"=>
                            ["clim"=>"non",
                                "chauffage"=>"oui",
                                "piscine"=> "non"
                            ]
                    ]
                ],
            "berlin"=>
                ["details"=>
                    [ "titres"=>"Maison de ville ",
                        "description"=> "Dans le Berlin historique",
                        "sponsors"=>
                            ["sponsor1","sponsor2","sponsor3"],
                        "prix"=>"78€",
                        "achetable"=> "non",
                        "nbpieces"=>"2",
                        "photos"=>
                            ["photo1","photo2","photo3"],
                        "nbvues"=>"32",
                        "commentaires"=>
                            ["com1","com2","com3"],
                        "note"=>"17/20",
                        "options"=>
                            ["clim"=>"oui",
                                "chauffage"=>"oui",
                                "piscine"=> "non"
                            ]
                    ]
                ]
        ]


]
);




echo "<h1>Trip advisor</h1>";

echo"<h3>afficher le tableau </h3>";

foreach($biensimmobiliers as $bien => $saison) {

    echo "<br> <h1> {$saison}: </h1> <br> ";
foreach ($saison as $type => $destination) {
    echo "<h2>{$type},</h2> <br>";

    foreach ($destination as $destination => $details) {
        echo "<h4>{$destination},</h4> <br>";

        foreach ($details as $clef => $valeur) {
            var_dump($details);
            echo "<h7> {$clef}: {$valeur}</h7>  <br> ";

        }

    }

    }

}




?>



</body>
</html>
