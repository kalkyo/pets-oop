<?php

// This is my controller for the pets-oop

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();

// Require autoload file
require_once('vendor/autoload.php');

//Require the file that defines the pet class

// instantiate fat-free
$f3 = Base::instance();

// define routes
$f3->route('GET /', function() {
    echo '<h1>Hello, pets!</h1>';

    /*//Instantiate a pet object default constructor
    $pet1 = new Pet();*/
    // $pet1 = new Pet("Fido", "pink");
    // $pet1 = new Pet();
    $pet1 = new Pet("Fido");

    //Test setter and getter
    $pet1->setName("Fifi");
    echo "My pet's name is " . $pet1->getName();

    echo "<br>";

    $pet1->setColor("silver");
    echo "My pet's color is " . $pet1->getColor();

    echo "<pre>";
    var_dump($pet1);
    echo "</pre>";

    //Invoke the pet methods
    $pet1->eat();
    $pet1->talk();
    $pet1->sleep();
});

// run fat-free
$f3->run();