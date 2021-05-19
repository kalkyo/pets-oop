<?php

//pet.php

class Pet
{
    private $_name;
    private $_color;

    //Default constructor
    /*function __construct()
    {
        $this->_name = "Rufus";
        $this->_color = "black";
    }*/

    function __construct($name="unknown", $color="unknown")
    {
        $this->_name = $name;
        $this->_color = $color;
    }

    function getName()
    {
        return $this->_name;
    }

    function setName($name)
    {
        $this->_name = $name;
    }

    function getColor()
    {
        return $this->_color;
    }

    function setColor($color)
    {
        $this->_color = $color;
    }

    function eat()
    {
        echo "{$this->_name} is eating<br>";
    }

    function talk()
    {
        echo "{$this->_name} is talking<br>";
    }

    function sleep()
    {
        echo "{$this->_name} is sleeping<br>";
    }
}