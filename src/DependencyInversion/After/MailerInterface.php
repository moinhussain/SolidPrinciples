<?php 
namespace DependencyInversion\After;
require 'vendor/autoload.php';

interface MailerInterface {
    public function sendEmail(string $user): void;
}

?>