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
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">
   	
	
	
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <!-- <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet"> -->

  <!-- <link rel="stylesheet" href="../Admin side/dist/css/materialdesignicons.min.css.map">
  <link rel="stylesheet" href="../Admin side/dist/css/style.min.css">
  <link rel="stylesheet" href="../Admin side/dist/css/style.css"> -->

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
	<?php
	$con = mysqli_connect("localhost","root","","hometogo") or die("not connect");
	session_start();
	?>
  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="index.html"><span>HomeToGo</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          
          <li><a href="\PROJECT\Home_Page\index.html">Home</a></li>
          <li><a href="\PROJECT\Home_Page\about.html">About Us</a></li>
          
          <li><a href="\PROJECT\Home_Page\team.html">Team</a></li>
          <li><a class="active " href="..\RegLog\Login.php">Login</a></li>
          
          
          <li><a href="\PROJECT\Home_Page\contact.php">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->

<div class="shadow-lg p-3 mb-5 bg-body rounded" style="margin: 10rem auto; width: 50%;">
  <form class="container" style="margin: 5rem auto; width: 80%;" method="POST">
  
  <div class="mb-3">
    <select class="form-select" id="role" name='role' required>
                        <option selected disabled>Select Role</option>
                        <option value='0'>Guest</option>
                        <option value='1'>Host</option>
                    </select>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input type="varchar" class="form-control" name="unm" id="exampleInputEmail1" aria-describedby="emailHelp" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPass" class="form-label">Password</label>
    <input type="password" class="form-control" name="pwd" id="exampleInputPass1" aria-describedby="passHelp" required>
  </div>
  <div class="mb-3">
    <a href="../Home_Page/forgot.php"><center>Forgot Password</center></a>
  </div>
  
  <div class="d-flex flex-column">
    <input type="submit" class="btn btn-primary" value="Submit" name="btn"><br>
    <a href="../regLog2/registration.php"><center>Create an Account<center></a>
  </div>
</form>
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

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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
<?php
if(isset($_POST['btn']))
{
	$unm=$_POST['unm'];
	$pwd=$_POST['pwd'];
	$role=$_POST['role'];
	$id="";
	$sql = mysqli_query($con,"SELECT user_id FROM `user_data` WHERE username='$unm' AND password='$pwd'"); 
		while($uid=mysqli_fetch_array($sql))
		{
			$id= $uid['user_id'];
		}
		
		if($role==1)
	if(mysqli_num_rows($sql) > 0)
	{
	
	echo "valid";
	
			$_SESSION["username"]=$unm;
			$_SESSION["uid"]=$id;
			?>
			
			<script>
			var url = "../host_side/html/Dashboard.php";
			window.location = url;
			</script>
			<?php
			//echo $id;
	}
	else
	{
		echo "INvalid";
	
	}
	if($role==0)
		if(mysqli_num_rows($sql) > 0)
	{
	
	echo "valid";
	
			$_SESSION["username"]=$unm;
			$_SESSION["uid"]=$id;
			?>
			
			<script>
			var url = "../Home_Page/exp2.php";
			window.location = url;
			</script>
			<?php
			//echo $id;
	}
	else
	{
		echo "<script>alert('Invalid Username or Password ')</script>";
	
	}
	
	
}
?>