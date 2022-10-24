<?php

use OOP\Person;
use OOP\Business;
use OOP\Staff;


$himel = new Person('Himel Islam');

$staff = new Staff([$himel]);

$Rahimshah = new Business($staff);

$Rahimshah->hire(new Person('Julia Aladhin'));


$himel = new Person('Himel Islam');

$staff = new Staff([$himel]);

$Rahimshah = new Business($staff);

$Rahimshah->hire(new Person('Julia Aladhin'));

var_dump($Rahimshah->getStaffMembers()); 