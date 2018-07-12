<?php
require 'connection.php';
require 'profvalidate.php';
?>

<html>
<head>
<title> Professor Registration </title>


  <link href="bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">



<script>
  function validatePassword()
  {

        var x = document.getElementById('ppass').value;
        var y = document.getElementById('ppass1').value;
        if(x != y)
        {
          alert(" Passwords Do Not Match !");
          return false;

        }

        alert("Registered successfully!")

  }  
</script>
</head>
<body>

<style>
/*body{
    background-image: url("img1.jpg");
    background-repeat: no-repeat; 
    background-size: cover;
    background-position: center;
}
*/.centered-form{
  margin-top: 160px;
}


.centered-form .panel{
  background: rgba(255, 255, 255, 0.8);
  box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
}
</style>

<div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-2">
              <div class="login-panel panel panel-default">
                  <div class="panel-heading">
                      <h3 class="panel-title">First Timers, Kindly Register!</h3>
                  </div>
          
          <div class="panel-body">
            <form role="form" class="form-horizontal" action="" method=post onsubmit="return validatePassword()" >

                <div class="form-group">
                  <label class="col-sm-4 control-label">ProfessorID</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="profid" required >
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label">First Name</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="pfname" required >
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label">Last Name</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="plname" required >
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label">Email ID</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="pmail" required >
                  </div>
                </div>
  
                <div class="form-group">
                  <label class="col-sm-4 control-label">Password</label>
                  <div class="col-sm-8">
                    <input type="password" class="form-control" name="ppass" required >
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label">Confirm Password</label>
                  <div class="col-sm-8">
                    <input class="form-control" type="password" name="ppass1" required/>
                  <span id="passwordError"></span>
                  </div>
                </div>
              
                <div class="form-group">
                  <label class="col-sm-4 control-label">Sex</label>
                  <div class="col-sm-8">
                      <label>
                      <div class="radio">
                      <input type="radio" name="psex" value="Male" checked> Male
                      </div>
                      </label>
                      <div class="radio">
                      <label>
                      <input type="radio" name="psex" value="Female"> Female
                      </div>
                      </label>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label">Address</label>
                  <div class="col-sm-8">
                    <input class="form-control" type="text" name="padd" id="address"/>
                  </div>
                </div>

              <div class="form-group">
                  <label class="col-sm-4 control-label">City</label>
                  <div class="col-sm-8">
                    <input class="form-control" type="text" name="pcity" id="city" />
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label">State</label>
                  <div class="col-sm-8">
                    <input class="form-control" type="text" name="pstate" id="state"/>
                  </div>
                </div>
                
                <div class="form-group">
                  <div class="col-sm-offset-3 col-sm-7">
                    <input type="submit" value="Register" name="btpreg" class="btn btn-info btn-block"/>
                  </div>
                </div>
            </form>
            <label>Have an account?<a href="proflogin.php"> Click here to login</a></label>
          </div>
        </div>
      </div>
    </div>
  </div>            
</body>
</html>