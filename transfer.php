<?php
// include database connection file
include_once("includes/config.php");

// Get id from URL to delete that user
$phoneno = $_GET['phoneno'];

// Update inventory
$car = "SELECT * FROM sell_table WHERE phoneno=$phoneno";
$result=mysqli_query($mysqli,$car);
$row=mysqli_fetch_assoc($result);
echo "<pre>";
var_dump($row);
echo "</pre>";

$make=$row["make"]." ".$row["model"];
$mileage="30";
$img="img/car-img/porche cayenne.jpg";
$price="3.34CR";
$fueltype="Petrol";
$colour="Blue";
echo "$make $mileage $price $fueltype $colour $img";

$update = mysqli_query($mysqli, "INSERT INTO car_product(carname,img,mileage,price,fueltype,colour) VALUES('$make','$img','$mileage','$price','$fueltype','$colour')");
//$update = mysqli_query($mysqli, "INSERT INTO car_product(carname,img,mileage,price,fueltype,colour) VALUES('$row["make"]','$row["fasjf"]','$row["mileage"]','$row["price"]','$row["fueltype"]','$row["colour"]')");

// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM sell_table WHERE phoneno=$phoneno");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:buyqueue.php");
?>

