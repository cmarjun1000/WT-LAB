<!DOCTYPE html>
<html>
<head>
	<title>Selection Sort</title>
</head>
<body>
	<?php
		$servername="localhost";
		$username="root";
		$password="";
		$dbname="program10";
		$conn=mysqli_connect($servername,$username,$password,$dbname);
		if($conn->connect_error){
			die("Connection error : ".$conn->connect_error);
		}
		else{
			echo "Connection Successful<br><br>";
		}

		$a=[];
		echo "Before sorting : <br><br>";
		echo "<table border=solid black 2px; cellpadding=10px><tr><th>USN</th><th>NAME</th><th>ADDRESS</th></tr>";

		$sql = "SELECT * FROM student";
		$result = $conn->query($sql);

		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$row['usn']."</td>";
				echo "<td>".$row['name']."</td>";
				echo "<td>".$row['address']."</td>";
				array_push($a,$row['usn']);
				echo "</tr>";
			}
		}
		else{
			echo "Table Empty !!";
		} 
		echo "</table>";

		$n = count($a);
		for($i=0;$i<($n-1);$i++){
			$pos=$i;
			for($j=$i+1;$j<$n;$j++){
				if($a[$pos]>$a[$j]){
					$pos=$j;
				}
			}
			if($pos!=$i){
				$temp=$a[$i];
				$a[$i]=$a[$pos];
				$a[$pos]=$temp;
			}
		}

		$nm=[];
		$add=[];

		for($i=0;$i<$n;$i++){
			$var=$a[$i];
			$res2 = $conn->query($sql);
			while($row = $res2->fetch_assoc()){
				if($row['usn']==$var){
					array_push($nm,$row['name']);
					array_push($add,$row['address']);
				}
			}
		}
		echo "<br>";
		echo "After Sorting<br><br>";
		echo "<table border=solid black 2px; cellpadding=10px><tr><th>USN</th><th>NAME</th><th>ADDRESS</th></tr>";

		for($i=0;$i<$n;$i++){
			echo "<tr>";
			echo "<td>$a[$i]</td>";
			echo "<td>$nm[$i]</td>";
			echo "<td>$add[$i]</td>";
			echo "</tr>";
		}

		echo "</table>";
	?>
</body>
</html>
