<?php

namespace OOP;



class AuthController {
    protected $registration;

    public function __construct(RegisterUser $registration)
    {
        $this->registration = $registration;
    }

    public function register(){
        $this->registration->execute(['hello'], $this);
    }

    public function userRegisteredSuccessfully(){
        echo 'Success';
    }

    public function userRegisteredFailed(){
        echo 'Failed';
    }
}

$register = new RegisterUser;
$authController = new AuthController($register);

$authController->register();