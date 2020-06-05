
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
					<img src="expense.png" style="width:200px;height:150px;">
					</center><br>
                    <div class="msg">Log in to Expense Manager System</div>
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
					
                    <button class="btn btn-block btn-lg bg-green waves-effect" name="login" type="submit">LOGIN</button>
					<br><br>
					<center>
					<a href="http://localhost/expense_manager_system/create_newaccount.php"> Create New Account </a> <br><br>
					</center>
					
                </form>
            </div>
        </div>
    </div>
	
	<?php
	

		if(isSet($_POST['login']))
		{
			$username = $_POST['uname'];
			$password = $_POST['pword'];
			$_SESSION['uname'] = $username;
			$_SESSION['pword'] = $password;
			$uname=$_SESSION['uname'];
			$pword=$_SESSION['pword'];
			
			$login_query=mysqli_query($con,"select * from login_tbl where username='$uname' and password='$pword'");
			$numrow=mysqli_num_rows($login_query);
			$login_result=mysqli_fetch_row($login_query);
			
			$_SESSION['acc_id'] = $login_result[0];
			$_SESSION['user_id'] = $login_result[3];
			$acc_id=$_SESSION['acc_id'];
			$user_id=$_SESSION['user_id'];
			
			if ($login_result[1]==$uname && $login_result[2]==$pword)	
			{
				
				   echo (" <script> 
					alert('LOGGED IN SUCCESSFULLY!')
					</script>");
				   echo ("<script> window.location.href=('created_accounts.php'); </script>");
			}	
			else 
			{
				echo (" <script> 
					alert('INVALID LOGIN CREDENTIALS')
					</script>");
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