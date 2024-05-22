<?php namespace OpenClosed\After;
require 'vendor/autoload.php';

class CreditCard implements PaymentMethod {
    public function process(): void {
        echo "Credit card processing" . PHP_EOL;
    }
}
?>