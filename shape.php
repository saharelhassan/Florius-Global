<?php

abstract class Shape {
    
    private $dimension1 = 0;
    private $dimension2 = 0;
    
	public abstract function area();
}

class Circle extends Shape{
	function __construct($dimension1) {
        
        $this->dimension1 = $dimension1;
    }

    function area() {
        return $this->dimension1 * $this->dimension1 * M_PI;
    }
}

class Rectangle extends Shape {

    function __construct($dimension1, $dimension2) {
        
        $this->dimension1 = $dimension1;
        $this->dimension2 = $dimension2;
    }

    function area() {
        
        return $this->dimension1 * $this->dimension2;
    }
}

class Square extends Shape {

    function __construct($dimension1) {
        
        $this->dimension1 = $dimension1;
    }

    function area() {
        
        return $this->dimension1 * $this->dimension1;
    }
}

class Triangle extends Shape{

	function __construct($dimension1, $dimension2) {
        
        $this->dimension1 = $dimension1;
        $this->dimension2 = $dimension2;
    }

    function area() {
        
        return ($dimension1 * $dimension2) / 2;
    }
}

?>