<?php

$dbServername = 'localhost';
$dbUserName = 'root';
$dbPassword = '';
$dbName = 'regenxdb';

$conn = mysqli_connect($dbServername, $dbUserName, $dbPassword, $dbName) or die("Unable to connect");
header("Location:../contact.html?data=added");

?>