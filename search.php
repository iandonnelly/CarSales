<html>
<head>
	<title>Search</title>
</head>
<body>
		<p>Find a car:</p>
		<form method="post" action="search.php">
<select name="make">
<?php

require_once("connection.php");

$result = mysqli_query($link, "SELECT * FROM make");

while ($row = mysqli_fetch_array($result)) {
	$title = $row["title"];
	$id = $row["id"];
    echo "<option value=\"$title\">$title</option>";
}

?>
</select><br/>
<select name="model">
<?php

require_once("connection.php");

$result = mysqli_query($link, "SELECT * FROM model ");

while ($row = mysqli_fetch_array($result)) {
	$title = $row["title"];
	$id = $row["id"];
    echo "<option value=\"$title\">$title</option>";
}

?>
</select><br>
		<input type="text" name="year" value="Year"> <br/>
		<input type='hidden' name='submit'/>
		<input type="submit" value="Find Car"><br/>
		</form>

<?php
	require_once("connection.php");
	
	$make = $_POST['make'];
	$model = $_POST['model'];
	$year = $_POST['year'];
	
	if($make != "Make" && $model != "Model" && $year != "Year"){
		$result = mysqli_query( $link, "SELECT forsale.price, make.title, model.title, forsale.year, forsale.VIN, forsale.title, forsale.description, forsale.email, forsale.phone
																																					FROM make, model, forsale
																																					WHERE make.title = '$make' AND model.title = '$model' AND forsale.make = make.id AND forsale.model = model.id
																																					")
						or die( mysqli_error($link));
						
						print "<table>
										<tr>
														<th>Price</th>
														<th>Make</th>
														<th>Model</th>
														<th>Year</th>
														<th>VIN</th>
														<th>Title</th>
														<th>Description</th>
														<th>E-Mail</th>
														<th>Phone</>
										</tr>";
	}
	
	while($data = mysqli_fetch_row($result)){
		print "<tr><td>$";
		print $data[0];
		print "</td><td>";
		print $data[1];
		print "</td><td>";
		print $data[2];
		print "</td><td>";
		print $data[3];
		print "</td><td><a href=\"http://www.carfax.com/cfm/check_order.cfm?partnerSiteLocation=D&checkReport=DEC&vin=$data[4]&partnerCode=CFX&checkReportVersion=30\">";
		print $data[4];
		print "</a></td><td>";
		print $data[5];
		print "</td><td>";
		print $data[6];
		print "</td><td>";
		print $data[7];
		print "</td><td>";
		print $data[8];
		print "</td></tr>";
	}
	
	print "</table>";
	
?>


	<a href="index.php">Back to homepage</a>

</body>
</html>
