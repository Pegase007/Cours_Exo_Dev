<?php

namespace Tests;

use Classes\Bob;

/**
 * Class BobTest
 * @package Tests
 */

class BobTest extends \PHPUnit_Framework_TestCase{




    public function testConstructor(){

        $bob=new Bob("Dylan");
        $this->assertEquals(20,$bob->getAge());


        $bob=new Bob("Dylan",200 ,"gsdgfdsfds@fdsfsdS.com");
        $this->assertEquals("gsdgfdsfds@fdsfsdS.com",$bob->getEmail());


        $bob=new Bob("Dylan");
        $this->assertEquals("Dylan",$bob->getName());


    }


}



?>