<?php
	require_once("connection.php");
	
	$vin = $_POST['vin'];
	
	if($vin != "VIN"){
		mysqli_query( $link, "DELETE FROM forsale WHERE forsale.vin = '$vin'");
		mysqli_close($link);
	}
	

	
?>

<html>
	<head>
		<meta http-equiv="refresh" content="0; url=index.php">
		<title>Redirecting...</title>
	</head>
	
	<body>
		<p>Please wait...</p>
	</body>
</html>
