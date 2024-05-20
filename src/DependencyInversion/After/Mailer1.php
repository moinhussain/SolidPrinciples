<?php 
namespace DependencyInversion\After;
require 'vendor/autoload.php';

class Mailer1 implements MailerInterface {
    public function sendEmail(string $user): void {
        print("sending email via mailer1 :". $user). PHP_EOL;
    }
}

?>