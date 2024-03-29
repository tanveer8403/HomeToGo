<?php
session_start();
	$unm=$_SESSION["username"];
	$user=$_SESSION['uid'];
	?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>HomeToGo - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap"
    rel="stylesheet">



  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class=" d-flex align-items-center ">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="exp2.php"><span>HomeToGo</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">

        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
   
          <img src="..\Admin_side\assets\images\users\5.jpg" alt="user" class="rounded-circle" width="35px" height="35px" class="
                    nav-link
                    dropdown-toggle
                    text-muted
                    pro-pic
                    d-flex
                    justify-content-center
                    align-items-center
                  " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"/>
       &nbsp;&nbsp; &nbsp;
        <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
          <hr> 
            <a href="..\Home_Page\guestinfo.php" style="width:10 rem; padding: 1rem;">Profile & Booking </a><hr>
			<div data-bs-spy="scroll" data-bs-target="#bookinghistory" data-bs-offset="0" class="scrollspy-example" tabindex="0">
            
      </li>
    </form>
    </div>
    <!-- .navbar -->

    </div>
  </header>


 
  <!-- End Header -->
  <!--------------------------------------Guest Profile-------------------------------------------->
  <?php
		 
$con = mysqli_connect("localhost","root","","hometogo") or die("not connect");

	$sql=mysqli_query($con,"SELECT * FROM `user_data` WHERE user_id='$user'");
	while($row=mysqli_fetch_array($sql))
	{
		
	
?>
		  
       <div class="card d-flex flex-row" style="width: 100%;">
                <div class="card-body">
                    <h3 class="card-title">My Profile Details</h3>
                    <hr>
                    <p class="card-text"><b>Name : </b><?php echo $row[4];?></p>
                    <p class="card-text"><b>Phone No : </b><?php echo $row[7];?></p>
                    <p class="card-text"><b>Email ID : </b><?php echo $row[8];?></p>
					<p class="card-text"><b>Date of Birth : </b><?php echo $row[5];?></p>
                    <p class="card-text"><b>Address : </b><?php echo $row[9];?></p>
                    <p class="card-text"><b>Pin Code : </b><?php echo $row[13];?></p>
                </div>
            </div>
        </div>
	<?php } ?>
	
	<!----------------------------Feedback----------------------------------->
  <div class="row">
    <center>
  <form class="shadow-lg p-3 mb-5 bg-body rounded" style="margin: 5rem auto; width:70% ;" method="POST">
  <div class="col-md-4" style="margin: 2rem auto; ">
  <h3>Give Your Feedback </h3>
  <hr>
  <span style='font-size:100px;'>&#127773;</span>
  <span style='font-size:100px;'>&#128577;</span>
  <textarea class="form-control" name="msg" rows="5" placeholder="Feedback" required></textarea><br><br>
  <input type="submit" class="btn btn-primary" value="Submit" name="btn">
  </div>
  </form>
  <?php
	if(isset($_POST['btn']))
	{
		$msg=$_POST['msg'];
		$sql=mysqli_query($con,"INSERT INTO `feedback_details`(`user_id`, `username`, `description`) VALUES ('$user','$unm','$msg')");
		if($sql)
		{
			echo "<script>alert('Thankyou for your Feedback')</script>";
		}
		else
		{
			echo "nottt";
		}
	}
  ?>
  </div>
  
  <!-----------------------------------Booking History --------------------------------------->
  <?php
		 
$con = mysqli_connect("localhost","root","","hometogo") or die("not connect");

	$sql=mysqli_query($con,"SELECT * FROM `booking_details` WHERE user_id='$user'");
	$i=1;
	while($row=mysqli_fetch_array($sql))
	{
	$ad=mysqli_query($con,"SELECT * FROM `property_detail` WHERE prop_id='$row[2]'");
	while($ro=mysqli_fetch_array($ad))
	{
?>
  <div id="bookinghistory" class="shadow-lg p-3 mb-5 bg-body rounded" style="margin: 5rem auto; width: 90%;" >
  <center>
  <h2> Booking <?php echo $i;?> </h2><hr>
   </center>
   <?php 
   
   ?>
  <div class="booking-details">
  <div class="row align-items-start">
    <div class="col">
  <h5>Booking Id</h5>
  <p> <?php echo $row[0];?> </p><br>
  
    <h5>Address</h5>
<p> <?php echo $ro[3];?> </p><br>
  
  </div>
  
 
  <div class="col">
  <h5>Check-in date</h5>
  <p>  <?php echo $row[4];?> </p><br>
   <h5>Check-out date</h5>
  <p>  <?php echo $row[5];?> </p><br>
  </div>
 
 
 
 <div class="col">
 <h2> Total Amount </h2>
 <br>
 <p><b> ₹  <?php echo $row[6];?> </b></p>
 </div>
 
  </div>
  </div>
  </div>
	<?php $i++; } }?>

</center>
  </div>

  <!-- ======= Footer ======= -->
  <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Team</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>



          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Gujarat Arts and Science College <br>
              Ahmedabad, Gujarat 380008<br>
              India <br><br>
              <strong>Phone:</strong> +91 81401529621<br>
              <strong>Email:</strong> tanveer8403@outlook.com<br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>About HomeToGo</h3>
            <p>This website is under Development </p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>HomeToGo</span></strong>. All Rights Reserved
      </div>
      <div class="credits">

        Designed by <a href="https://bootstrapmade.com/">Tanveer and Aarti </a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>