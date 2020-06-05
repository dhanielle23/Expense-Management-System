<?php
  include ("connectdb.php");
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Expense Manager</title>
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
				<img src="expense.png" style="width:60px;height:50px;">
					<h30><font color="white" style="font-family:Century Gothic;">EXPENSE MANAGER SYSTEM</font></h30>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
				
				
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
					
					$_SESSION['accc_id']=$result[0];
					
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
					
			
					<li class="active">
                        <a href="created_accounts.php">
                            <i class="material-icons">list</i>
                            <span class="icon-name">List of Created User Account</span>
                        </a>
                  
                    </li>
					
					<li>
                        <a href="expense_item.php">
                            <i class="material-icons">local_atm</i>
                            <span class="icon-name">Expense Items</span>
                        </a>
                    </li>
					
					<li>
                       <a href="assign_item.php">
                            <i class="material-icons">spellcheck</i>
                            <span class="icon-name">Assign Expense Item</span>
                        </a>

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
			
                <h1><font style="font-family:Century Gothic;">CREATED USER ACCOUNT</font></h1><br>
				<ul class="nav navbar-nav navbar-right">
				<a href="http://localhost/expense_manager_system/create_newaccount.php" class="btn bg-green waves-effect" role="button">CREATE NEW USER ACCOUNT</a>
				</ul><br><br>
            </div>
			
			
			 <!-- Example Tab -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                All User Account

                            </h2>
                            <ul class="header-dropdown m-r--5">
								
                            </ul>
                        </div>
                        <div class="body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                <li role="presentation" class="active"><a href="#forassign" data-toggle="tab">LIST OF CREATED ACCOUNT</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
							    <div role="tabpanel" class="tab-pane fade in active" id="forassign">
                                    <p>
                                        
										<table class="table table-striped">
										<?php
										
											$accc_id=$_SESSION['accc_id'];
											$query=mysqli_query ($con, "select * from login_tbl");
											echo '<thead>';
													echo '<tr>';
													echo '<th scope="row">ACCOUNT ID</th>';
													echo '<th scope="row">USERNAME</th>';
													echo '<th scope="row">PASSWORD</th>';
													echo '</tr>';
													echo '</thead>';
												
													
												while ($output=mysqli_fetch_array ($query))
													{
													
													echo '<tbody>';  
													echo '<tr>';
													
													echo '<th scope="row">'.$output[0].'</th>';	 
													echo '<th scope="row">'.$output[1].'</th>';
													echo '<th scope="row">'.$output[2].'</th>';
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