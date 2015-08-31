<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 28/08/15
 * Time: 16:42
 */

namespace App\FaceDeBook;


class Images
{

    protected $path;

    public function __construct($path){

        $this->path=$path;
    }

    /**
     * @return mixed
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param mixed $path
     */
    public function setPath($path)
    {
        $this->path = $path;
    }



}