<?php

namespace App;




interface Support{

    public function ecrire();
    
    
    public function supprimer($id);
    
    
}

class Articles implements Support{

    public function ecrire(){
    // Logique decrire en BDD un article dans ma table article
    
    }
    
    public function supprimer($id){
    
    
    }



}

class Pages implements Support{


   public function ecrire(){
        // Logique decrire en BDD une page dans ma table pages

    }
    
    public function supprimer($id){
    
    
    }

}


class User{


    public function rediger(Support $support){
        $support->ecrire(); // ecrire en BDD le contenu (Articles ou Pages)
    
    }

}

$user = new User();
$page =  new Pages();
$article =  new Articles();

$user->rediger($page);
$user->rediger($article);



//////////////////////////

Conserver la methode parent


//parent

namespace App;



class Support{

    protected $title;
    protected $visible;


   public function __construct($title){
        $this->title = $title;
        $this->visible = 1;
    }


}


//enfant


class Articles extends Support{


    protected $dateVisible;
    
    
    public function __construct($title){
    
        parent::__construct($title); //executer le constructeur parent
        
        $this->dateVisible = new \DateTime();
    
    }
  



}

?>