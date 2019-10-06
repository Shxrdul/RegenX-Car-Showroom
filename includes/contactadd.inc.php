<?php
	include_once'dbh.inc.php';

	$name = $_POST['name'];
	$phoneno = $_POST['phoneno'];
	$emailid = $_POST['emailid'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	//echo $name;
	//echo $phoneno;
	//echo $emailid;
	//echo $subject;
	//echo $message;


	//Phone NUmber is Primary Key

	$sql = "INSERT INTO contact_table (name, phoneno, emailid, subject, message) VALUES ('$name', '$phoneno', '$emailid','$subject', '$message');";

mysqli_query($conn, $sql);

header("LOCATION: ../contact.html?data=added");