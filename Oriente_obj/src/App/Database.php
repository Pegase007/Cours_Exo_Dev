<?php

namespace App;

use Lib\Beautiful;
use Lib\Bootstrap;

class Database
{
    /* http://www.php-fig.org/psr/psr-0/fr/  */
    /* https://github.com/php-fig/fig-standards/blob/master/accepted/fr/PSR-0.md  */
    protected $conection;
    protected $beautiful;

    const DBNAME = 'cinecanicule';
    const LOGIN = 'root';
    const MDP = 'troiswa';
    const CHARSET = 'utf8';
    const HOST = 'localhost';

    /** CONSTRUCT BASE */
    public function __construct()
    {
        $this->conection = $this->connect(); // appel une methode dans une autre connect()

        $this->beautiful = new Beautiful();
        $this->bootstrap = new Bootstrap();
    }

    /** GETTERS SETTERS */

    /**
     * @return mixed
     */
    public function getConection()
    {
        return $this->conection;
    }

    /**
     * @param mixed $conection
     */
    public function setConection($conection)
    {
        $this->conection = $conection;
    }

    /** METHODS */

    /**
     * @return \PDO
     */
    public function connect()
    {
        return new \PDO('mysql:host='.self::HOST.';dbname='.self::DBNAME.';charset='.self::CHARSET, self::LOGIN, self::MDP);
//retourne un objet PDO
    }

    //Get title from movies
    public function getMovies()
    {
        $query = $this->connect()->query('SELECT title,trailer FROM movies');

        return  $query->fetchAll();
    }

//get first name and lastname from directors
    public function getDirectors()
    {
        $query = $this->connect()->query('SELECT firstname,lastname FROM directors');

        return  $query->fetchAll();
    }

//get film from given id
    public function getFilm($id)
    {
        $query = $this->connect()->query('SELECT title FROM movies WHERE id='.$id);

        $film = $query->fetch();

        return $film['title'];
    }
//get all categories
    public function getCat()
    {
        $query = $this->connect()->query('SELECT title FROM categories');

        return  $query->fetchAll();
    }
//get all actors
    public function getActors()
    {
        $query = $this->connect()->query('SELECT firstname,lastname FROM actors');

        return $query->fetchAll();

//        foreach ($actors as $elt){
//
//            return "<br>"."Actor FN ".$elt['firstname'].", Actors LN ".$elt['lastname'];
//
//        }
    }

//get directors from name or lastname
    public function getRealisateur($fn, $ln)
    {
        $query = $this->connect()->query('SELECT firstname,lastname,dob
                                        FROM directors');
        $name = $query->fetch();

        if ($fn == $name['firstname']) {
            $query = $this->connect()->query('SELECT firstname,lastname,dob
                                        FROM directors
                                        WHERE firstname="'.$fn.'"');
            $name = $query->fetch();

            return $name['firstname'].', '.$name['lastname'];
        } elseif ($ln == $name['lastname']) {
            $query = $this->connect()->query('SELECT firstname,lastname,dob
                                        FROM directors
                                        WHERE lastname="'.$ln.'"');
            $name = $query->fetch();

            return $name['firstname'].', '.$name['lastname'];
        } else {
            echo 'NOT FOUND';
        }
//        return "<br>"."First Name ".$real['firstname'].", Last Name ".$real['lastname'].", Date of Birth ".$real['dob'];
    }

    public function getMovCat($cat)
    {
        //$requete='SELECT movies.title
//                                        FROM  `movies`
//                                        INNER JOIN categories ON categories.id = movies.categories_id
//                                        WHERE categories.title=' .$cat;
//                                        var_dump($requete);

        $query = $this->connect()->query('SELECT movies.title
                                        FROM  `movies`
                                        INNER JOIN categories ON categories.id = movies.categories_id
                                        WHERE categories.title="'.$cat.'"');

        return $query->fetchAll();
    }

    public function getMovTrailer()
    {
        $tab = [];
        foreach ($this->getMovies() as $trailer) {

            //    var_dump($this->beautiful);
            $tableau = $this->beautiful->embed($trailer['trailer']);

            array_push($tab, $tableau);
        }
//    var_dump($tab);
        return $tab;
    }

    public function getMovBefore($date)
    {
        $query = $this->connect()->query('SELECT date_release
                                            FROM  `movies`
                                            WHERE date_release <=  "'.$date.'"
                                            ORDER BY date_release');

        $movBfor = $query->fetchAll();

        $tab = [];

        foreach ($movBfor as $release) {
            $tableau = $this->bootstrap->labels($release['date_release']);

            array_push($tab, $tableau);
        }

        return $tab;
    }
}
