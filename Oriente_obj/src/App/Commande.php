<?php

namespace App;

class Commande
{
    protected $id;
    protected $ref;
    protected $prixttc;
    protected $prixht;
    protected $produits = array();
    protected $attrUser;
    protected $etat;
    protected $dateLivraison;
    protected $nbprod;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * @param mixed $ref
     */
    public function setRef($ref)
    {
        $this->ref = $ref;
    }

    /**
     * @return mixed
     */
    public function getPrixttc()
    {
        return $this->prixttc;
    }

    /**
     * @param mixed $prixttc
     */
    public function setPrixttc($prixttc)
    {
        $this->prixttc = $prixttc;
    }

    /**
     * @return mixed
     */
    public function getPrixht()
    {
        return $this->prixht;
    }

    /**
     * @param mixed $prixht
     */
    public function setPrixht($prixht)
    {
        $this->prixht = $prixht;
    }

    /**
     * @return array
     */
    public function getProduits()
    {
        return $this->produits;
    }

    /**
     * @param array $produits
     */
    public function setProduits($produits)
    {
        $this->produits = $produits;
    }

    /**
     * @return mixed
     */
    public function getAttrUser()
    {
        return $this->attrUser;
    }

    /**
     * @param mixed $attrUser
     */
    public function setAttrUser($attrUser)
    {
        $this->attrUser = $attrUser;
    }

//    /**
//     * @return mixed
//     */
//    public function getUser()
//    {
//        return $this->user;
//    }
//
//
//    /**
//     * @param mixed $user
//     */
//    public function setUser($user)
//    {
//        $this->user = $user;
//    }
    /**
     * Methode qui est apellé un constructeur, methode qui controle la construction d'un objet
     * Qui est appelé lors de la création d'un objet: new Command(2).
     */
    public function __construct($etat)
    {
        $this->prixttc = 0;
        // new \DateTime permet de férer les dates en php, et l'antislash, c'est parce que la classe
        // DateTime n'as pas de namespace, c'est une cmasse native en PHP
        $date = new \DateTime('+2 days');
        $this->etat = $etat;
        $this->nbprod = 0;
        $this->produits = array();
//        $this-> prix = $this->getPrixTTC(); Peu appeler une méthode

        $this->dateLivraison = $date->format('d/m/Y');
    }

//associer user à commande
    public function lienUser(Users $user)
    {
        $this->attrUser = $user;
    }
//ajouter un produit
    public function ajoutProduit(Product $product)
    {
        $this->produits[$product->getTitle()] = $product;
    }
//retirer un produit
    public function removeProduit(Product $product)
    {
        unset($this->produits[$product->getTitle()]);
    }

//récupere les prix hors taxe
    public function htprice()
    {
        $somme = 0;

        //on parcours chaque produit de la commande
        foreach ($this->produits as $product) {
            $somme = $somme + $product->getPrix();
        }
        // initialiser l'attribut prixht à la somme
        $this->setPrixht($somme);

        return $this->prixht;
    }

    /**
     * @constante taxt
     */
    const TVA = '20%';

// additionne les prix ht

    public function ttcprice($taxe)
    {
        $calculate = 0;
        $calculate = $this->getPrixht() * $taxe / 100;

        return $this->setPrixttc($calculate);
    }
    public function countProduit()
    {
        $count = 0;
        foreach ($this->produits as $product) {
            $count = $count + 1;

            return $count;
        }
    }

    public function preProduit()
    {
        if ($this->countProduit() < 1) {
            echo 'commande vide';
        } else {
            echo 'la commande contiens '.$this->countProduit().' produit(s)';
        }
    }
}
