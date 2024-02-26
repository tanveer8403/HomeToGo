<?php
//error_reporting(0);
session_start();
$con = mysqli_connect("localhost","root","","hometogo") or die("not connect");
$unm=$_SESSION["username"];
$user=$_SESSION['uid'];
//$uid=mysqli_query($con,"SELECT `user_id`, FROM `user_data` WHERE username='$unm'");
//echo $user;
//echo $unm;
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template"
    />
    <meta
      name="description"
      content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>Property Register</title>
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="../assets/images/favicon.png"
    />
    <!-- Custom CSS -->
    <link href="../assets/libs/flot/css/float-chart.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet" />
    
  </head>

  <body>
  
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
      <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div
      id="main-wrapper"
      data-layout="vertical"
      data-navbarbg="rgba(30, 67, 86, 0.8);"
      data-sidebartype="full"
      data-sidebar-position="absolute"
      data-header-position="absolute"
      data-boxed-layout="full"
    >
      <!-- ============================================================== -->
      <!-- Topbar header - style you can find in pages.scss -->
      <!-- ============================================================== -->
      <header class="topbar" style="background-color: rgba(30, 67, 86, 0.8);">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
          <div class="navbar-header" >
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class="navbar-brand" href="Dashboard.php">
              <!-- Logo icon -->
            
              <!-- Logo text -->
              <span class="logo-text ms-2">
               
				  <h2>	HomeToGo   </h2>
              </span>
             
              <!--End Logo icon -->
            </a>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Toggle which is visible on mobile only -->
            <!-- ============================================================== -->
            <a
              class="nav-toggler waves-effect waves-light d-block d-md-none"
              href="javascript:void(0)"
              ><i class="ti-menu ti-close"></i
            ></a>
          </div>
          <!-- ============================================================== -->
          <!-- End Logo -->
          <!-- ============================================================== -->
          <div
            class="navbar-collapse collapse"
            style="background-color: rgba(30, 67, 86, 0.8);"
          >
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-start me-auto">
              <li class="nav-item d-none d-lg-block">
                <a
                  class="nav-link sidebartoggler waves-effect waves-light"
                  href="javascript:void(0)"
                  data-sidebartype="mini-sidebar"
                  ><i class="mdi mdi-menu font-24"></i
                ></a>
              </li>
              <!-- ============================================================== -->
              <!-- ============================================================== -->
            </ul>
                <li class="nav-item">
                <a
                  class="
                    nav-link
                    dropdown-toggle
                    text-muted
                    waves-effect waves-dark
                    pro-pic
                    d-flex
                    justify-content-center
                    align-items-center
                  "
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  
                  <img
                    src="../assets/images/users/4.jpg"
                    alt="user"
                    class="rounded-circle"
                    width="31"
                  />
                </a>
				<ul
                  class="dropdown-menu dropdown-menu-end user-dd animated"
                  aria-labelledby="navbarDropdown"
                >
                  <a class="dropdown-item" href="./viewProfile.php"
                    ><i class="mdi mdi-account me-1 ms-1"></i> View Profile</a
                  >
                  <div class="ps-4 p-10">
                    <a
                      href="javascript:void(0)"
                      class="btn btn-sm btn-success btn-rounded text-white"
                      >Logout</a
                    >
                  </div>
                </ul>
              </li>
              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
            </ul>
          </div>
        </nav>
      </header>
      <!-- ============================================================== -->
      <!-- End Topbar header -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <aside class="left-sidebar" style="background-color: rgba(30, 67, 86, 0.8);">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav">
            <ul id="sidebarnav" class="pt-4">
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="Dashboard.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-view-dashboard"></i
                  ><span class="hide-menu">Dashboard</span></a
                >
                <li class="sidebar-item">
                  <a
                    class="sidebar-link waves-effect waves-dark sidebar-link"
                    href="Property Register.php" class="active"
                    aria-expanded="false"
                    ><i class="mdi mdi-hand-pointing-right"></i
                    ><span class="hide-menu">Property register</span></a
                  >
                </li>
                <li class="sidebar-item">
                  <a
                    class="sidebar-link waves-effect waves-dark sidebar-link"
                    href="roomreg.php"
                    aria-expanded="false"
                    ><i class="mdi mdi-hand-pointing-right"></i
                    ><span class="hide-menu">Room register</span></a
                  >
                </li>
                
                
                <li class="sidebar-item">
                  <a
                    class="sidebar-link waves-effect waves-dark sidebar-link"
                    href="PropertyDetails.php"
                    aria-expanded="false"
                    ><i class="mdi mdi-border-inside"></i
                    ><span class="hide-menu">Property Details</span></a
                  >
                </li>
                <li class="sidebar-item">
                  <a
                    class="sidebar-link waves-effect waves-dark sidebar-link"
                    href="indexroom.php"
                    aria-expanded="false"
                    ><i class="mdi mdi-border-inside"></i
                    ><span class="hide-menu">Room details</span></a
                  >
                </li>
                <li class="sidebar-item">
                  <a
                    class="sidebar-link waves-effect waves-dark sidebar-link"
                    href="indexbooking.php"
                    aria-expanded="false"
                    ><i class="mdi mdi-border-inside"></i
                    ><span class="hide-menu">Booking details</span></a
                  >
                </li>
                <li class="sidebar-item">
                  <a
                    class="sidebar-link waves-effect waves-dark sidebar-link"
                    href="Feedback.php"
                    aria-expanded="false"
                    ><i class="mdi mdi-pencil-box"></i
                    ><span class="hide-menu">Feedback</span></a
                  >
                </li>
                <li class="sidebar-item">
                  <a
                    class="sidebar-link waves-effect waves-dark sidebar-link"
                    href="Logout.php"
                    aria-expanded="false"
                    ><i class="mdi mdi-logout"></i
                    ><span class="hide-menu">Logout</span></a
                  >
                </li>            </ul>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>
      <!-- ============================================================== -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
       <!---- <div class="page-breadcrumb">
          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              <h4 class="page-title">Dashboard</h4>
              <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="E:\XAMPP NEW\htdocs\PROJECT\Home Page\index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Dashboard
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>-->
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="shadow-lg p-3 mb-5 bg-body rounded" style="margin: 2rem auto; width: 60%;">
        <center>
          <form method="POST" class="container" style="margin: 2rem auto; width: 100%;" enctype="multipart/form-data">
            <div class="mb-3">
              Property Name :<br>
          <input type="text" name="p_name" required >
          <br>
            </div>
			image :<br>
          <input class="form-control" type="file" id="formFile" style="width: 200px;" required name="pic" value="" />
          <br>
            <div class="mb-3">
          Address :<br>
          <input type="text" name="Address" required >
          <br>
          </div>
        <div class="mb-3">
          Country :<br>
          <select id="country" name="country" required >
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
      </select></div>
          
          <div class="mb-3">
            State :<br>
            <select id="state" name='state'>
            <option selected disabled>Select State</option>
            </select></div>
            
            <div class="mb-3">
              City :<br>
            <select id="city" name="citi">
            <option selected disabled>Select City</option>
            </select></div>
			  
          <div class="mb-3">
            Pin Code<br>
        <input type="number" name="pin_code" required >
        <br>
        <br>
      

              <input type="submit" class="btn btn-success" name="btn" value="Register">
              
         
      </form>
    </center>
        </div>
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="../dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="../assets/libs/flot/excanvas.js"></script>
    <script src="../assets/libs/flot/jquery.flot.js"></script>
    <script src="../assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="../assets/libs/flot/jquery.flot.time.js"></script>
    <script src="../assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="../assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="../assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="../dist/js/pages/chart/chart-page-init.js"></script>
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

$msg = "";
if (isset($_POST['btn'])) 
{

	$filename = $_FILES["pic"]["name"];
	$tempname = $_FILES["pic"]["tmp_name"];
	$folder = "./image/" . $filename;

	$pname=$_POST['p_name'];
	//$img=$_POST['pic'];
	$add=$_POST['Address'];
	$cty=$_POST['citi'];
	$country=$_POST['country'];
	$state=$_POST['state'];
	$pin=$_POST['pin_code'];
	
	$sql="INSERT INTO `property_detail`(`user_id`, `prop_name`, `address`, `image`, `country_id`, `state_id`, `city_id`, `pin_code`) 
	VALUES ('$user','$pname','$add','$filename','$country','$state','$cty','$pin')";
	$ins=mysqli_query($con,$sql);
	echo $filename;
	
	// Now let's move the uploaded image into the folder: image
	if (move_uploaded_file($tempname, $folder)) 
	{
		echo "<h3> Image uploaded successfully!</h3>";
	} 
	else 
	{
		echo "<h3> Failed to upload image!</h3>";
		echo $filename;
	}
}
?>