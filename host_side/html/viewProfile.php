<?php
session_start();
	$unm=$_SESSION["username"];
	$user=$_SESSION['uid'];
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
    <title>Profile</title>
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
      data-navbarbg="skin5"
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
          <div class="navbar-header">
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
            
          <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
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
                  href="Logout.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-logout"></i
                  ><span class="hide-menu">Logout</span></a
                >
              </li>
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
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Sales Cards  -->
          <!-- ============================================================== -->
		  <?php
		 
$con = mysqli_connect("localhost","root","","hometogo") or die("not connect");

	$sql=mysqli_query($con,"SELECT * FROM `user_data` WHERE user_id='$user'");
	while($row=mysqli_fetch_array($sql))
	{
		
	
?>
		  
       <div class="card d-flex flex-row" style="width: 100%;">
            <img class="card-img-top" style="width: 30%;" src="../assets/images/users/4.jpg" alt="Card image cap">
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
