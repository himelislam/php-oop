<?php
abstract class Shape
{
    protected $color;

    public function __construct($color = 'pankha')
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    // if every sub class has a method of his own like getArea then we should declare an adstract method to the parent class. so that every time we make a new sub class we need to apply this method to the sub class aslo!!

    abstract protected function getArea();
}

class Squre extends Shape
{
    protected $length = 4;

    public function getArea()
    {
        return pow($this->length, 2);
    }
}

class Triangle extends Shape
{
    protected $base = 3;
    protected $height = 5;

    public function getArea()
    {
        return  .5 * $this->base * $this->height;
    }
}

class Circle extends Shape {
    protected $radius = 3;

    public function getArea(){
        return M_PI * pow($this->radius, 2);
    }
}

echo (new Squre('Blue'))->getColor();
echo (new Triangle('Yellow'))->getColor();
echo (new Circle)->getColor();
