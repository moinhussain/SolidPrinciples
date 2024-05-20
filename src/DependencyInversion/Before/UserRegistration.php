<?php 
require 'vendor/autoload.php';

class UserRegistration {

    private Mailer $mailer;
    public function __construct() {
        $this->mailer = new Mailer();
    }

    public function register(string $user): void {
        print("user ". $user. " registered"). PHP_EOL;
        $this->mailer->sendEmail($user);
    }
}

?>