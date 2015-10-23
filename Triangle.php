<?php
/**
 * Created by PhpStorm.
 * User: inet2005
 * Date: 10/23/15
 * Time: 7:55 AM
 */

class Triangle extends Shape{

    public function __construct($in_base, $in_height){
        $this->shapeName = "Triangle";
        $this->shapeWidth = $in_base;
        $this->shapeHeight = $in_height;
    }

    public function CalculateSize($shapeWidth, $shapeHeight)
    {
        $this->shapeArea = ($shapeWidth * $shapeHeight)/2;
    }
}