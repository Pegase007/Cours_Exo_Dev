<?php

namespace App;

interface Title{


    public function getTitle();

    public function setTitle($title);

    public function getParent(Visible $elt);





}



?>