<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Fresh Restaurants</title>
        <!-- En production, compressez et concatenez les CSS ! -->
        <link rel="stylesheet" href="css/fonts.css" />
        <link rel="stylesheet" href="css/reset.css" />
        <link rel="stylesheet" href="css/base.css" />
        <link rel="stylesheet" href="css/layout.css" />
        <link rel="stylesheet" href="css/modules.css" />
        <link rel="stylesheet" href="css/states.css" />
        <link rel="stylesheet" href="css/theme.css" />

        <script src="js/vendor/modernizr.custom.20337.js"></script>
    </head>
    <body>

        <!-- container -->
        <div class="container container-bg">

            <header class="site-header">
                <section class="site-presentation">
                    <h1>Fresh Restaurant</h1>
                    <h2>Welcome <strong class="emphasis">to our Restaurant</strong></h2>
                    <p>
                        <strong class="highlight">Lorem ipsum dolor sit amet</strong>, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <a href="#">read more</a>
                    </p>
                </section>
                <!-- site-primary-nav -->
                <!-- Il est logique que le titre du site apparaisse avant le 
                     menu dans le html, meme si ce n'est pas le cas visuellement 
                     dans l'intégration -->
                <nav class="site-primary-nav">
                    <ul class="primary-nav">
                        <li><a href="index.php">Home page</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Location</a></li>
                        <li><a href="menu.php">Menus</a></li>
                        <li><a href="form.php">Contacts</a></li>
                    </ul>
                </nav>

            </header>

            <div class="form">
       
                <h1>Commande</h1>
                
                <h2>Informations personnelles</h2>

                <form>

                    <div>
                        
                    </div>

                    <form method="post" action="traitement.php">
                       <p class="champs">

                            <input type="radio" name="genre" value="homme" id="homme"/><label for"homme">Homme</label>
                            <input type="radio" name="genre" value="femme" id="femme"/><label for"femme">Femme</label><br />
                            <label for="nom">Nom : </label><input type="text" name="nom" id="nom" /><br />
                            <label for="prenom">Prénom :</label><input type="text" name="prenom" id="prenom" /><br />
                            <label for="email">Email :</label><input type="email" value="root" name="email" id="email" /><br />
                            <label for="mdp">Mot de Passe :</label><input type="text" placeholder="******" name="mdp" id="mdp" /><br />
                            <label for="site">Site Internet :</label><input type="url" name="site" id="site" /><br />
                            <label for="birth">Date de naissance :</label><input type="date" name="birth" id="birth" /><br />
                            <label for="cid">Carte d'identité :</label><input type="file" value="Parcourir" />
                        </p>
                        
                        
                        <h2>Votre commande</h2>

                        <p class="livraison">                        
                    
                            <label for="livraison">Mode de livraison</label>
                                <select name="livraison" id="livraison">                    
                                       <option value="domicile">A domicile</option>
                                       <option value="express">Livraison Express</option>
                                </select>
                            <br />
                            <label for="assurance">Assurances :</label>
                                <input type="checkbox" name="casse" id="casse"/><label for"casse">Casse</label>
                                <input type="checkbox" name="vol" id="vol"/><label for"vol">Vol</label>
                                <input type="checkbox" name="nucleaire" id="nucleaire"/><label for"nucleaire">Accident nucléaire</label>
                                <br />
                            <label for="commentaire">Commentaire :</label><textarea name="commentaire" placeholder="Pas plus de 300 caractères" id="commentaire" rows="5" cols="20"></textarea>
                            <br />
                            <label for="code">Code Invitation :</label><input type="code" name="code" id="code" />
                            <br />      
                        </p>

                    <input type="submit" value="Envoyer" />



                </form>               

            </div>
        <!-- end container -->
        </div>

        <footer class="site-primary-footer footer">
            <ul class="primary-footer container">
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Location</a></li>
                <li><a href="#">Menu</a></li>
                <li><a href="#">Partners</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </footer>

        
        <footer class="site-secondary-footer footer">
            <p class="secondary-footer container"><small>Copyright © Your Company Name</small></p>
        </footer>

    </body>
</html>
