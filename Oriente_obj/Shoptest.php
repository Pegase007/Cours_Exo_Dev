
<!DOCTYPE html>
<html lang='fr'>
<head>
    <meta charset='UTF-8'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>

</head>
<body>
<div class="container">
    <?php

    require __DIR__ . '/vendor/autoload.php';

    /**
     *  Set a user
     */
    $user1= new Shop\User\Client();
    $user1-> setUserFirstName('Bob');
    $user1->setUserLastName("L'eponge");
    $user1->setUserAdress("6 rue du lac");
    $user1->setUserEmail('bob@dansleau.com');


    /**
     * Set aPproduct
     */
    $product1=new Shop\Product();
    $product1->setProductName('Montre');
    $product1->setProductReference('123456');
    $product1->setBasePrice(250);
    $product1->setFinalPrice(250);
    $product1->setProductQuantity(10);
    $product1->setProductState(1);



    /**
     * Set a Category in which is set a product
     */

    $category=new Shop\Category();
    $category->setCategoryName('Bijoux');
    $category->addProduct($product1);



//    $category->delProduct($product1);



    dump($category);

    /**
     * Set order
     * Add product to the order
     * Remove product from order
     */
    $add=new Shop\Order();
    $add->setOrderClient($user1);
    $add->addProduct($product1);
    $add->addProduct($product1);
    $add->setBasePrice();
    $add->setFinalPrice();
    $add->setOrderProductQuantity();
    $add->setOrderState(1);

//    $add->delProduct($product1);
    dump($product1);
    dump($add);

    /**
     * Promotion
     */

    $promotion1=new Shop\Commercial\Promotions();
    $promotion1-> setPromoCode(8);
    $promotion1->getPromoCode();
    $promotion1->ObjectOffer($product1,10 , "%");
    dump( $promotion1->ObjectOffer($product1,10 , "%"));

    dump($promotion1);



    ?>
</div>
</body>
</html>

