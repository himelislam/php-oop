<?php

interface Animal {
    public function communicate();   
}

class Dog implements Animal {
    public function communicate(){
        return 'Bark';
    }
}

class Cat {
    public function communicate(){
        return 'Meaw';
    }
}

echo (new Cat)->communicate();