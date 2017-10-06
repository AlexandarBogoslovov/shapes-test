<?php
/**
 * Created by PhpStorm.
 * User: ABS-User
 * Date: 10/4/2017
 * Time: 1:05 PM
 */
include ("Shape.php");

class Rectangle extends Shape
{
    const SHAPE_TYPE = '25';
    public $area;

    public function area()
    {
        $this->area = $this->length * $this->width ;
    }
    public function getArea(){
        return $this->area;
    }



}

$rectangle = new Rectangle(8,6);
$rectangle->area();
$Area = $rectangle->getArea();
echo $Area;





