<?php
  include ("connectdb.php");
?>

<!DOCTYPE html>
<html>

<head>

	<title>Expense Manager </title>
	
	    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Favicon-->
	<link rel="icon" href="../../favicon.ico" type="image/x-icon">
    

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../../css/style.css" rel="stylesheet">
	
	
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
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

<body class="signup-page bg-grey">

    <div class="signup-box">
        <div class="card">
            <div class="body">
                <form id="sign_up" method="POST">
				
					<center>
					<img src="expense.png" style="width:100px;height:75px;">
					</center><br>
                    <div class="msg">To create new account, complete the following information below: </div>
					
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="fname" placeholder="First Name" required autofocus>
                        </div>
                    </div>
					
					<div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="lname" placeholder="Last Name" required autofocus>
                        </div>
                    </div>

					
					<div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="uname" minlength="8" placeholder="Username" required autofocus>
                        </div>
                    </div>

					
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="pword" minlength="8" placeholder="Password" required>
                        </div>
                    </div>
					
					<div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="cpword" minlength="8" placeholder="Confirm Password" required>
                        </div>
                    </div>
					
                    <button class="btn btn-block btn-lg bg-green waves-effect" name="login" type="submit">CREATE ACCOUNT</button>
					<center><br>
					<a href="http://localhost/expense_manager_system/log.php"> Back to Log-in </a> <br><br>
					</center>
				
				</form>
            </div>
        </div>
    </div>
	
	<?php
	

		if(isSet($_POST['login']))
		{
			$firstname = $_POST['fname'];
			$lastname = $_POST['lname'];
			$username = $_POST['uname'];
			$password = $_POST['pword'];
			$cpassword = $_POST['cpword'];
			
			$_SESSION['lname'] = $lastname;
			$_SESSION['fname'] = $firstname;
			$_SESSION['uname'] = $username;
			$_SESSION['pword'] = $password;
			$uname=$_SESSION['uname'];
			$pword=$_SESSION['pword'];
			$fname=$_SESSION['fname'];
			$lname=$_SESSION['lname'];
			
			$query=mysqli_query($con,"select MAX(acc_id) AS maximum from login_tbl");
			$numrow=mysqli_num_rows($query);
			$result=mysqli_fetch_row($query);
			$acc= $result[0]+1;
			
			$query1=mysqli_query($con,"select MAX(user_id) AS maximum from user_info");
			$numrow1=mysqli_num_rows($query1);
			$result1=mysqli_fetch_row($query1);
			$uid= $result1[0]+1;
			
			if ($password != $cpassword)
			{
				echo (" <script>alert('PASSWORD AND CONFIRM PASSWORD NOT THE SAME!') </script>");
				
			}
			
			else
			{
				$save=mysqli_query($con,"insert into login_tbl(acc_id, username, password, user_id) values ('$acc', '$uname', '$pword', '$uid')");
				$save1=mysqli_query($con,"insert into user_info(user_id, first_name, last_name) values ('$uid', '$fname', '$lname')");
				echo (" <script>alert('ACCOUNT CREATED SUCCESSFULLY') </script>");
				echo ("<script> window.location.href=('log.php'); </script>");
			}	
			
		}
			
	?>
	

    <!-- Jquery Core Js -->
    <script src="../../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="../../plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/examples/sign-up.js"></script>
</body>

</html>