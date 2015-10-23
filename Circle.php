<?php
/**
 * Created by PhpStorm.
 * User: inet2005
 * Date: 10/23/15
 * Time: 7:28 AM
 */

class Circle extends Shape{


    public function __construct($in_radius){
        $this->shapeName = "Circle";
        $this->shapeWidth = $in_radius;
    }

    public function CalculateSize($shapeWidth, $not_used)
    {
        $this->shapeArea = pi() * $shapeWidth**2;
    }
}