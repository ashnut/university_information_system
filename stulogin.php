<?php
require 'connection.php';
require 'stuvalidate.php';

$username = $password = "";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Student Login</title>

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
						<input type="text" class="form-control" name="stud" placeholder="Student ID" required >
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