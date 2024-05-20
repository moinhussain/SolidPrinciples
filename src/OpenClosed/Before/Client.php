<?php namespace OpenClosed\Before;
require 'vendor/autoload.php';

$payment_processor = new PaymentProcessor();
$payment_processor->process("paypal");
$payment_processor->process("credit_card");
$payment_processor->process("bitcoin");
?>