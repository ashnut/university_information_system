  

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mathemetics</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>




<?php 
require 'connection.php';
session_start();
$stuname = $_SESSION['stud'];
if(isset($_POST['se']))

{
	//echo "h";
	$SE = $_POST['se1'];
	$CSE = $_POST['cse'];
	//$result = mysqli_query($conn, 'SELECT * FROM course WHERE CID="'.$name.'"');
	$sql = mysqli_query($conn, "INSERT INTO student_course(CID, SID, Cname) VALUES ('$CSE', '$stuname', '$SE' )");
}


if(isset($_POST['cg']))

{
	//echo "a";
	$CG = $_POST['cg1'];
	$CCG = $_POST['ccg'];
	//$result = mysqli_query($conn, 'SELECT * FROM course WHERE CID="'.$name.'"');
	$sql = mysqli_query($conn, "INSERT INTO student_course(CID, SID, Cname) VALUES ('$CCG','$stuname','$CG' )");
}


if(isset($_POST['cn']))

{
	//echo"c";
	$CN = $_POST['cn1'];
	$CCN = $_POST['ccn'];
	//$result = mysqli_query($conn, 'SELECT * FROM course WHERE CID="'.$name.'"');
	$sql = mysqli_query($conn, "INSERT INTO student_course(CID, SID, Cname) VALUES ('$CCN','$stuname','$CN' )");
}







?>





<div class="jumbotron">
  <div class="container text-center">
    <h1>University Information System</h1>   

  </div>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
          <a class="navbar-brand" href="#"><img src="edlogo.png" width="35" alt="Bootstrappin'"></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        


        <li class="active"><a href="mscs.php ">Available courses</a></li>

        <li><a href="studcoursestaken.php">Courses taken</a></li>

        
        <li><a href="studexamschedule.php">Exam Schedule</a></li>
        <li><a href="software.php">List of Software</a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<form method="post">

<div class="container-fluid"> 
  <div class="row">
    <div class="col-sm-1" style="background-color:white;">
      <input type=hidden name="cse" value="CSCI665"><p>MATH 141</p>
    </div>
    <div class="col-sm-2" style="background-color:white;">
  <input type="hidden" name="se1" value="SoftwareEngineering"><a href="#demo1" data-toggle="collapse">Precalculus</a></label>
  <div id="demo1" class="collapse">
  A study of relations and functions, inequalities, complex numbers, quadratic equations, linear systems of equations, higher degree equations, trigonometric functions, identities, functions of composite angles.
  </div>
    </div>
    <div class="col-sm-1" style="background-color:white;">
     <!-- <button type="button" name="se" class="btn btn-primary">Select Course</button>  -->
     <input type="submit" name="se" class="btn btn-primary" value="Select Course"/>
    </div>
  </div>
  </div>
  </div><br>






  <div class="container-fluid"> 
    <div class="row">
      <div class="col-sm-1" style="background-color:white;">
        <input type=hidden name="ccg" value="CSCI670"> <p>MATH 151</p>
      </div>
      <div class="col-sm-2" style="background-color:white;">
    <input type="hidden" name="cg1" value="ComputerGraphics"><a href="#demo2" data-toggle="collapse">Fundamentals of Calculus</a>
    <div id="demo2" class="collapse">
  Applications of calculus to business and social science. Intuitive use of limits and continuity. Derivatives, extrema, concavity, and applications such as marginal analysis, business models, optimization of tax revenue, and minimization of storage cost. 
    </div>
      </div>
    <div class="col-sm-1" style="background-color:white;">
     <!-- <button type="button" name="cg" class="btn btn-primary">Select Course</button>  -->
     <input type="submit" name="cg" class="btn btn-primary" value="Select Course"/>
    </div>
  </div>
  </div>
  </div><br>






  <div class="container-fluid"> 
    <div class="row">
      <div class="col-sm-1" style="background-color:white;">
        <input type=hidden name="ccn" value="CSCI690"><p>MATH 161</p>
      </div>
      <div class="col-sm-2" style="background-color:white;">
    <input type="hidden" name="cn1" value="ComputerNetworks"><a href="#demo3" data-toggle="collapse">Basic Applied Calculus</a>
    <div id="demo3" class="collapse">
  An introduction to calculus and its applications. Topics include functions, limits, the derivative, tangent line, the chain rule, maxima and minima, curve sketching, applications, antiderivatives, fundamental theorem of calculus, integration by simple substitution, finding areas. 
    </div>
      </div>
          <div class="col-sm-1" style="background-color:white;">
     <!-- <button type="button" name="cn" class="btn btn-primary">Select Course</button>  -->
     <input type="submit" name="cn" class="btn btn-primary" value="Select Course"/>
    </div>
    </div>
  </div><br>

</form>
</body>
</html>
