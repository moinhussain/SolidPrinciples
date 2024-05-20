<?php namespace LiskovSubstitution\After;

require 'vendor/autoload.php';


function letBirdFly(FlyingBird $bird) {
    echo $bird->fly(). PHP_EOL;
}

letBirdFly(new Sparrow());
letBirdFly(new Penguin()); // gives type error
?>