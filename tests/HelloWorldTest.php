<?php

require('../vendor/autoload.php');
/**
 * Created by PhpStorm.
 * User: bensoer
 * Date: 13/11/17
 * Time: 6:39 PM
 */

class HelloWorldTest extends PHPUnit_Framework_TestCase
{
    public function testHelloWorld(){
        $this->assertEquals("Hello World", "Hello World", "The Hello World Test");
    }

}