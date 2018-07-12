<html>
<head>
<title> Student Registration </title>


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

        var x = document.getElementById('pword1').value;
        var y = document.getElementById('pword2').value;
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

<?php

require 'connection.php';
//echo 'A';
session_start();
if(isset($_POST['btreg']))
{ 
   $SD = $_POST['stud'];
   $FN = $_POST['first_name'];
   $LN = $_POST['last_name'];
   $SE = $_POST['sex'];
   $EM = $_POST['email'];
   $PA = md5($_POST['pword1']);
   $AD = $_POST['address'];
   $CI = $_POST['city'];
   $ST = $_POST['state'];
   $PH = $_POST['phone'];
   $PR = $_POST['program'];
   $DE = $_POST['dept'];
   $sql = mysqli_query($conn, "INSERT INTO studentreg(StudentID ,FirstName, LastName, Sex, Email, Password, Address, City, State,Phone, Program, Department) 
    VALUES ('$SD', '$FN', '$LN', '$SE', '$EM', '$PA','$AD','$CI','$ST' ,'$PH', '$PR','$DE')");
   //echo "New record created successfully";
   // $_SESSION['stud'] = $SD;
   // $_SESSION['success'] = "You have logged in";
   // header('location: main.php');

}         
$conn->close();
//header()
?>


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
            <form role="form" class="form-horizontal" method=post onsubmit="return validatePassword()" >

                <div class="form-group">
                  <label class="col-sm-4 control-label">StudentID</label>
                  <div class="col-sm-8">
                    <input class="form-control" type="text" id = stud name="stud" required/>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label">First Name</label>
                  <div class="col-sm-8">
                    <input class="form-control" type="text" id="first_name"  name="first_name" value="" required/>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label">Last Name</label>
                  <div class="col-sm-8">
                    <input class="form-control" type="text" id="last_name" name="last_name" value="" />
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label">Email ID</label>
                  <div class="col-sm-8">
                    <input class="form-control" type="text" id = "email" name="email" value="" />
                  </div>
                </div>
  
                <div class="form-group">
                  <label class="col-sm-4 control-label">Password</label>
                  <div class="col-sm-8">
                    <input class="form-control" type="password" id="pword1" name="pword1" required/>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label">Confirm Password</label>
                  <div class="col-sm-8">
                    <input class="form-control" type="password" name="pword2" id="pword2" required/>
                  <span id="passwordError"></span>
                  </div>
                </div>
              
                <div class="form-group">
                  <label class="col-sm-4 control-label">Sex</label>
                  <div class="col-sm-8">
                      <label>
                      <div class="radio">
                      <input type="radio" name="sex" id="sex" value="Male" checked> Male
                      </div>
                      </label>
                      <div class="radio">
                      <label>
                      <input type="radio" name="sex" id="sex" value="Female"> Female
                      </div>
                      </label>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label">Contact Number</label>
                  <div class="col-sm-8">
                    <input class="form-control" type="text" id="phone" name="phone"/>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label">Address</label>
                  <div class="col-sm-8">
                    <input class="form-control" type="text" name="address" id="address"/>
                  </div>
                </div>

              <div class="form-group">
                  <label class="col-sm-4 control-label">City</label>
                  <div class="col-sm-8">
                    <input class="form-control" type="text" name="city" id="city" />
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label">State</label>
                  <div class="col-sm-8">
                    <input class="form-control" type="text" name="state" id="state"/>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label">Degree</label>
                  <div class="col-sm-5">
                    <select class="form-control" name="program" id="program">
                      <option value="BE">Bachelors</option>
                      <option value="MS">Masters</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">  
                  <label class="col-sm-4 control-label">Department</label>
                  <div class="col-sm-8">
                  <div class="radio">
                  <label>
                  <input type="radio" name="dept" id="dept" value="CS" > Computer Science
                  </label>
                  </div>
                  <div class="radio">
                  <label>
                  <input type="radio" name="dept" id="dept" value="EE" > Electrical Engineering
                  </label>
                  </div>
                  <div class="radio">
                  <label>
                  <input type="radio" name="dept" id="dept" value="PH" > Physics
                  </label>
                  </div>
                  <div class="radio">
                  <label>
                  <input type="radio" name="dept" id="dept" value="MA" > Mathematics 
                  </label>
                  </div>
                  </div>
                </div>

                <div class="form-group"></div>
                
                <div class="form-group">
                  <div class="col-sm-offset-3 col-sm-7">
                    <input type="submit" value="Register" name="btreg" class="btn btn-info btn-block"/>
                  </div>
                </div>
            </form>
            <label>Have an account?<a href="stulogin.php"> Click here to login</a></label>
          </div>
        </div>
      </div>
    </div>
  </div>
      



          
</body>
</html>