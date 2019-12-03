<!DOCTYPE html>
<html>
<head>
	<title>HI</title>
	<meta http-equiv="refresh" content="1">
</head>
<body>
	<?php 
		echo "Server Time : <br>";
		echo date("h:i:s a");
		date_default_timezone_set("Asia/Calcutta");
		echo "<br>Current Time<br>".date("h:i:s a");
	?>
</body>
</html>