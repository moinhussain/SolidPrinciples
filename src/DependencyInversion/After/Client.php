<?php namespace DependencyInversion\After;
require 'vendor/autoload.php';

$user = "Moin";
$user_registration = new UserRegistration(new Mailer1($user));
$user_registration->register($user);

$user = "Hussain";
$user_registration = new UserRegistration(new Mailer2($user));
$user_registration->register($user);

?>