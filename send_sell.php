<?php
	require_once("connection.php");
	
	$vin = $_POST['vin'];
	$make = $_POST['make'];
	$model = $_POST['model'];
	$year = $_POST['year'];
	$price = $_POST['price'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$zip = $_POST['zip'];
	$title = $_POST['title'];
	$description = $_POST['description'];
	
	if( $vin != "VIN" && make != "Make"  && $model != "Model" && $year != "Year" && $price != "Price" && $email != "Email Address" && $phone != "Phone Number" && $zip != "Zip Code" && $title != "Title" && $description != "Descriiption"){
		$result = mysqli_query( $link, "INSERT INTO forsale
										(VIN, make, model, year, price, email, phone, zip, title, description) 
										VALUES 
										('$vin','$make','$model','$year','$price','$email','$phone','$zip','$title','$description')
										")
			or die( mysqli_error( $link ) );
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