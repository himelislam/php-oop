<?php

namespace OOP;

class Person{

    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}