<?php
	$dbServername = 'localhost';
	$dbUserName = 'root';
	$dbPassword = '';
	$dbName = 'regenxdb';

	$conn = mysqli_connect($dbServername, $dbUserName, $dbPassword, $dbName) or die("Unable to connect");
	
	$name = $_POST['name'];
	$phoneno = $_POST['phoneno'];
	$emailid = $_POST['emailid'];
	$year = $_POST['year'];
	$make = $_POST['make'];
	$model = $_POST['model'];
	$intcol = $_POST['intcol'];
	$extcol = $_POST['extcol'];
	$own = $_POST['own'];
	$insc = $_POST['insc'];
	$mile = $_POST['mile'];
	$message = $_POST['message'];

	echo $name;
	echo $phoneno;
	echo $emailid;
	echo $year;
	echo $make;
	echo $model;
	echo $intcol;
	echo $extcol;
	echo $own;
	echo $insc;
	echo $mile;
	echo $message;

	$sql = "INSERT INTO sell_table(name,phoneno,emailid,year,make,model,intcol,extcol,own,insc,mile,message) VALUES ('$name','$phoneno','$emailid','$year','$make','$model','$intcol','$extcol','$own','$insc','$mile','$message')";
	mysqli_query($conn, $sql);
	header("LOCATION: ../sell.html");
	mysqli_close($conn);
?>