<?php

namespace OOP ;

class RegisterUser {
    public function execute(array $data, $listener){
        var_dump('Registering the user ' . $data);

        $listener->userRegisteredSuccessfully();
    }
}

