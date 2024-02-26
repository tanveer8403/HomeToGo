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
    <title>Host Dashboard</title>
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
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  <?php
	$con = mysqli_connect("localhost","root","","hometogo") or die("not connect");
	session_start();
	$unm=$_SESSION["username"];
	$user=$_SESSION['uid'];
	?>
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
      data-navbarbg="skin5"
      data-sidebartype="full"
      data-sidebar-position="absolute"
      data-header-position="absolute"
      data-boxed-layout="full">
      <!-- ============================================================== -->
      <!-- Topbar header - style you can find in pages.scss -->
      <!-- ============================================================== -->
      <header class="topbar" style="background-color: rgba(30, 67, 86, 0.8);">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
          <div class="navbar-header" >
		<!--   <nav id="navbar" class="navbar">
        <ul>
          -->
         
     <!-- </nav>--><!-- .navbar -->

            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class="navbar-brand" href="Dashboard.php">
              <!-- Logo icon -->
              <b class="logo-icon ps-2">
              
              </b>
              <!--End Logo icon -->
			  
              <!-- Logo text -->
              <span class="logo-text ms-2">
				<h2>	HomeToGo   </h2>
              </span>
             
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
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-end">
              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
              
			  
			<!--<li class="nav-item"> <a class="nav-link" href="\PROJECT\Home Page\index.html">Home</a></li>
          <li class="nav-item">
		  <a class="nav-link" href="\PROJECT\Home Page\about.html">About Us</a></li>
          
          <li class="nav-item"><a class="nav-link" href="\PROJECT\Home Page\team.html">Team</a></li>
          <li class="nav-item"><a class="nav-link" href="Logout.php">Logout</a></li>
          
          
          <li class="nav-item"><a class="nav-link" href="..\Home Page\contact.html">Contact Us</a></li>-->
        
                <i class="bi bi-list mobile-nav-toggle"></i>
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
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="Property Register.php"
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
              </li>
            </ul>
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
        <!--<div class="page-breadcrumb">
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
        <div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Sales Cards  -->
          <!-- ============================================================== -->
          <div class="row">
            <!-- Column 
            <div class="col-md-6 col-lg-4 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-success text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-chart-areaspline"></i>
                  </h1>
                  <h6 class="text-white">Booked room</h6>
                  <h3 class="text-white">24</h3>
                </div>
              </div>
            </div>-->
            <!-- Column 
            <div class="col-md-6 col-lg-4 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-danger text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-receipt"></i>
                  </h1>
                  <h6 class="text-white">Vacant room</h6>
                  <h3 class="text-white">31</h3>
                </div>
              </div>
            </div>-->
            <!-- Column 
            <div class="col-md-6 col-lg-4 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-info text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-relative-scale"></i>
                  </h1>
                  <h6 class="text-white">Total Host</h6>
                  <h3 class="text-white">4</h3>
                </div>
              </div>
            </div>
			 Column -->
            <div class="col-md-6 col-lg-4 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-warning text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-chart-areaspline"></i>
                  </h1>
				  <?php 
				  $p=mysqli_query($con,"SELECT COUNT(prop_id) FROM `property_detail` WHERE user_id='$user'");
				  $a="";
				  while($row=mysqli_fetch_array($p))
				  {
					  $a=$row[0];
				  }
				  ?>
                  <h6 class="text-white">Total Property</h6>
                  <h3 class="text-white"><?php echo $a; ?></h3>
                </div>
              </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-4 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-cyan text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-pencil"></i>
                  </h1>
				  <?php 
				  $p=mysqli_query($con,"SELECT COUNT(room_id) FROM `room_details` WHERE user_id='$user'");
				  $a="";
				  while($row=mysqli_fetch_array($p))
				  {
					  $a=$row[0];
				  }
				  ?>
                  <h6 class="text-white">Total rooms</h6>
                  <h3 class="text-white"><?php echo $a; ?></h3>
                </div>
              </div>
            </div>
          </div>
        </div>

    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
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
  </body>
</html>
