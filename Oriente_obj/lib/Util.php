<?php

class Util{
    public static function camelize($id)
    {
        return strtr(ucwords(strtr($id,
            array('_' => ' ', '.' => '_ ', '\\' => '_ '))),
            array(' ' => ''));
    }



}



?>