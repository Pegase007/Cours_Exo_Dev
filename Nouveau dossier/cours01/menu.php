<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Fresh Restaurant</title>
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
                    <h1>Nos Menus</h1>
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

            <p class="menu">

                <table>
                    <caption>Voici une liste de propriété CSS intéressantes en typographie : </caption>
    <!-- THEAD -->                
                    <thead>
                        <tr>
                            <td colspan="2">La propriété</td> 
                            <td><strong class="emphasis">Utilisation</strong></td>
                        </tr>
                    </thead>

    <!-- TFOOT -->
                    <tfoot>
                        <tr>
                            <td colspan="2"></td>
                            <td>Source : mozilla developer network</td>
                        </tr>
                    </tfoot>

    <!--TBODY -->                
                    <tbody>
    <!-- FONT PART -->                    
                        <tr>
                            <td rowspan="5">font-</td>
                            <td>size</td>
                            <td>Lorem ipsum dolor sit amet. </td>
                        </tr>

                        <tr>                           
                            <td>style</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </td>
                        </tr>

                        <tr>    
                            <td>variant</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </td>
                        </tr>

                        <tr>                            
                            <td>weight</td>
                            <td>Lorem ipsum dolor sit amet.</td>
                        </tr>

                        <tr>                          
                            <td>family</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
                        </tr>

    <!-- TEXT PART -->         

                        <tr>
                            <td rowspan="5">text-</td>
                            <td>align</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
                        </tr>

                        <tr>                           
                            <td>transform</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
                        </tr>

                        <tr>                            
                            <td>decoration</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
                        </tr>

                        <tr>                            
                            <td>shadow</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
                        </tr>

                        <tr>                            
                            <td>indent</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
                        </tr>

    <!-- COLOR PART -->              
                        <tr>
                            <td colspan="2">color</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
                        </tr>

                    </tbody>    


                </table>


            </p>

            

        <!-- end container -->
        </div>


<!--
    ############## FOOTERS -->

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
