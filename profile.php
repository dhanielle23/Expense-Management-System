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
	
	<!-- Blur effect -->
	<link rel="stylesheet" href="style-1.css"/>

	
</head>


	<body class="theme-green">
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
			<li><a href="created_accounts.php"><i class="material-icons">home</i>Back</a></li>
			<li><a href="logout.php"><i class="material-icons">input</i>Sign Out</a></li>
			</ul>
			</div>
	</div>
	</nav>
	    <section class="content">
		
        <div class="container-fluid">
		
            <div class="block-header">
                <h1 style="font-family:Century Gothic;">USER PROFILE</h1>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									
				<br>	
				<div class="card">
				<br>
				<?php
				
					$acc_id=$_SESSION['acc_id'];
					$user_id=$_SESSION['user_id'];
					
					$query=mysqli_query ($con, "select * from login_tbl where acc_id='$acc_id'");
					$result=mysqli_fetch_row($query);
					
					$query1=mysqli_query ($con, "select * from user_info where user_id='$user_id'");
					$result1=mysqli_fetch_row($query1);
				?>
				
					<form method="post">
                        <div class="body table-responsive">
						FIRST NAME: <b><?php echo $result1[1];?></b><br>
						<br>		
						LAST NAME:	<b><?php echo $result1[2];?></b><br>
						<br>	
						USERNAME:	<b><?php echo $result[1];?></b><br>
						<br>
						PASSWORD: <b><?php echo $result[2];?></b><br>
						<br><br>						
						</form>			
			

 	
	</body>
</html>	