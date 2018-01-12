<?php
 class Product {
	 // the constant number $2.5 
	 private $p = 2.5;
	 // First dimension
	 private $dimension1 = 0;
	 // Second dimension
	 private $dimension2 = 0;
	 // Shape's area
	 private $area = 0;
	 // Shape type
	 private $shape = null;

	function __construct($shape, $dimension1, $dimension2) {
        
        $this->dimension1 = $dimension1;
		$this->dimension2 = $dimension2;
		$this->shape = $shape;

    }

	// function to calculate the price for the product based on the chosen shape and the giving dimensions
	function price()
	{
		switch ($this->shape) {
			case "Circle":
				$this->area = $this->dimension1 * $this->dimension1 * M_PI;
			break;
			case "Rectangle":
				$this->area = $this->dimension1 * $this->dimension2;
			break;
			case "Square":
				$this->area = $this->dimension1 * $this->dimension1;
			break;
			case "Triangle":
				$this->area = ($this->dimension1 * $this->dimension2) / 2;
			break;
		}
		// the price of a product is calculated as $2.5 * area of the shape 
		return $this->p * $this->area;
	}
}
?>