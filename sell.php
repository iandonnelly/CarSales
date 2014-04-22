<html>
<head>
	<title>Sell</title>
</head>
<body>
		<p>Sell a car:</p>
		<form method="post" action="send_sell.php">
		<input type="text" name="vin" value="VIN"> <br/>
		<select name="make">
<?php

require_once("connection.php");

$result = mysqli_query($link, "SELECT * FROM make");

while ($row = mysqli_fetch_array($result)) {
	$title = $row["title"];
	$id = $row["id"];
    echo "<option value=\"$id\">$title</option>";
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
    echo "<option value=\"$id\">$title</option>";
}

?>
</select><br>
		<!--<input type="text" name="model" value="Model"><br/>-->
		<input type="text" name="year" value="Year"> <br/>
		<input type="text" name="price" value="Price"> <br/>
		<input type="text" name="email" value="E-Mail Address"> <br/>
		<input type="text" name="phone" value="Phone Number"> <br/>
		<input type="text" name="zip" value="Zip Code"> <br/>
		<input type="text" name="title" value="Title"> <br/>
		<textarea name="description" rows="5" cols="40">Description</textarea> <br/> <br/>
		<input type='hidden' name='submit'/>
		<input type="submit" value="List Car"><br/>
		</form>

		<a href="delete.php">Delete entry</a><br/>
		<a href="index.php">Back to homepage</a><br/>
		


</body>
</html>
