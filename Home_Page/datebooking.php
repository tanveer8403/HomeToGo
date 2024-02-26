<?php
$con = mysqli_connect("localhost","root","","hometogo") or die("not connect");
session_start();
	$unm=$_SESSION["username"];
	$user=$_SESSION['uid'];
	$room_id=$_SESSION['R_ID'];
	$sql=mysqli_query($con,"SELECT * FROM `room_details` WHERE room_id='$room_id'");
	while($row=mysqli_fetch_array($sql))
		{
			$rent=$row[7];
			$dtf=$row[4];
			$dtt=$row[5];
		}
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
        <h1 class="text-light"><a href="index.html"><span>HomeToGo</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">

        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
    <form class="d-flex" method="POST">
      <button type="button" name="btn" class="btn btn-danger "  onclick="window.location.href='/PROJECT/getlost.php';">Logout</button>
    </form>
    </div>
    <!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->


  <div class="row justify-content-center">
 <div class="shadow-lg p-3 mb-5 bg-body rounded" style="margin: 2rem ; width: 60%;" >
  <div class="row justify-content-center">
     <form class="fst-normal" style="margin: 2rem ; width: 50%;"  id="form" 
          method="POST">
		   <div class="card-body">
      <!--date fillup-->
	  <center>
        <h3> Fill details  </h3><hr>
    </center>
      </div> 

      <div class="col-xs-2">
      <label class="form-date" for="exampledate"><b>Check In Date</b></label><br>
	    <input type="date" class="date" required id="exampledate" name="cin" min="<?php echo $dtf; ?>" max="<?php $dtt; ?>">
      </div><br><br>
      
    <div  class="col-xs-4">
    <label class="date" for="exampledate"><b>Check Out Date</b></label><br>
	  <input type="date" class="form-date" required id="exampledate" name="cout" min="<?php echo $dtf; ?>" max="<?php $dtt; ?>">
    </div><br><br>
     <input type="submit" name="btn" value="Book" class="btn btn-primary my-xxl-1">
      
      </div>
    
    </form>
  </div>
  </div>
<?php
	if(isset($_POST['btn']))
	{
		$check_out=$_POST['cout'];
		$check_in=$_POST['cin'];
		$days=strtotime($check_out)-strtotime($check_in);
		$days= round($days/(60*60*24));
		//echo $days;
		$_SESSION['cout']=$check_out;
		$_SESSION['cin']=$check_in;
		
		$total=$rent*$days;
		//echo $total;
		
?>
<script>
var url = "/PROJECT/Home_Page/Payment/Payment.php";
window.location = url;
<?php $_SESSION['r_total']=$total; ?>
</script>
<?php } ?>
  
  


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