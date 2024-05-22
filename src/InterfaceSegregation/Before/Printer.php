<?php namespace InterfaceSegregation\Before;
require 'vendor/autoload.php';

interface Printer {
    public function printDocument(): void;
    public function scanDocument(): void;
    public function faxDocument(): void;
}
?>