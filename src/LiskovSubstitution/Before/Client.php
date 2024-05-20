<?php namespace LiskovSubstitution\Before;
require 'vendor/autoload.php';


function letBirdFly(Bird $bird) {
    echo $bird->fly(). PHP_EOL;
}

letBirdFly(new Bird());
letBirdFly(new Sparrow());
letBirdFly(new Penguin()); //throws error
?>