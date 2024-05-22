<?php namespace InterfaceSegregation\Before;

use Exception;

require 'vendor/autoload.php';

class BasicPrinter implements Printer {
    public function printDocument(): void {
        echo "printing document". PHP_EOL;
    }
    public function scanDocument(): void {
        throw new Exception("Scanning Not supported");
    }
    public function faxDocument(): void {
        throw new Exception("Faxing Not supported");
    }
}
?>