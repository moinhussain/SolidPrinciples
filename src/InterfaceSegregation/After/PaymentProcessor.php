<?php namespace OpenClosed\After;
require 'vendor/autoload.php';

class PaymentProcessor {

    public function __construct(private PaymentMethod $payment_method)
    {
    }

    public function process(): void {
        $this->payment_method->process();
    }
}
?>