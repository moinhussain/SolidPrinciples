<?php namespace LiskovSubstitution\After;

use Exception;

require 'vendor/autoload.php';

class Penguin implements BirdInterface {

    public function makeSound(): string {
        return "Penguin making sound";
    }

    public function swim(): string {
        return "I can swim";
    }

}

?>