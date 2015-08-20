<?php
namespace App;

class User{

protected $nom;
protected $prenom;
protected $email;
protected $age;
protected $ville;
    // attribut de classe peut être initialiser lors de sa déclaration
protected $activation=true;
protected $sinscrire;

protected $panier = array();




    /**
     * Constante Pays
     */
    const PAYS = "France";


    /**
     * Constante Formation
     */
    const FORMATION = "3W Academy";

    /**
     * Constante langue
     */

    const LANGUE="FR";

    /**
     * Pays
     * @return string
     */
    static public function getPays(){

        return "Tous les utilisteurs viennent de ". self::PAYS;
    }


    /**
     * Etudes
     * @return string
     */
    static public function getFormation(){

        return "Tous les utilisteurs proviennent de la ". self::FORMATION;
    }









    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * @param mixed $ville
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    /**
     * @return mixed
     */

//permet de generer le nom et l'email.
    public function sinscrire()
    {
        return "L'utilisateur " . $this->nom . "s'est inscrit avec l'adresse " . $this->email;

    }
// creer une fonction qui va generer l'email, l'age et la ville de la personne inscrite à la newsletter
    public function newsletter()
    {
        return "L'utilisateur avec l'adresse " . $this->email ." a " . $this->age." ans et habite à ". $this->ville;

    }
// augmenter l'age
    public function augmenterAge(){

        $this ->age=$this->age+1;

    }


// ecrire à un utilisateur

    public function ecrire(User $user){

       return "<h3>".$this->prenom. " ".$this->nom. " a écris à ".$user->prenom . " " . $user-> nom."</h3>";
	}



// envoyer un commentaire à un utilisateur
    public function commenter(User $user, $comment="blalbalba"){

        return "<h2>".$this->prenom. " ".$this->nom. " a écris ".$comment. " a " .$user->prenom . " " . $user-> nom."</h2>";
    }


    //L'utilisateur est majeur ou pas

    public function majeur(){

        if ($this->age>=18) {

             return "<h3>" . $this->nom . " a " . $this->age ." ans il est majeur</h3>";
}
        else{

            return "<h3>" . $this->nom . " a " . $this->age ." ans il est mineur</h3>";
        }


    }


    public function plusAge(User $user){

        if ($this->age>=$user->age) {

            return "<h3>" . $this->nom . " est plus agé que " . $user->nom ."</h3>";
        }
        else{

            return "<h3>" . $user->nom . " est plus agé que " . $this->nom ."</h3>";
        }


    }



//    public function getPanier(){
//
//        return $this->panier;
//    }
//
//    public function setPanier($panier){
//
//        return $this->panier=$panier;
//    }
//
//
//    public function ajoutPanier(Product $product)
//    {
//        $this->nom. "ajoutes". array_push($this->panier, $product)."a son panier";
//    }




}

