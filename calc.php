<?php 

include 'product.php';
if(isset($_POST['submit']))  
    {  
		$shape = $_POST['shape'];   
		$dimension1 = $_POST['dimension1'];
		$dimension2 = $_POST['dimension2'];
		$product = new Product($shape, $dimension1, $dimension2);
		
				echo "The Price of the product = $2.5 * Area = $";   
				echo $product->price() . "\n";

}   
?>   