<!DOCTYPE html>
<html>
<head>
	<title>Matrix Transpose</title>
	<meta content="1">
</head>
<body>
	<?php
		$arr1 = array(array(1,2,3),array(4,5,6),array(7,8,9),array(1,2,3));
		$m=count($arr1);
		$n=count($arr1[0]);

		echo "MATRIX A :<br/><br/>";

		for($i=0;$i<$m;$i++){
			for($j=0;$j<$n;$j++){
				echo $arr1[$i][$j].'&nbsp';
			}
			echo "<br/>";
		}

		echo "<br/>TRANSPOSE(MATRIX A) :<br/><br/>";

		for($j=0;$j<$n;$j++){
			for($i=0;$i<$m;$i++){
				echo $arr1[$i][$j].'&nbsp';	
			}
			echo "<br/>";
		}

		echo "<br/>MATRIX B :<br/><br/>";
		$arr2=array(array(1,1,1),array(1,1,1),array(1,1,1),array(1,1,1));
		$p=count($arr2);
		$q=count($arr2[0]);

		for($i=0;$i<$p;$i++){
			for($j=0;$j<$q;$j++){
				echo $arr2[$i][$j].'&nbsp';
			}
			echo "<br/>";
		}

		echo "<br/>ADDITION OF MATRIX A AND MATRIX B : <br/><br/>";
		if($p==$m && $q==$n){
			for($i=0;$i<$m;$i++){
				for($j=0;$j<$n;$j++){
					echo $arr1[$i][$j]+$arr2[$i][$j].'&nbsp';
			}
			echo "<br/>";
		}			
		}
		else{
			echo "Order Mismatch";
		}

		
		$arr3=array(array(1,1,1),array(1,1,1),array(1,1,1));
		$k=count($arr3);
		$l=count($arr3[0]);		

		echo "<br/>MATRIX C :<br/><br/>";
		for($i=0;$i<$k;$i++){
			for($j=0;$j<$l;$j++){
				echo $arr3[$i][$j].'&nbsp';
			}
			echo "<br/>";
		}
		$res=array(array(0,0,0),array(0,0,0),array(0,0,0),array(0,0,0));
		echo "<br/>MULTIPLICATION OF MATRIX A AND MATRIX C : <br/><br/>";
		if($n==$k){
			for($i=0;$i<$m;$i++){
				for($j=0;$j<$l;$j++){
					for($t=0;$t<$k;$t++){
						$res[$i][$j]+=$arr1[$i][$t]*$arr3[$t][$j];
					}
					echo $res[$i][$j].'&nbsp' ;
				}
				echo "<br/>";
			}	
		}
		else{
			echo "Order Mismatch";
		}
	?>

</body>
</html>