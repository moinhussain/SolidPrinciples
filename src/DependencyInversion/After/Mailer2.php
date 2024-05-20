<?php 
namespace DependencyInversion\After;
require 'vendor/autoload.php';

class Mailer2 implements MailerInterface {
    public function sendEmail(string $user): void {
        print("sending email via mailer2 :". $user). PHP_EOL;
    }
}

?>