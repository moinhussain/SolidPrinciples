<?php namespace OpenClosed\After;
require 'vendor/autoload.php';

class Bitcoin implements PaymentMethod {
    public function process(): void {
        echo "Bitcoin processing" . PHP_EOL;
    }
}
?>