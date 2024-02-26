<?php
$con = mysqli_connect("localhost","root","","hometogo") or die("not connect");
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
    <form class="d-flex" style="width: 60%; display: flex; flex-direction: row-reverse;" method="POST">
      <!--<input type="text" class="form-control me-2" style="height: 2.5rem;">
      <button type="submit" class="btn btn-primary"  style="height: 2.5rem;">Search </button>&nbsp; &nbsp;&nbsp; -->
      <button type="button" name="btn" class="btn btn-danger "  onclick="window.location.href='/PROJECT/getlost.php';">Logout</button>&nbsp;&nbsp; &nbsp;
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
            <a href="..\Home_Page\guestinfo.php" style="width:10 rem; padding: 1rem;"> My Profile and Booking </a><hr>
			
            
        </ul>
    </form>
    </div>
    <!-- .navbar -->

    </div>
  </header>

<!--
<form method="POST">
  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow rounded-3 p-2"
    style="width: 95%; margin: auto; margin-top: -11px;">
    <a class="navbar-brand text-dark" style="font-weight: 600;" href="#">Filter Options: </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
	  <select id="country" class="form-select" name="state" required>
        <option value="">Select State</option>
		<?php
$stt = mysqli_query($con,"SELECT * FROM `states` WHERE country_id=101");
while($row = mysqli_fetch_array($stt)) 
{
?>  
		<option value="<?php echo $row['id'];?>"><?php echo $row["name"];?></option>
		<?php
}
		?>
      </select>
     <!--   <li>
          <label for="rooms">Rooms:</label>
          <select name="rooms" id="cars" form="roomform">
            <option value="+5 rooms">+5 rooms</option>
            <option value="+10 rooms">+10 rooms</option>
            <option value="+20 rooms">+20 rooms</option>
            <option value="+35 rooms">+35 rooms</option>
          </select>
        </li>-->
      </ul>
<!--
      <ul class="navbar-nav mr-auto mx-4">
        <li class="d-flex align-items-center">
          <label for="rooms" style="font-weight: 600;">Price Range: </label>
          <div class="d-flex align-items-center justify-content-center mx-2">
            <p style="margin-bottom: unset;">Lowest: </p>
            <input type="number" name="low" id="" required>
          </div>
          <div class="d-flex align-items-center justify-content-center">
            <p style="margin-bottom: unset;">Highest: </p>
            <input type="number" name="high" id="" required>
          </div>
        </li>
      </ul>

    </div>
    <input type="submit" class="btn btn-primary" name="filter" value="Filter">
  </nav>
  </form>-->

<?php
if(isset($_POST['btn']))
{
header ("location:/PROJECT/Home_Page/index.html");
?>
<script>
var url = "/PROJECT/Home_Page/index.html";
window.location = url;
<?php SESSION_destroy(); ?>
</script>
<?php
}
?>
  <!-- End Header -->
  <?php 
  if(isset($_POST['filter']))
  {
	  
	  echo "<div class='container py-4' >";
  $sid=$_POST['state'];
  echo $sid;
  $sq=mysqli_query($con,"SELECT p.prop_id,p.prop_name,p.address,p.image,p.country_id,p.state_id,p.city_id,u.ph_no,r.rent,r.room_id FROM property_detail p,user_data u,room_details r WHERE p.state_id='$sid' AND u.user_id=p.user_id AND r.user_id=u.user_id AND r.booked=0 ");
  while($row=mysqli_fetch_array($sq))
  {
  ?>
    <div class="card my-3 " style="width: 50%; display: flex float-left; flex-direction: row;">
      <img src="\PROJECT\host_side\html\image\<?php echo $row[3]; ?>" class="card-img-top" alt="" style="width: 40%;">
      <div class="card-body">
        <h5 class="card-title"><?php echo $row[1]; ?></h5>
        <p class="card-text"><b>Address:</b><?php echo $row[2]; ?></p>
		<p><b>Phone No : </b><span style="color:blue;"><?php echo $row[7]; ?></span></p></br>
		<span style="color:Red;font-weight:bold"><h4><b>₹<?php echo $row[8]; ?></b></h4></span>
		<span style="color:black;">per room Per night</span></br>
        <a href="..\Home_Page\prop_detail.php?ID=<?php echo $row[9]; ?>" class="btn btn-primary">View details </a>
      </div>
    </div>
  <?php } 
  }
  ?>
  <!-- INSIDE -->
  
  <div class="container py-4" >
  <?php
  $sql=mysqli_query($con,"SELECT p.prop_id,p.prop_name,p.address,p.image,p.country_id,p.state_id,p.city_id,u.ph_no,r.rent,r.room_id,r.room_no FROM property_detail p,user_data u,room_details r WHERE u.user_id=p.user_id AND r.user_id=u.user_id AND r.booked=0 GROUP BY r.room_id");
  while($row=mysqli_fetch_array($sql))
  {
  ?>
    <div class="card my-3 " style="width: 100%; display: flex float-left; flex-direction: row;">
      <img src="\PROJECT\host_side\html\image\<?php echo $row[3]; ?>" class="card-img-top" alt="" style="width: 40%;">
      <div class="card-body">
        <h5 class="card-title"><u>Property </u></h5>
        <p class="card-text"><b>Address:</b><?php echo $row[2]; ?></p>
		<p><b>Phone No : </b><span style="color:blue;"><?php echo $row[7]; ?></span></p></br>
		<span style="color:Red;font-weight:bold"><h4><b>₹<?php echo $row[8]; ?></b></h4></span>
		<span style="color:black;"><b>Room No -</b><?php echo $row[10]; ?></span></br>
		<span style="color:black;">per room Per night</span></br>
        <a href="..\Home_Page\prop_detail.php?ID=<?php echo $row[9]; ?>" class="btn btn-primary">View details </a>
      </div>
    </div>
  <?php } ?>

  <!--  <div class="card my-3" style="width: 100%; display: flex; flex-direction: row;">
      <img src="./image2.jpeg" class="card-img-top" alt="" style="width: 40%;">
      <div class="card-body">
        <h5 class="card-title">Jyothsana Graha</h5>
       <p class="card-text"><b>Address:</b> 102, Ashirvad Paras, Above State Bank of India, Corporate Road, Prahladnagar, 
		Satellite, Ahmedabad, Gujarat 380015</p>
		<p><b>Phone No : </b><span style="color:blue;">079 4009 9215</span></p></br>
		<span style="color:Red;font-weight:bold"><h4><b>₹800</b></h4></span>
		<span style="color:black;">per room Per night</span></br>
        <a href="..\Home Page\prop detail.html" class="btn btn-primary">View details </a>
      </div>
    </div>

    <div class="card my-3" style="width: 100%;display: flex; flex-direction: row;">
      <img src="./image3.jpeg" class="card-img-top" alt="" style="width: 40%;">
      <div class="card-body">
        <h5 class="card-title">Swarg</h5>
       <p class="card-text"><b>Address:</b> 102, Ashirvad Paras, Above State Bank of India, Corporate Road, Prahladnagar, 
		Satellite, Ahmedabad, Gujarat 380015</p>
		<p><b>Phone No : </b><span style="color:blue;">079 4009 9215</span></p></br>
		<span style="color:Red;font-weight:bold"><h4><b>₹800</b></h4></span>
		<span style="color:black;">per room Per night</span></br>
        <a href="..\Home Page\prop detail.html" class="btn btn-primary">View details </a>
      </div>
    </div>

    <div class="card my-3" style="width: 100%;display: flex; flex-direction: row;">
      <img src="./image4.jpeg" class="card-img-top" alt="" style="width: 40%;">
      <div class="card-body">
        <h5 class="card-title">Patel Bhavan</h5>
       <p class="card-text"><b>Address:</b> 102, Ashirvad Paras, Above State Bank of India, Corporate Road, Prahladnagar, 
		Satellite, Ahmedabad, Gujarat 380015</p>
		<p><b>Phone No : </b><span style="color:blue;">079 4009 9215</span></p></br>
		<span style="color:Red;font-weight:bold"><h4><b>₹800</b></h4></span>
		<span style="color:black;">per room Per night</span></br>
        <a href="..\Home Page\prop detail.html" class="btn btn-primary">View details </a>
      </div>
    </div>

    <div class="card my-3" style="width: 100%;display: flex; flex-direction: row;">
      <img src="./image5.jpeg" class="card-img-top" alt="" style="width: 40%;">
      <div class="card-body">
        <h5 class="card-title">School House</h5>
        <p class="card-text">Some details of room </p>
        <a href="..\Home Page\prop detail.html" class="btn btn-primary">View details </a>
      </div>
    </div>


    <div class="card my-3" style="width: 100%; display: flex; flex-direction: row;">
      <img src="./image6.jpeg" class="card-img-top" alt="" style="width: 40%;">
      <div class="card-body">
        <h5 class="card-title">Haven</h5>
       <p class="card-text"><b>Address:</b> 102, Ashirvad Paras, Above State Bank of India, Corporate Road, Prahladnagar, 
		Satellite, Ahmedabad, Gujarat 380015</p>
		<p><b>Phone No : </b><span style="color:blue;">079 4009 9215</span></p></br>
		<span style="color:Red;font-weight:bold"><h4><b>₹800</b></h4></span>
		<span style="color:black;">per room Per night</span></br>
        <a href="..\Home_Page\prop_detail.php" class="btn btn-primary">View details </a>
      </div>
    </div>-->
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