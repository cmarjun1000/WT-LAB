<!DOCTYPE html>
<html>
<head>
	<title>Visitor Count</title>
</head>
<body>
	<?php
		$file="contents.txt";
		$count=file_get_contents($file);
		file_put_contents($file, $count+1);
		echo "<table border=2px solid black;><tr><th>VISITOR COUNT</th></tr><tr><td>".$count."<td></tr></table>"
	?>
</body>
</html>