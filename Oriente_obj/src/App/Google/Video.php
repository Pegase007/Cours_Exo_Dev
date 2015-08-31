<?php

namespace App\Google;


class Video
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