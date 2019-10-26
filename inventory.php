<?php
include 'includes/dbh.inc.php';
$sql = "SELECT * FROM car_product";
$result = mysqli_query($conn, $sql);

$product = mysqli_fetch_all($result, MYSQLI_ASSOC);
//foreach ($product as $product) {
  //  echo "" .$product['carname']. "<br>";
//}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Inventory | RegenX</title>
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--main CSS-->
    <link rel="stylesheet" href="css/main.css">
    <!--Font Awesome-->
    <script src="js/all.js"></script>
    <!-- Website Icon -->
    <link rel="shortcut icon" href="img/icon.ico">
    <style>

    </style>
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
			<img src="img/wregenx.png" height="50" alt="logo">
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
                <a href="admin.php" class="nav-link">ADMIN </a>

            </li>	
            </ul> 
            <!--Social Icons-->
            <div class="nav-icons d-none d-lg-block"></div>
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
        </nav>
        <!--End Nav element-->
        <!--Header Section-->
        <header class="header" id="header">
            <div class="container"> 
                    <div class="d-flex justify-content-center py-5"> 
                        <div class="col-xl-6 text-center my-3">
                            <h1 class="font-weight-bolder align-self-center mx-1">VEHICLE LISTINGS</h1>
                            <div class="brand-underline"></div>	
                        </div>		
                    </div>
                </div>
            </div>
        </header>
        <!--End Header Section-->
    </div>

    <div class="container my-4">
    	<div class="row">
            <!-- Single Car -->
            <?php foreach ($product as $product):?> 
            <div class="col-12 mx-auto my-3 col-md-6 col-lg-4">
                <div class="card inv-car-card">
                    <!-- Card Body -->
                    <div class="car-body py-4">
                        <div class="car-info d-flex justify-content-between px-3">
                            <!-- First Flex Child -->
                            <div class="car-text">
                                <h4 class="font-weight-bold inv-head-text"><?php echo $product['carname']?></h4>
                                <div class="inv-line-1 inv-head-text"></div>
                                <div class="inv-line-2 inv-head-text"></div>
                            </div>                   
                        </div>     
                    </div>
                    <!-- End Card Body -->
                    <div class="inv-img-container d-flex p-2">
                        <img src="<?php echo $product['img']?>" class="card-img-top inv-car-img" alt="">
                    </div>
                    <div class="container py-2">
                    	<div class="row">
                            <div class=" col-4 p-2">
                                <div class="inv-check-card text-center py-2">
                                    <div class="inv-check-icon py-2">
                                        <i class="fas fa-dot-circle"></i>
                                    </div>
                                    <h6 class="inv-check-text"><?php echo $product['colour']?></h6>
                                </div>
                            </div>
                            <div class=" col-4 p-2">
                                <div class="inv-check-card text-center py-2">
                                    <div class="inv-check-icon py-2">
                                        <i class="fas fa-tachometer-alt"></i>
                                    </div>
                                    <h6 class="inv-check-text"><?php echo $product['mileage']?>MPL</h6>
                                </div>
                            </div>
                            <div class=" col-4 p-2">
                                <div class="inv-check-card text-center py-2">
                                    <div class="inv-check-icon py-2">
                                        <i class="fas fa-fire-alt"></i>
                                    </div>
                                    <h6 class="inv-check-text"><?php echo $product['fueltype']?></h6>
                                </div>
                            </div>
                        </div>    
                    </div>		  
	                <div class="card-footer d-flex justify-content-center py-4">
	                    <div class="inv-car-value text-center py-2 px-3">   
	                            Rs. <?php echo $product['price']?>
	                    </div>    
	                </div>
                </div>
            </div>
            <?php endforeach;?>
            <!-- End Single Car -->   
        </div>
    </div>          
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
						<a href="#" class="con-icon"> 
							<i class="fab fa-facebook"></i>
						</a>
						<a href="#" class="con-icon"> 
							<i class="fab fa-twitter"></i>
						</a>
						<a href="#" class="con-icon"> 
							<i class="fab fa-instagram"></i>
						</a>
						<a href="#" class="con-icon"> 
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