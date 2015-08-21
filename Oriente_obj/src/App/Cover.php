<?php

namespace App;

trait Cover
{

    protected $cover;

    public function setCover($cover)
    {
        $this->cover = $cover;
    }

    public function getCover()
    {
        return $this->cover;
    }

}

?>