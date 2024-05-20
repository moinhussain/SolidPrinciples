<?php namespace OpenClosed\After;
require 'vendor/autoload.php';

class Paypal implements PaymentMethod {
    public function process(): void {
        echo "Paypal processing" . PHP_EOL;
    }
}
?>