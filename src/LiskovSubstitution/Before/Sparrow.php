<?php namespace LiskovSubstitution\Before;
require 'vendor/autoload.php';

class Sparrow extends Bird {
    public function fly(): string {
        return "Sparrow flying";
    }

}


?>