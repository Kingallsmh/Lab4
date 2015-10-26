<?php
/**
 * Created by PhpStorm.
 * User: inet2005
 * Date: 10/23/15
 * Time: 7:55 AM
 */
require("Shape.php");
require("growShrink.php");
class Triangle extends Shape implements growShrink{

    public function __construct($in_base, $in_height){
        $this->shapeName = "Triangle";
        $this->shapeWidth = $in_base;
        $this->shapeHeight = $in_height;
    }

    public function CalculateSize($shapeWidth, $shapeHeight)
    {
        return ($shapeWidth * $shapeHeight)/2;
    }

    public function adjustSize($shapeBase, $adjustment)
    {
        return $shapeBase * ($adjustment/100);
    }
}