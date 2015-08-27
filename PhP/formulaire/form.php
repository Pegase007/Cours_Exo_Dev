<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <meta viewport content="width=device-width">
    <title>Form</title>
    <link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://bootswatch.com/slate/bootstrap.min.css">
    <link rel="stylesheet" href="contact.css" />


</head>
<body>
<div class="container">
    <form action="data.php" method="post">
        <h1>Formulaire de produit</h1>

        <div class="form-group">

            <label for="comnb" class="control-label">Numero de commande</label>
            <input type="text" name="comnb" id="comnb" placeholder="xx-aaaa-axxx" class="form-control" >

        </div>

        <div class="row">

            <div class="form-group col-md-6">
                <label for="title " class="control-label">Titre</label>
                <input type="text" name="title" id="title" placeholder="" class="form-control">
            </div>

            <div class="form-group col-md-6 ">
                <label for="ide"  class="control-label">Id</label>
                <input type="text" name="ide" id="ide" placeholder="" class="form-control">
            </div>

        </div>

        <div class="form-group">

            <div class="row">
                <label class="control-label col-md-2" >Description</label>
                <p id="counter">
                    <span>0</span>
                    characters

                </p>
                <button class="btn btn-default btn-xs hidden" id="modify" type="button">Modify</button>

            </div>
            <textarea  id="description" name="description" class="form-control" rows="5"></textarea>

        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <label for="quantity" class="control-label">Quantité</label>
                <input type="text" name="quantity" id="quantity" placeholder="" class="form-control" >
            </div>
            <div class="form-group col-md-6">
                <label for="color" class="control-label">Couleur</label>
                <input type="text" name="color" id="color" placeholder="" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <label for="ht" class="control-label">Prix HT</label>
                <input type="text" name="ht" id="ht" placeholder="En Euros"  class="form-control">
            </div>

            <div class="form-group col-md-6">
                <label for="tva" class="control-label">TVA</label>
                <input type="text" name="tva" id="tva" placeholder="%" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="reduc" class="control-label">Reduction</label>
                <input type="text" name="reduc" id="reduc" placeholder="€" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label for="ttc" class="control-label">Prix TTC <span id="result"></span></label>
                <input type="text" name="ttc" id="ttc" placeholder="" class="form-control">
            </div>
        </div>
        <div class="form-group ">
            <label for="tel" class="control-label">Telephone</label>
            <input type="text" name="tel" id="tel" placeholder="" class="form-control">
        </div>
        <div class="row">
            <div class="form-group col-md-10">
                <label for="cb" class="control-label" >Carte bancaire</label>

                <input type="text" name="cb" id="cb" placeholder="xxxx-xxxx-xxxx-xxxx" class="form-control">
            </div>
            <div class="form-group col-md-2">

                <label for="carte" class="control-label">Carte</label>
                <div class="logo" id="carte"> </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="crypto" class="control-label">Cryptogramme</label>
                <input type="text" name="crypto" id="crypto" placeholder="xxx" class="form-control">

            </div>

            <div class="form-group col-md-6">
                <label for="date" class="control-label">Date</label>
                <input type="text" name="date" id="date" placeholder="mm/yy" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <label for="name" class="control-label">Nom</label>
                <input type="text" name="name" id="name" placeholder="" class="form-control">
            </div>

            <div class="form-group col-md-6">
                <label for="email" class="control-label">Email</label>
                <input type="email" name="email" id="email" placeholder="" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="capcha" class="control-label">Capcha  (<span id="randoma">0</span>x2)+(<span id="randomb">0</span>x3)= </label>
            <input type="text" name="capcha" id="capcha" placeholder="the answer is?" class="form-control">
        </div>

        <div class="row">

            <button type="submit" class="btn-default btn-lg btn-block" id="enregistrer"> Enregistrer </button>

        </div>
        <br>
        <br>

    </form>
    <!-- <input type="button" value="Enregistrer"> -->



    </form>

    <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="jqueryexo.js"></script>

</body>
</html>