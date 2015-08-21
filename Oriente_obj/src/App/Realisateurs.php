<?php


namespace App;


class Realisateurs extends AbstractCrew implements CrudInterface
{

    protected $testarray=['firstname'=>'Bob','lastname'=> 'Eponge', 'dob'=> '2015-12-10', 'biography'=> 'chahcahcahca',
        'image'=>'http://dfsfds.com'];


    protected $testarray2=['firstname'=>'Banana','lastname'=> 'Bizzzzz', 'dob'=> '2015-10-10', 'biography'=> 'chahcahcahca',
        'image'=>'http://dfsfds.com'];


    /**
     * IMPLEMENTED METHODS FROM CrudInterface
     */

    /**
     * USE CREATE REPLACES THE IMPLEMENTED METHOD FROM CrudInterface
     * public function getCreate(Array $array, $tab);
     */
    use \App\Create;

    /**
     * USE RETRIEVE REPLACES THE IMPLEMENTED METHOD FROM crudInterface
     * public function getRetrieve($tab,$where,$val)
     */

    use\App\Retrieve;

    /**
     * USE UPDATE REPLACES THE IMPLEMENTED METHOD FROM CrudInterface
     * public function getUpdate(Array $array,$tab,$id);
     */

    use\App\Update;

    /**
     * USE DELETE REPLACES THE IMPLEMENTED METHOD FROM CrudInteface
     * public function getDelete($tab, $id );
     */

    use\App\Delete;

    /**
     * Create a new line in DataBase from a chosen array on a chosen table
     * @param array $array
     * @param $tab
     */


    /**
     * @return array
     */
    public function getTestarray()
    {
        return $this->testarray;
    }

    /**
     * @param array $testarray
     */
    public function setTestarray($testarray)
    {
        $this->testarray = $testarray;
    }

    /**
     * @return array
     */
    public function getTestarray2()
    {
        return $this->testarray2;
    }

    /**
     * @param array $testarray2
     */
    public function setTestarray2($testarray2)
    {
        $this->testarray2 = $testarray2;
    }



}