<!DOCTYPE html>
<html>
<head>
	<title>STATE LIST</title>
</head>
<body>
	<?php
		$states="Mississippi Alabama Texas Massachussetts Kansas";
		$statelist=array();
		$s=explode(' ', $states);
		foreach ($s as $i) {
			if(preg_match('/.*xas$/', $i)){
				$statelist[0]=$i;
			}
			else if(preg_match('/^K.*s$/',$i)){
				$statelist[1]=$i;
			}
			else if(preg_match('/^M.*s$/',$i)){
				$statelist[2]=$i;
			}
			else if(preg_match('/.*a$/',$i)){
				$statelist[3]=$i;
			}
		}
		echo $states."<br>";

		for($j=0;$j<count($statelist);$j++){
			echo "statelist[".$j."] = ".$statelist[$j]."<br>";
		}
	?>
</body>
</html>