<?php
namespace DependencyInversion\After;
require 'vendor/autoload.php';

class UserRegistration {

    public function __construct(
        private MailerInterface $mailer
    ) {
    }

    public function register(string $user): void {
        print("user ". $user. " registered"). PHP_EOL;
        $this->mailer->sendEmail($user);
    }
}

?>