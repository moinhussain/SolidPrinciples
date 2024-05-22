<?php namespace InterfaceSegregation\Before;
require 'vendor/autoload.php';

class MutliFunctionalPrinter implements Printer {
    public function printDocument(): void {
        echo "printing document". PHP_EOL;
    }
    public function scanDocument(): void {
        echo "scanning document". PHP_EOL;
    }
    public function faxDocument(): void {
        echo "faxing document". PHP_EOL;
    }
}
?>