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
	$mile = $_POST['mile'];
	$message = $_POST['message'];	

	// echo $name;
	// echo $phoneno;
	// echo $emailid;
	// echo $year;
	// echo $make;
	// echo $model;
	// echo $intcol;
	// echo $extcol;
	// echo $own;
	// echo $insc;
	// echo $mile;
	// echo $message;

	if(isset($_POST['submit'])) {
		$file = $_FILES['file'];
		$fileName = $_FILES['file']['name'];
		$fileTmpName = $_FILES['file']['tmp_name'];
		$fileType = $_FILES['file']['type'];
		$fileError = $_FILES['file']['error'];
		$img = 'img/sell-img/'.$fileName;

		// $fileName2 = $_FILES['file2']['name'];
		// $fileTmpName2 = $_FILES['file2']['tmp_name'];
		// $fileName3 = $_FILES['file3']['name'];
		// $fileTmpName3 = $_FILES['file3']['tmp_name'];

		$fileExt = explode('.', $fileName);
		$fileActualExt = strtolower(end($fileExt));
		$allowed = array('jpg','jpeg');

		if(in_array($fileActualExt, $allowed)) {
			if($fileError === 0){
				 $fileDestination = '../img/sell-img/'.$fileName;
				 // $fileDestination2 = '../img/sell-img/'.$fileName2;
				 // $fileDestination3 = '../img/sell-img/'.$fileName3;
				    move_uploaded_file($fileTmpName, $fileDestination);
				 // move_uploaded_file($fileTmpName, $fileDestination2);
				 // move_uploaded_file($fileTmpName, $fileDestination3);
				 $sql = "INSERT INTO sell_table(name,phoneno,emailid,year,make,model,intcol,extcol,own,mile,message,img) VALUES ('$name','$phoneno','$emailid','$year','$make','$model','$intcol','$extcol','$own','$mile','$message','$img')";
				mysqli_query($conn, $sql);
				header("LOCATION: ../sell.html?data=success");
			}
			else {
				$message = "Error while uploading image";
				echo "<script type='text/javascript'>alert('$message');window.location.href='http://localhost/RegenX-Car-Showroom/sell.html';</script>";
			}
		}
		else {
			$message = "Upload a jpg or jpeg file";
			echo "<script type='text/javascript'>alert('$message');window.location.href='http://localhost/RegenX-Car-Showroom/sell.html';</script>";

		}
	}
	mysqli_close($conn);
?>
