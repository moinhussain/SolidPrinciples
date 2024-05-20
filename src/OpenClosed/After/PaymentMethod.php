<?php namespace OpenClosed\After;
require 'vendor/autoload.php';

interface PaymentMethod {
    public function process(): void;
}
?>