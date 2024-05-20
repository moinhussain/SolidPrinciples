<?php namespace LiskovSubstitution\After;
require 'vendor/autoload.php';

abstract class FlyingBird implements BirdInterface {
    public function fly(): string {
        return "I can fly";
    }
}


?>