<?php
/**
 * Created by PhpStorm.
 * User: inet2005
 * Date: 10/23/15
 * Time: 7:09 AM
 */

abstract class Shape {

    public $shapeName;
    public $shapeArea;
    public $shapeWidth;
    public $shapeHeight;
    abstract public function CalculateSize($in_width, $in_height);

    public function __construct($in_name){
    $this->shapeName = $in_name;

    }



}