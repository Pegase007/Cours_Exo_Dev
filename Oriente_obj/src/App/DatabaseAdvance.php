<?php

namespace App;

use Lib\Bootstrap;
use Lib\Beautiful;

class DatabaseAdvance extends Database
{
    protected $limit;
    protected $tri;
    protected $table=['email'=>"blablalba","avatar"=>"test"];

    public function __construct()
    {
        $this->limit = 5;
        $this->tri = 'title';
        $this->beautiful = new Beautiful();
        $this->bootstrap = new Bootstrap();
    }

    /**
     * @return array
     */
    public function getTable()
    {
        return $this->table;
    }

    /**
     * @param array $table
     */
    public function setTable($table)
    {
        $this->table = $table;
    }
    /** GETTER SETTERS */

    /**
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @param int $limit
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
    }

    /**
     * @return string
     */
    public function getTri()
    {
        return $this->tri;
    }
    /**
     * @param string $tri
     */
    public function setTri($tri)
    {
        $this->tri = $tri;
    }

    /**
     * GET MOVIE TITLES.
     *
     * @return array
     */
    public function getMovies()
    {
        $query = $this->connect()->query('SELECT '.$this->tri.',trailer FROM movies LIMIT '.$this->limit);
        return  $query->fetchAll();
    }

    /**
     * FIRST AND LAST NAMES FROM DIRECTORS DB.
     *
     * @return array
     */
    public function getDirectors()
    {
        $query = $this->connect()->query('SELECT firstname,lastname
                                        FROM directors LIMIT '.$this->limit);
        return  $query->fetchAll();
    }

    /**
     * GET FILM FORM CHOSE ID.
     *
     * @param $id
     *
     * @return string
     */
    public function getFilm($id)
    {
        $query = $this->connect()->query('SELECT '.$this->tri.'
                                        FROM movies WHERE id='.$id.'
                                        LIMIT '.$this->limit);

        $film = $query->fetch();

        return $film['title'];
    }

    /**
     *ALL TITLES FROM CATEGORIES DB.
     *
     * @return array
     */
    public function getCat()
    {
        $query = $this->connect()->query('SELECT '.$this->tri.'
                                        FROM categories
                                        LIMIT '.$this->limit);

        $tab = [];
        $get = $query->fetchAll();

        foreach ($get as $cat) {
            $tableau = $cat['title'];
            array_push($tab, $tableau);
        }

        return $tab;
    }

    /**
     * FIRST AND LAST NAME FROM ACTORS.
     *
     * @return array
     */
    public function getActors()
    {
        $query = $this->connect()->query('SELECT firstname,lastname
                                        FROM actors
                                        LIMIT '.$this->limit);

        $tab = [];
        $get = $query->fetchAll();

        foreach ($get as $act) {
            $tableau = $act['firstname'].' '.$act['lastname'];
            array_push($tab, $tableau);
        }

        return $tab;

//        foreach ($actors as $elt){
//
//            return "<br>"."Actor FN ".$elt['firstname'].", Actors LN ".$elt['lastname'];
//
//        }
    }

    /**
     * FROM FRIST OR LAST NAME GET DIRECTORS INFORMATIONS.
     *
     * @param $fn
     * @param $ln
     *
     * @return string
     */
    public function getRealisateur($fn, $ln)
    {
        $query = $this->connect()->query('SELECT firstname,lastname,dob
                                           FROM directors
                                           LIMIT '.$this->limit);
        $name = $query->fetch();

        if ($fn == $name['firstname']) {
            $query = $this->connect()->query('SELECT firstname,lastname,dob
                                        FROM directors
                                        WHERE firstname="'.$fn.'"
                                        LIMIT '.$this->limit);
            $name = $query->fetch();

            return $name['firstname'].', '.$name['lastname'];
        } elseif ($ln == $name['lastname']) {
            $query = $this->connect()->query('SELECT firstname,lastname,dob
                                        FROM directors
                                        WHERE lastname="'.$ln.'"
                                        LIMIT '.$this->limit);
            $name = $query->fetch();

            return $name['firstname'].', '.$name['lastname'];
        } else {
            echo 'NOT FOUND';
        }
//        return "<br>"."First Name ".$real['firstname'].", Last Name ".$real['lastname'].", Date of Birth ".$real['dob'];
    }

    /**
     * ALL MOVIE TITLES FROM A GIVEN CATEGORY.
     *
     * @param $cat
     *
     * @return array
     */
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
                                        WHERE categories.title="'.$cat.'"
                                        LIMIT '.$this->limit);

        $tab = [];
        $get = $query->fetchAll();

        foreach ($get as $cat) {
            $tableau = $cat['title'];
            array_push($tab, $tableau);
        }

        return $tab;
    }

    /**
     * GET TRAILERS FROM ALL THE MOVIES AND EMBED IT USING CLASS BEAUTIFUL.
     *
     * @return array
     */
//    public function getMovTrailer( ){
//
//        $tab=[];
//        foreach ( $this->getMovies() as $trailer){
//
//            //    var_dump($this->beautiful);
//            $tableau = $this->beautiful->embed($trailer['trailer']) ;
//
//            array_push($tab,$tableau);
//
//        }
////    var_dump($tab);
//        return $tab;
//    }

    /**
     * GET ALL THE MOVIES RELEASED BEFORE A CHOSEN DATE
     * MAKE THEM INTO A LABEL WITH THE CLASS BOOTSTRAP.
     *
     * @param $date
     *
     * @return array
     */
    public function getMovBefore($date)
    {
        $query = $this->connect()->query('SELECT date_release
                                            FROM  `movies`
                                            WHERE date_release <=  "'.$date.'"
                                            ORDER BY date_release
                                            LIMIT '.$this->limit);

        $movBfor = $query->fetchAll();

        $tab = [];

        foreach ($movBfor as $release) {
            $tableau = $this->bootstrap->labels($release['date_release']);

            array_push($tab, $tableau);
        }

        return $tab;
    }

    /**
     * INSERT DATA INTO DATABASE
     * @param array $array
     * @param $tab
     */
    public function inserer(Array $array, $tab)
    {
        $email = $array['email'];
        $avatar = $array['avatar'];

        $stmt = $this->connect()->prepare('INSERT INTO '.$tab.' (email,avatar) VALUES (?, ?)');
        $stmt->bindParam(1, $email);
        $stmt->bindParam(2, $avatar);

        $stmt->execute();
    }

    /**
     *MODIFY DATA INTO DATABASE
     * @param $tab
     * @param $id
     * @param $column
     * @param $value
     */
    public function modifier($tab, $id, $column, $value)
    {
        $stmt = $this->connect()->prepare('UPDATE '.$tab.' SET  '.$column.'= :val WHERE id='.$id);
        $stmt->bindParam(':val', $value);
        $stmt->execute();
    }




    /**
     *DELETE DATA FROM DATABASE
     * IT CHECKS FOR THE ID VALUE? THE USER VALUE AND THEN THE EMAIL VALUE TO DELETE THE LINE
     * @param $tab
     * @param $id
     * @param $column
     * @param $value
     */
    public function delete($tab, $id ,$username,$email)
    {

        $user=$this->getIdFrom($tab,'username',$username);
        $mail=$this->getIdFrom($tab,'email',$email);




        if(!empty($id)){
            $stmt = $this->connect()->prepare('DELETE FROM '.$tab.' WHERE id='.$id);

        }

        elseif(!empty ($user)){
           $stmt = $this->connect()->prepare('DELETE FROM '.$tab.' WHERE id='.$user);
        }

        else{
                $stmt = $this->connect()->prepare('DELETE FROM '.$tab.' WHERE id='.$mail);

        }
        $stmt->execute();

    }

    /**
     * GET AN ID FROM A CHOSEN TABLE WITH A CHOSEN COLUMN AND ITS CONTENT
     * RETURN THE ID VALUE
     * @param $tab
     * @param $type
     * @param $val
     * @return mixed
     */

    public function getIdFrom($tab,$type,$val){

        $query1= $this->connect()->query('SELECT id FROM '.$tab.' WHERE '.$type.'="'.$val.'"') ;

        $val= $query1->fetch();

        return $val['id'];

    }









}

