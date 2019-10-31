<?php
include_once("includes/config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM sell_table");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Panel | RegenX</title>
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
<div class="row p-4">
<div class="col-12 my-3 text-center">
    <a class="btn msg-btn" href="panel.php">Go Back</a>
    </div>
    
</div>

    <div class="container">
    <table class="table">
    <thead class="thead-inverse">
    <tr>
    <th>Name</th> <th>Mobile</th> <th>Email</th> <th>Year</th>
    <th>Make</th> <th>Model</th> <th>IntCol</th> <th>ExtCol</th>
    <th>Owners</th> <th>Mileage</th> <th>Message</th><th>Manage</th>

    </tr>
    </thead>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['phoneno']."</td>";
        echo "<td>".$user_data['emailid']."</td>";
        echo "<td>".$user_data['year']."</td>";    
        echo "<td>".$user_data['make']."</td>";
        echo "<td>".$user_data['model']."</td>";
        echo "<td>".$user_data['intcol']."</td>";
        echo "<td>".$user_data['extcol']."</td>";
        echo "<td>".$user_data['own']."</td>";

        echo "<td>".$user_data['mile']."</td>";
        echo "<td>".$user_data['message']."</td>";
       // echo "<td>".'<img src="'.$user_data['img'].'"height="150" width="150">'."<td>";
        echo "<td><a href='transfer.php?phoneno=$user_data[phoneno]'>Bought</a></td></tr>";        
    }
    ?>
    </table>
    </div>
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