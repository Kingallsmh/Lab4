<?php
/**
 * Created by PhpStorm.
 * User: inet2005
 * Date: 10/23/15
 * Time: 7:50 AM
 */
require("Shape.php");
class Rectangle extends Shape{


    public function __construct($in_width, $in_height){
        $this->shapeName = "Rectangle";
        $this->shapeWidth = $in_width;
        $this->shapeHeight = $in_height;
    }

    public function CalculateSize($shapeWidth, $shapeHeight)
    {
        return $shapeWidth * $shapeHeight;
    }
}