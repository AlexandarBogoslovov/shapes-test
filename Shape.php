<?php
/**
 * Created by PhpStorm.
 * User: ABS-User
 * Date: 10/3/2017
 * Time: 3:43 PM
 */

abstract class Shape
{
    const SHAPE_TYPE = '1';
    public $name;
    protected $length;
    protected $width;
    private $id;

    function __construct($length,$width)
    {
        $this->id = uniqid();
        $this->length = $length;
        $this->width = $width;
    }
    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function getID(){
        return $this->id;
    }
    abstract function area ();

    public static function getTypeDescription(){
        return  "Type: " . self::SHAPE_TYPE;
    }
    public function getFullDescription() {
        return "Shape<$this->id>: $this->name - $this->length x $this->width";
    }
    
}