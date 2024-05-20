<?php namespace LiskovSubstitution\Before;

use Exception;

require 'vendor/autoload.php';

class Penguin extends Bird {

    public function fly(): string {
        throw new Exception("Cannot fly"); //violating Liskov Substitution principle
    }

}


?>