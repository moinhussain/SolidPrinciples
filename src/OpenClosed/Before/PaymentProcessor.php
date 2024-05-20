<?php namespace OpenClosed\Before;
require 'vendor/autoload.php';

class PaymentProcessor {
    public function process(string $payment_type): void {
        switch ($payment_type) {
            case 'paypal':
                echo "Paypal processing" . PHP_EOL;
                break;
            case 'credit_card':
                echo "Credit card processing" . PHP_EOL;
                break;
            default:
                echo "Invalid processing method" . PHP_EOL;

            //Adding a new payment processor requires this class to be modified which violates the OpenClosed Principle.
        }
    }
}
?>