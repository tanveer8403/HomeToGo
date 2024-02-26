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
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">
   	
	
	
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
                <form class="d-flex">
                <!--<input type="text" class="form-control me-2">
                <button type="submit" class="btn btn-primary">Search </button>&nbsp; -->
                <button type="button" name="btn" class="btn btn-danger "  onclick="window.location.href='/PROJECT/getlost.php';">Logout</button>
                </form>
    </div>
	  <!-- .navbar -->

    </div>
  </header>
  <?php
if(isset($_POST['logout']))
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

  <!-- <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" width="70%">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./image1.jpeg" class="d-block w-60" alt="...">
      </div>
      <div class="carousel-item">
        <img src="./image2.jpeg" class="d-block w-60" alt="...">
      </div>
      <div class="carousel-item">
        <img src="./image3.jpeg" class="d-block w-60" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <div class="card">
    <h5 class="card-header">Address</h5>
    <div class="card-body">
      <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Country</th>
            <th scope="col">State</th>
            <th scope="col">City</th>
            <th scope="col">Landmark</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>India</td>
            <td>Gujarat</td>
            <td>Ahmedabad</td>
            <td>Nehrupark Society</td>
          </tr>

        </tbody>
      </table>

    </div>
  </div>


  <div class="card">
    <h5 class="card-header">Available For...</h5>
    <div class="card-body">
      <button type="button" class="btn btn-outline-primary">Student</button>
      <button type="button" class="btn btn-outline-secondary">Adult</button>
      <button type="button" class="btn btn-outline-success">Family</button>
      <button type="button" class="btn btn-outline-danger">Personal</button>
      <button type="button" class="btn btn-outline-warning">Private</button>
      <button type="button" class="btn btn-outline-info">Veg</button>
      <button type="button" class="btn btn-outline-light">non-veg</button>
      <button type="button" class="btn btn-outline-dark">non-alcholic</button>
    </div>
  </div>

  <div class="card">
    <h5 class="card-header">Property Id : 001</h5>
    <div class="card-body">
      <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Rent/day</th>
            <th scope="col">Sharing Type</th>
            <th scope="col">About Room</th>
            <th scope="col">Duration type</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>500</td>
            <td>Personal</td>
            <td>A/C</td>
            <td>Short Duration</td>
          </tr>

        </tbody>
      </table>

    </div>
  </div>

  <div class="bk" align="center">
    <button type="submit" class="btn btn-dark btn-lg"> BOOK </button>
  </div> -->
<?php
$room_id=$_GET['ID'];
  $sql=mysqli_query($con,"SELECT p.prop_id,p.prop_name,p.address,p.image,p.country_id,p.state_id,p.city_id,u.ph_no,r.rent,r.available_from,r.available_to,r.ac,r.room_no,r.room_id FROM property_detail p,user_data u,room_details r WHERE u.user_id=p.user_id AND r.user_id=u.user_id AND r.room_id='$room_id'");
  while($row=mysqli_fetch_array($sql))
  {
		$pid=$row[0];
		$p_add=$row[2];
		$rent=$row[8];
		$country=$row[4];
		$state=$row[5];
		$city=$row[6];
		$rtype=$row[11];
		$af=$row[9];
		$at=$row[10];
		$rno=$row[12];
		$p_image=$row[3];
		$room_id=$row[13];
		$_SESSION['R_ID']=$room_id;
  }
  ?>
 <?php $ctry=mysqli_query($con,"SELECT * FROM `countries` WHERE id='$country'");
  while($row=mysqli_fetch_array($ctry))
  {
	  $country=$row[2];
  }
?>
<?php $stt=mysqli_query($con,"SELECT * FROM `states` WHERE id='$state'");
  while($row=mysqli_fetch_array($stt))
  {
	  $state=$row[1];
  }
?>
<?php $ctyy=mysqli_query($con,"SELECT * FROM `cities` WHERE id='$city'");
  while($row=mysqli_fetch_array($ctyy))
  {
	  $city=$row[1];
  }
?>
  <div class="card d-flex m-5" style="width: 90%; flex-direction: row">
    <img src="\PROJECT\host_side\html\image\<?php echo $p_image; ?>" class="card-img-top" style="width: 50%;" alt="...">

    <div class="card-body">
      <!-- address details -->
      <div class="">
        <h3>Property Address</h3>
        <hr>
        <p class="card-text"> <span style="font-weight: 500;"><b>Property No: </b></span><?php echo $pid; ?></p>
        <p class="card-text"> <span style="font-weight: 500;"><b>Address: </b></span><?php echo $p_add; ?></p>
        <p class="card-text"> <span style="font-weight: 500;"><b>City: </b></span><?php echo $city; ?></p>
        <p class="card-text"> <span style="font-weight: 500;"><b>State/province/area: </b></span><?php echo $state; ?></p>
        <p class="card-text"> <span style="font-weight: 500;"><b>Zip code: </b></span>201001 </p>
        <p class="card-text"> <span style="font-weight: 500;"><b>Country: </b></span><?php echo $country; ?></p>
      </div>

      <!-- available for -->
      

      <!-- Property details  -->
      <div class="my-4">
        <hr>
        <h3>Room Details</h3>
        <hr>
        <table class="table table-bordered border-primary">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Rent/day</th>
              <th scope="col">Available From</th>
              <th scope="col">Available To</th>
              <th scope="col">Room Type</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td><?php echo $rent; ?></td>
              <td><?php echo $af; ?></td>
              <td><?php echo $at; ?></td>
              <td><?php echo $rtype; ?></td>
            </tr>
          </tbody>
        </table>
      </div>

      <a href="..\Home_Page\datebooking.php" class="btn btn-primary">Confirm Booking</a>
    </div>
  </div>

  <div class="d-flex flex-wrap gap-4 justify-content-start mx-5 my-5">
   <!-- <div class="card" style="width: 10rem;">
      <img class="#" data-bs-toggle="modal" data-bs-target="#exampleModal" style="cursor: pointer;" src="./image1.jpeg" alt="">
      <div class="card-body">
        <p class="card-title">Room No. <?php echo $rno; ?><input type="checkbox" name="chk" id=""></p>
      </div>
    </div> -->

<?php /*
$fe=mysqli_query($con,"SELECT * FROM `room_details` WHERE prop_id='$pro_id'");
while($r=mysqli_fetch_array($fe))
{
?>
    <div class="card" style="width: 10rem;">
      <img class="#" data-bs-toggle="modal" data-bs-target="#exampleModal" style="cursor: pointer;" src="\PROJECT\host_side\html\image_room\<?php echo $r[6]; ?>" alt="">
      <div class="card-body">
        <p class="card-title">Room No.<?php echo $r[3]; ?><input type="checkbox" name="chk<?php echo $r[0]; ?>" id="" required></p>
      </div>
    </div>
<?php } */?>



<!--
    <div class="card" style="width: 10rem;">
      <img class="#" data-bs-toggle="modal" data-bs-target="#exampleModal" style="cursor: pointer;" src="./image1.jpeg" alt="">
      <div class="card-body">
        <p class="card-title">Room: 103 <input type="checkbox" name="chk" id="" required></h5>
      </div>
    </div> -->

    
  </div>
  <!--
  <script type="text/javascript">  
    function selects(){  
        var ele=document.getElementsByName('chk');  
        for(var i=0; i<ele.length; i++){  
            if(ele[i].type=='checkbox')  
                ele[i].checked=true;  
        }  
    }  
    function deSelect(){  
        var ele=document.getElementsByName('chk');  
        for(var i=0; i<ele.length; i++){  
            if(ele[i].type=='checkbox')  
                ele[i].checked=false;  
              
        }  
    }             
</script>  
<div class="sel" style="margin-left: 3.7rem;">
  <input type="button" onclick='selects()' value="Select All"  style="margin-right:1rem;"/>  
  <input type="button" onclick='deSelect()' value="Deselect All"/> 
</div> 
  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">.</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img class="w-100" src="./image1.jpeg" alt="">
      </div>
    </div>
  </div>
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