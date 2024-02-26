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
	
  
</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
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
          <li><a href="..\regLog2\Login.php">Login</a></li>
          
          
          <li><a href="\PROJECT\Home_Page\contact.html">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->
<?php
$con = mysqli_connect("localhost","root","","hometogo") or die("not connect");

?>
  
  
  
  
  
<div class="shadow-lg p-3 mb-5 bg-body rounded" style="margin: 10rem auto; width: 50%;">
  <form class="container" style="margin: 5rem auto; width: 80%" method="POST">
  <div class="mb-3">
    <label for="exampleInputUsername1" class="form-label"><b>Role:- </b></label>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="role" id="inlineRadio1" value="0" ><!--Guest -->
        <label class="form-check-label" for="inlineRadio1">Guest</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="role" id="inlineRadio2" value="1" ><!--Host -->
        <label class="form-check-label" for="inlineRadio2">Host</label>
    </div>
  </div>
    <div class="row">
                <div class="col-md-6 mb-4 pb-2">
                  <div class="form-outline">
                    <input type="text"  required id="UserName" name="UserName" class="form-control form-control-lg" />
                    <label class="form-label" for="UserName">UserName</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text" id="Password" required name="Name" class="form-control form-control-lg" />
                    <label class="Name" for="Name">Name</label>
                  </div>

                </div>
              </div>
			  <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="email" id="emailAddress" required name="email" class="form-control form-control-lg" />
                    <label class="form-label" for="emailAddress">Email</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="Password" id="Password" required name="Password" class="form-control form-control-lg" />
                    <label class="Password" for="phoneNumber">Password</label>
                  </div>

                </div>
              </div>
  <!--<div class="mb-3">
    <label for="exampleInputUsername1" class="form-label">User Name</label>
    <input type="text" class="form-control" id="exampleInputUsername" aria-describedby="usernameHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputpassword" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputpassword" aria-describedby="pwdHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputName" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputName" aria-describedby="NameHelp">
  </div>-->
  
  
          
                <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">

                  <div class="form-outline datepicker w-100">
                    <input type="date" class="form-control form-control-lg" required name="birthdayDate" id="birthdayDate" />
                    <label for="birthdayDate" class="form-label">Birthday</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <h6 class="mb-2 pb-1">Gender: </h6>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" required type="radio" name="Gender" id="Gender0"
                      value="0" />
                    <label class="form-check-label" for="femaleGender">Female</label>
                 </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" required type="radio" name="Gender" id="Gender1"
                      value="1" />
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>
                </div>
  </div>
  <div class="row">
  <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="tel" id="phoneNumber" name="phoneNumber" pattern="[0-9]{10}" class="form-control form-control-lg"  required />
                    <label class="form-label"  for="phoneNumber">Phone Number</label>
                  </div>
                </div>
				<div class="col-md-6 mb-4 pb-2">
				 <div class="form-outline">
                    <input type="text" id="PinCode" name="PinCode" class="form-control form-control-lg" />
                    <label class="form-label" required for="PinCode">Pin Code</label>
                  </div>
                </div>
	             <div class="mb-4">
                    <input type="text" id="Address" name="Address" class="form-control form-control-lg" />
                    <label class="Address" required for="Name">Address</label>
                  </div>
</div>


  <div class="mb-4">
      <select id="country" class="form-select"name="country" required>
        <option value="">Select Country</option>
		<?php
$country = mysqli_query($con,"SELECT * FROM countries");
while($row = mysqli_fetch_array($country)) 
{
?>
		<option value="<?php echo $row['id'];?>"><?php echo $row["name"];?></option>
		<?php
			}
		?>
      </select>
  </div>
  
   <div class="row">
  <div class="col-md-6 mb-4 pb-2">

  <div class="form-outline">
                   
    <select class="form-select" id="state" name='state'>
                        <option selected disabled>Select State</option>
                    </select>
                  </div>
                </div>
				<div class="col-md-6 mb-4 pb-2">
				 <div class="form-outline">
                   
    <select class="form-select" id="city" name="citi">
                        <option selected disabled>Select City</option>
                    </select>
                  </div>
                </div>
				
				


				
				
				
 <!-- <div class="mb-3">
    <label for="exampleInputUsername1" class="form-label">State</label>
    <select id="disabledSelect" class="form-select">
        <option>Gujarat</option>
        <option>Pune</option>
        <option>Mumbail</option>
      </select>
  </div>
  <div class="mb-3">
    <label for="exampleInputUsername1" class="form-label">City</label>
    <select id="disabledSelect" class="form-select">
        <option>Ahmedabad</option>
        <option>Surat</optiodn>
      </select>
  </div>-->
  
 
  <input type="submit" name="submit" class="btn btn-primary" value="Submit">
  <a href="../regLog2/Login.php"><center>Click here to Login<center></a>
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
<script>
    // County State

    $('#country').on('change', function() {
        var country_id = this.value;
        // console.log(country_id);
        $.ajax({
            url: "ajax/state.php",
            type: "POST",
            data: {
                country_data: country_id
            },
            success: function(result) {
                $('#state').html(result);
                // console.log(result);
            }
        })
    });
    // state city
    $('#state').on('change', function() {
        var state_id = this.value;
        // console.log(country_id);
        $.ajax({
            url: 'ajax/city.php',
            type: "POST",
            data: {
                state_data: state_id
            },
            success: function(data) {
                $('#city').html(data);
                // console.log(data);
            }
        })
    });
</script>
</body>

</html>

<?php
if(isset($_POST['submit']))
{
	$role = $_POST['role'];
	$unm = $_POST['UserName'];
	$pwd = $_POST['Password'];
	$name = $_POST['Name'];
	$dob = $_POST['birthdayDate'];
	$gender = $_POST['Gender'];
	$ph_no = $_POST['phoneNumber'];
	$email = $_POST['email'];
	$address = $_POST['Address'];
	$cou_id = $_POST['country'];
	$st_id = $_POST['state'];
	$cty_id = $_POST['citi'];
	$pin_code = $_POST['PinCode'];
	
	 
	
	
	$ins="INSERT INTO `user_data`(`role`, `username`, `password`, `name`, `dob`, `gender`, `ph_no`, `email`, `address`, `country_id`, `state_id`, `city_id`, `pin_code`)
					VALUES ('$role','$unm','$pwd','$name','$dob','$gender','$ph_no','$email','$address','$cou_id','$st_id','$cty_id','$pin_code')";
	if(mysqli_query($con,$ins))
	{
		echo "<script>alert('You are Registered Thankyou...')</script>";
	}
	else
	{
		echo "nottt";
	}
}
?>