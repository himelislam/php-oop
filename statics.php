<?php

class Math {

    public static function add1()
    {
        return array_sum(func_get_args());
    }


    public function add2(...$nums)
    {
        return array_sum($nums);
    }
}

$math = new Math();

var_dump(Math:: add1(2,3,4,3,2,3)); //ways to call a statics function


var_dump($math->add2(1,2,3,4,5,6,7,8,9)); 