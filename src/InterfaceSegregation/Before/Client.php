<?php namespace InterfaceSegregation\Before;
require 'vendor/autoload.php';

$basic_printer = new BasicPrinter();
$basic_printer->printDocument();

$multi_functional_printer = new MutliFunctionalPrinter();
$multi_functional_printer->printDocument();
$multi_functional_printer->scanDocument();
$multi_functional_printer->faxDocument();
?>