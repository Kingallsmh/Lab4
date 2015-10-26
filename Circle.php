<?php
/**
 * Created by PhpStorm.
 * User: inet2005
 * Date: 10/23/15
 * Time: 7:28 AM
 */
require("Shape.php");
require("growShrink.php");
class Circle extends Shape implements growShrink{


    public function __construct($in_radius){
        $this->shapeName = "Circle";
        $this->shapeWidth = $in_radius;
    }

    public function CalculateSize($shapeWidth, $not_used)
    {
        return pi() * ($shapeWidth**2);
    }

    public function adjustSize($shapeArea, $adjustment)
    {
        return sqrt($shapeArea/pi()) * ($adjustment / 100);
    }
}