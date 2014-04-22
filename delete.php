<html>
<head>
	<title>Delete Entry</title>
</head>
<body>
		<p>Delete a car:</p>
		<form method="post" action="send_delete.php">
		<input type="text" name="vin" value="VIN">
		<input type='hidden' name='submit'/>
		<input type="submit" value="Delete Car"><br/>
		</form>

		<a href="index.php">Back to homepage</a><br/>

</body>
</html>
