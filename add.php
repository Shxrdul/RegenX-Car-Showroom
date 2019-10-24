

<!DOCTYPE html>
<html>
<head>
    <title>PANEL | RegenX</title>
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--main CSS-->
    <link rel="stylesheet" href="css/main.css">
    <!--Font Awesome-->
    <script src="js/all.js"></script>
    <!-- Website Icon -->
    <link rel="shortcut icon" href="img/icon.ico">
    <!-- Map Api -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<!--Preloader-->
<div class="preloader d-flex justify-content-center align-items-center">
    <img src="img/loading.gif" alt="LOADING!">
</div>
<!--End Preloader-->
<div class="default-header">
    <!--nav element-->
    <nav class="navbar navbar-expand-lg p-3" id="navBar">
    <a href="index.html">
        <img class src="img/wregenx.png" height="50" alt="logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle='collapse' data-target='#myNav'>
        <span class="navbar-icon">
            <i class="fas fa-bars"></i>
        </span>
    </button>
    <!--Nav List-->
    <div class="collapse navbar-collapse" id="myNav">
        <ul class="navbar-nav mx-auto"> 
        <li class="nav-item active"> 
            <a href="index.html" class="nav-link">HOME</a>
        </li>
        <li class="nav-item"> 
            <a href="inventory.php" class="nav-link">INVENTORY</a>
        </li>
        <li class="nav-item"> 
            <a href="story.html" class="nav-link">OUR STORY</a>
        </li>	
        <li class="nav-item"> 
            <a href="contact.html" class="nav-link">CONTACT</a>
        </li>	
        <li class="nav-item"> 
            <a href="sell.html" class="nav-link">SELL YOUR CAR</a>
        </li>
        <li class="nav-item"> 
            <a href="admin.php" class="nav-link">ADMIN</a>
        </li>		
        </ul> 
        <!--Social Icons-->
        <div class="nav-icons d-none d-lg-block">
            <a href="https://www.facebook.com" class="con-icon"> 
				<i class="fab fa-facebook"></i>
			</a>
			<a href="https://www.twitter.com" class="con-icon"> 
				<i class="fab fa-twitter"></i>
			</a>
			<a href="https://www.instagram.com" class="con-icon"> 
				<i class="fab fa-instagram"></i>
			</a>
			<a href="https://www.snapchat.com" class="con-icon"> 
				<i class="fab fa-snapchat"></i>
			</a>
        </div>
    </div>
    </nav>
    <!--End Nav element-->
    <!--Header Section-->
    <header class="header" id="header">
        <div class="container"> 
                <div class="d-flex justify-content-center py-5"> 
                    <div class="col-sm-6 col-lg-3 text-center my-3">
                        <h1 class="font-weight-bolder align-self-center mx-1">PANEL</h1>
                        <div class="brand-underline"></div>	
                    </div>		
                </div>
            </div>
        </div>
    </header>
    <!--End Header Section-->
</div>


<!-- Buttons -->
<div class="container">
<div class="row p-4">
    <div class="col my-3 text-center">
    <a class="btn msg-btn" href="panel.php">Go Back</a>
    </div>
</div>
<form action="add.php" method="post" name="form1">
<div class="row  justify-content-center">
    <div class="col-6 my-3">
        <h6>ID</h6>
        <input type="text" name="id" class="form-control form-control-lg">
    </div>
</div>
<div class="row  justify-content-center">
    <div class="col-6 my-3">
        <h6>Carname</h6>
        <input type="text" name="carname" class="form-control form-control-lg">
    </div>
</div>
<div class="row  justify-content-center">
    <div class="col-6 my-3">
        <h6>Mileage</h6>
        <input type="text" name="mileage" class="form-control form-control-lg">
    </div>
</div>
<div class="row  justify-content-center">
    <div class="col-6 my-3">
        <h6>Price</h6>
        <input type="text" name="price" class="form-control form-control-lg">
    </div>
</div>
<div class="row  justify-content-center">
    <div class="col-6 my-3">
        <h6>FuelType</h6>
        <input type="text" name="fueltype" class="form-control form-control-lg">
    </div>
</div>
<div class="row  justify-content-center">
    <div class="col-6 my-3">
        <h6>Colour</h6>
        <input type="text" name="colour" class="form-control form-control-lg">
    </div>
</div>
<div class="row  justify-content-center">
    <div class="col-6 my-3">
        <h6>Image</h6>
        <input type="text" name="img" class="form-control form-control-lg">
    </div>
</div>
<div class="row p-4">
    <div class="col my-3 text-center">
    <input type="submit" name="Submit" value="Add" class="btn msg-btn">
    </div>
</div>
</form>
</div>

	<!-- <form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr> 
				<td>Mobile</td>
				<td><input type="text" name="mobile"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form> -->
	
	<?php

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$id = $_POST['id'];
		$carname = $_POST['carname'];
        $img = $_POST['img'];
        $mileage = $_POST['mileage'];
        $price = $_POST['price'];
        $fueltype = $_POST['fueltype'];
        $colour = $_POST['colour'];
		
		// include database connection file
		include_once("includes/config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO car_product(id,carname,img,mileage,price,fueltype,colour) VALUES('$id','$carname','$img','$mileage','$price','$fueltype','$colour')");
		
        // Show message when user added
        $message = "User added successfully.";
        echo "<script type='text/javascript'>alert('$message');</script>";
	}
	?>
<!-- End Buttons -->


<!-- Contact Section -->
<section id="contact">
    <div class="contact d-flex justify-content-center py-5">
        <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-center pt-4">
                <a href="contact.html">
                    <img src="img/wregenx.png" alt="" class="contact-brand">
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-center text-center p-4">
                <div class="w-50">
                    <h5 class="main-text">SHOWROOM LOCATION:</h5>
                    <h5 class="info-text">Sector-V, Nerul, Navi Mumbai, Maharashtra 400706</h5>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 my-2 col-md-4 d-flex justify-content-center text-center">
                <div class="text w-50">
                    <h5 class="main-text">PHONE:</h5>
                    <h5 class="info-text">+91 9911773355</h5>
                </div>
            </div>
            <div class="col-12 my-2 col-md-4 d-flex justify-content-center text-center">
                <div class="w-50">
                    <h5 class="main-text">HOURS:</h5>
                    <h5 class="info-text">Mon-Sun: 9am-8pm</h5>
                    <h5 class="info-text">(Tuesday: Closed)</h5>	
                </div>
            </div>
            <div class="col-12 my-2 col-md-4 d-flex justify-content-center text-center">
                <div class="w-50">
                    <h5 class="main-text">EMAIL:</h5>
                    <h5 class="info-text">xyz@siesgst.ac.in</h5>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-center text-center p-5">
                <div class="w-50">
                    <div class="nav-icons d-none d-lg-block"></div>
                    <a href="https://www.facebook.com/" class="con-icon"> 
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="https://www.twitter.com" class="con-icon"> 
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://www.instagram.com" class="con-icon"> 
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://www.snapchat.com" class="con-icon"> 
                        <i class="fab fa-snapchat"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<!-- End Contact Section -->

<!-- Footer -->
<footer class="footer py-3">
    <div class="footer-text col-12 d-flex justify-content-center my-2">
        DEVELOPED BY
    </div>
    <div class="footer-text col-12 d-flex justify-content-center my-2">
        SHARDUL | PIYUSH | SIDDHARTH
    </div>
</footer>
<!-- End Footer -->



</body>
<!--jQuery-->
<script src="js/jquery-3.4.1.min.js"></script>
<!--Bootstrap JS-->
<script src="js/bootstrap.bundle.min.js"></script>
<!--Script JS-->
<script src="js/script.js"></script>
</html>