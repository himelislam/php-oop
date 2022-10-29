<?php

namespace OOP;

class AuthController {
    public function register(RegisterUser $registration){
        $registration->execute(['hello']);
    }
}