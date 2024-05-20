<?php namespace LiskovSubstitution\After;
require 'vendor/autoload.php';

class Sparrow extends FlyingBird {
    public function makeSound(): string {
        return "sparrow making sound";
    }
    public function fly(): string {
        return "Sparrow flying";
    }

}

?>