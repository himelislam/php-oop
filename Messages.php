<?php

class Person{

    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}

class Business {

    protected $staff;

    public function __construct(Staff $staff)
    {
        $this->staff = $staff;
    }

    public function hire(Person $person){
        //add person to the staff collection

        $this->staff->add($person);
    }

    public function getStaffMembers(){
        return $this->staff->getMembers();
    }
}

class Staff {
    protected $members = [];

    public function __construct($members = [])
    {
        $this->members = $members;
    }

    public function add(Person $person){
        $this->members[] = $person;
    }

    public function getMembers(){
        return $this->members; 
    }

}

$himel = new Person('Himel Islam');

$ceo = new Person('CEO');

$staff = new Staff([$ceo]);

$Rahimshah = new Business($staff);

$Rahimshah->hire(new Person('Julia Aladhin'));

var_dump($Rahimshah->getStaffMembers()); 