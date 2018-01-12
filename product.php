<?php
 class Product {

	private $p = 2.5;
	private $dimension1 = 0;
    private $dimension2 = 0;
	private $area = 0;
	private $shape = null;

	function __construct($shape, $dimension1, $dimension2) {
        
        $this->dimension1 = $dimension1;
		$this->dimension2 = $dimension2;
		$this->shape = $shape;

    }

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
		
		return $this->p * $this->area;
	}
}
?>