<!DOCTYPE html>
<html>
<head>
	<title>Calculator for Product's Price</title>
</head>

<body>

<form method = "post" action= "calc.php">  
	<table>
		<tr>
			<td>Product's Shape:</td>
			<td>
				<select name = "shape" id="shape">
					<option value="Rectangle">Rectangle</option>
					<option value="Square">Square</option>
					<option value="Triangle">Triangle</option>
					<option value="Circle">Circle</option>
				</select>
			</td> 
		</tr>
		
		<tr>
			<td>First Dimension:</td>
			<td><input type="number" name="dimension1" value=0></td>
		</tr>
		<tr>
			<td>Second Dimension:</td>
			<td><input type="number" name="dimension2" value=0></td>
		</tr>
		<tr>
		<td>
			<input type = "submit" name = "submit" value="Calculate Product's Price">
		</td>
		</tr>

</table>
</form>   
</body>   
</html>  
