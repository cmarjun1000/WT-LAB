<!DOCTYPE html>
<html>
<head>
	<title>Basic Operations on 2 numbers</title>
</head>
<body>
	<?php
		if(isset($_GET["submit"])){
			if(is_numeric($_GET["n1"]) && is_numeric($_GET["n2"])){
				$a=$_GET["n1"];
				$b=$_GET["n2"];
				$add=$a+$b;
				$sub=$a-$b;
				$mul=$a*$b;
				$div=$a/$b;

				echo "n1+n2 = $add<br/>";
				echo "n1-n2 = $sub<br/>";
				echo "n1*n2 = $mul<br/>";
				echo "n1/n2 = $div<br/>";
			}
		}
		else{


	?>
	<form method="get">
		<label>Enter n1 : </label>
		<input type="text" name="n1"><br/>
		<label>Enter n2 : </label>
		<input type="text" name="n2"><br/>
		<br>
		<input type="submit" value="SUBMIT" name="submit">
	</form>
	<?php
		}
	?>	

</body>
</html>
