
<?php
  include ("connectdb.php");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>CSFI - IT Helpdesk</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-green">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
				<img src="contislogo.png" style="width:60px;height:50px;">
					<h30><font color="white" style="font-family:Century Gothic;">INFORMATION TECHNOLOGY HELPDESK SYSTEM</font></h30>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
				
					<!-- Notifications -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">notifications</i>
                            <span class="label-count">7</span>
							
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">NOTIFICATIONS</li>
                            <li class="body">
                                <ul class="menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">person_add</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>12 new members joined</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 14 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-cyan">
                                                <i class="material-icons">add_shopping_cart</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>4 sales made</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 22 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-red">
                                                <i class="material-icons">delete_forever</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>Nancy Doe</b> deleted account</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-orange">
                                                <i class="material-icons">mode_edit</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>Nancy</b> changed name</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 2 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-blue-grey">
                                                <i class="material-icons">comment</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>John</b> commented your post</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 4 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">cached</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>John</b> updated status</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-purple">
                                                <i class="material-icons">settings</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>Settings updated</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> Yesterday
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">View All Notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Notifications -->
				
					<li><a href="profile.php"><i class="material-icons">person</i>Profile</a></li>
					<li><a href="logout.php"><i class="material-icons">input</i>Sign Out</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/user.png" width="48" height="48" alt="User" />
                </div>
				
				<?php
				
					$acc_id=$_SESSION['acc_id'];
					$user_id=$_SESSION['user_id'];
					
					$query=mysqli_query ($con, "select * from login_tbl where acc_id='$acc_id'");
					$result=mysqli_fetch_row($query);
					
					$query1=mysqli_query ($con, "select * from user_info where user_id='$user_id'");
					$result1=mysqli_fetch_row($query1);
				?>
				 <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $result1[1].' '.$result1[2]; ?></div>
                    <div class="email">Username: <?php echo $result[1]; ?></div>
                </div>

            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
					<li class="header">MAIN NAVIGATION</li>
                    <li>
                        <a href="homepagee.php">
                            <i class="material-icons">dashboard</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
					
			
					<li>
                        <a href="assign_itmanager.php">
                            <i class="material-icons">list</i>
                            <span class="icon-name">List of Created User Account</span>
                        </a>
                    </li>
					
					<li>
                        <a href="approve_itmanager.php">
                            <i class="material-icons">check</i>
                            <span class="icon-name">Approve Ticket</span>
                        </a>
                    </li>
					
					<li>
                       <a href="handle_manager_it.php">
                            <i class="material-icons">local_offer</i>
                            <span class="icon-name">Ticket/s Handle</span>
                        </a>

                    </li>
					
					<li>
                         <a href="tickets_manager.php" class="menu-toggle">
                            <i class="material-icons">note_add</i>
                            <span class="icon-name">Ticket</span>
                        </a>
						<ul class="ml-menu">
									<li >
                                        <a href=" ../ithelpdesk/pages/forms/ticket_ui_itmanager.php">New Ticket</a>
                                    </li>
									
									<li>
                                        <a href="tickets_itmanager.php">Ticket/s you submitted</a>
                                    </li>
									
                        </ul>
                    </li>
					
					

		<!-- #Menu -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
   
        <!-- #END# Right Sidebar -->
    </section>

<section class="content">
        <div class="container-fluid">
            <div class="block-header">
			
                <h1><font style="font-family:Century Gothic;">ASSIGN TICKET</font></h1><br>
				<ul class="nav navbar-nav navbar-right">
				<a href="../ithelpdesk/pages/forms/ticket_ui_officer.php" class="btn bg-green waves-effect" role="button">NEW TICKET</a>
				</ul><br><br>
            </div>
			
			
			 <!-- Example Tab -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                All Tickets

                            </h2>
                            <ul class="header-dropdown m-r--5">
								
                            </ul>
                        </div>
                        <div class="body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                <li role="presentation" class="active"><a href="#forassign" data-toggle="tab">TICKET/S FOR ASSIGNMENT</a></li>
								<li role="presentation" ><a href="#assigned" data-toggle="tab">ASSIGNED TICKET</a></li>


                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
							    <div role="tabpanel" class="tab-pane fade in active" id="forassign">
                                    <b> Ticket/s for Assignment</b>
                                    <p>
                                        
										<table class="table table-striped">
										<?php	
											$eid=$_SESSION['empid'];
											$access= mysqli_query ($con, "select * from ticket where status='FOR ASSIGNMENT' or status='approved-by-manager' and empid!='$eid' and technician='No Personnel Assigned'");
													
													echo '<thead>';
													echo '<tr>';
													echo ' <th scope="row">TICKET#</th>';
													echo ' <th scope="row">TICKET DETAILS</th>';

													echo '<th scope="row">STATUS</th>';
													echo '<th scope="row">DATE REQUESTED</th>';
													echo '<th scope="row">DUE DATE</th>';
													echo '<th scope="row">PERSONNEL</th>';
													echo '<th scope="row">LAST UPDATED</th>';
													echo '<th scope="row">CSFI PRIORITY LEVEL</th>';
													echo '</tr>';
													echo '</thead>';
												
													
												while ($output=mysqli_fetch_array ($access))
													{
													
													echo '<tbody>';  
													echo '<tr>';
													
													echo '<th scope="row">'.$output[0].'</th>';	 
														$_SESSION['ticketid']=$output[0];
													
													echo '<th scope="row"><a href="details2_itofficer.php?id='.$output[0].'">'.$output[4].' as requested by '.$output[5].'</a></th>';
													echo '<th scope="row"><a class="font-bold col-red">'.$output[10].'</a></th>';
													
													echo '<th scope="row">'.$output[9].'</th>';
													echo '<th scope="row"></th>';
													echo '<th scope="row">'.$output[11].'</th>';
													echo '<th scope="row">'.$output[9].'</th>';
													
													echo '<th scope="row"> <a class="font-bold col-blue"> '.$output[8].'</a></th>';
													
													echo '</tr>';
													echo '</tbody>';
													
													}			
										?>
											</table>
                                    </p>
                                </div>
                                <div role="tabpanel" class="tab-pane fade " id="assigned">
                                    <b>Assigned Ticket/s</b>
								
									
									
										<p>
											<table class="table table-striped">
										<?php	
											$eid=$_SESSION['empid'];
											$access= mysqli_query ($con, "select * from ticket where empid!='$eid' and status='OPEN' and technician!='No Personnel Assigned'");
													
													echo '<thead>';
													echo '<tr>';
													echo ' <th scope="row">TICKET#</th>';
													echo ' <th scope="row">TICKET DETAILS</th>';

													echo '<th scope="row">STATUS</th>';
													echo '<th scope="row">DATE REQUESTED</th>';
													echo '<th scope="row">PERSONNEL</th>';
													echo '<th scope="row">LAST UPDATED</th>';
													echo '<th scope="row">CSFI PRIORITY LEVEL</th>';
													echo '<th scope="row">DATE ASSIGNED</th>';
													echo '<th scope="row">ASSIGNED BY</th>';
													echo '</tr>';
													echo '</thead>';
												
													
												while ($output=mysqli_fetch_array ($access))
													{
													
													echo '<tbody>';  
													echo '<tr>';
													
													echo '<th scope="row">'.$output[0].'</th>';	 
														$_SESSION['ticketid']=$output[0];
													
													echo '<th scope="row"><a href="details2re_itofficer.php?id='.$output[0].'">'.$output[4].' as requested by '.$output[5].'</a></th>';
													echo '<th scope="row"><a class="font-bold col-red">'.$output[10].'</a></th>';
													
													echo '<th scope="row">'.$output[9].'</th>';
													echo '<th scope="row"></th>';
													echo '<th scope="row">'.$output[11].'</th>';
													echo '<th scope="row">'.$output[9].'</th>';
													
													echo '<th scope="row"> <a class="font-bold col-blue"> '.$output[8].'</a></th>';
													
													echo '</tr>';
													echo '</tbody>';
													
													}			
										?>
											</table>
                                    </p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Example Tab -->	
				
			
			
          
    </section>

	
    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="plugins/flot-charts/jquery.flot.js"></script>
    <script src="plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>