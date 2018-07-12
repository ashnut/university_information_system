<?php
require 'connection.php';
//require 'stuvalidate.php';
session_start();

if (isset($_POST['btlog'])) {  
    $name = $_POST['admin'];
    $pass = $_POST['password'];

$result = mysqli_query($conn, 'SELECT * FROM adminstaff WHERE adid="'.$name.'" AND adpass="'.$pass.'"');
  	if (mysqli_num_rows($result) == 1) {
  	  $_SESSION['admin'] = $name;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: adminwelcome.php');
  	}
  	 else {
  	echo "<script type='text/javascript'>alert('Invalid Login');</script>";
  	echo "Wrong username/password combination";
  	 }
  }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>

 	<link href="bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <!-- <link href="sb-admin-2.css" rel="stylesheet"> -->

    <!-- Font awesome CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

<style>
body{
	background-image: url("loim.jpg");
    background-repeat: no-repeat; 
    background-size: cover;
}
.centered-form{  
position: absolute;
top: 50%;
left: 50%;
transform: translateX(-50%) translateY(-50%);
}

.input-group{
	width: 300px;
}


.centered-form .panel{
  background: rgba(255, 255, 255, 0.9);
  box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
}
</style>



<div class="container">
    <div class="centered-form">
    	<h3 class="omb_authTitle">Login or <a href="sturegister.php">Sign up</a></h3>
		<!-- <div class="row omb_row-sm-offset-3">
			<div class="col-xs-12 col-sm-6">	 -->
			    <form name = "vform" class="omb_loginForm" action="" autocomplete="off" method="post" >
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user-o" aria-hidden="true"></i></span>
						<input type="text" class="form-control" name="admin" placeholder="Admin ID" required >
					</div>
					<br>
					<span class="help-block"></span>				
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-lock"></i></span>
						<input  type="password" class="form-control" name="password" placeholder="Password" required >
					</div>
					<br>
					<input type="submit" name="btlog" value="Login" class="btn btn-lg btn-primary btn-block" />	 
				
			<!-- </div>
    	</div> -->
	</div>
</div>
</form>
</body>
</html>