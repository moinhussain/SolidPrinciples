<?php 
require 'vendor/autoload.php';

class Mailer {
    public function sendEmail(string $user): void {
        print("sending email to ---:". $user). PHP_EOL;
    }
}

?>