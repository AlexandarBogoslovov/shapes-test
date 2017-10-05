<?php
/**
 * Created by PhpStorm.
 * User: ABS-User
 * Date: 10/4/2017
 * Time: 1:28 PM
 */

include ("Shape.php");
class circle extends Shape
{
    const SHAPE_TYPE = '3';
    protected $radius;
    public $area;

    function __construct($length, $width ,$radius)
    {
        parent::__construct($length, $width);
        $this->radius = $radius;
    }

    public function area()
    {
        $this->area = pi() * ($this->radius*$this->radius);
    }
    public function getArea(){
        return $this->area;
    }
    public function getFullDescription()
    {
        return "Circle <" . $this->getID() . " > : $this->name - $this->radius" ;
    }

}

$circle = new circle(0,0,2);
$circle->area();
$circle->setName("Circle ");
$Area= $circle->getArea();
echo $Area;
$description = $circle->getFullDescription();
echo $description;



