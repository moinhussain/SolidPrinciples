<?php namespace OpenClosed\After;
require 'vendor/autoload.php';


$paypal = new Paypal();
$payment_processor = new PaymentProcessor($paypal);
$payment_processor->process();

$credit_card = new CreditCard();
$payment_processor = new PaymentProcessor($credit_card);
$payment_processor->process();

$bitcoin = new Bitcoin();
$payment_processor = new PaymentProcessor($bitcoin);
$payment_processor->process();
?>