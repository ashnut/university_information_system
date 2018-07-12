<?php

require 'connection.php';
if (isset($_POST['btreg'])) {

$name = $_POST['number'];
echo "HI";
$sql = mysqli_query($conn, "UPDATE purchase SET Count= '$name' where SoftwareName = 'Office365'"); 
echo "Success";
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Software Purchase</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
      
    html, body {
      height: 100%;
    }
    #tableContainer-1 {
      height: 100%;
      width: 100%;
      display: table;
    }
    #tableContainer-2 {
      vertical-align: middle;
      display: table-cell;
      height: 100%;
    }
    #myTable {
      margin: 0 auto;
    }
    .tableOuter
    {
     text-align: center;
    }
    .tableInner
    {
      text-align: center;
      margin-left: auto;
      margin-right: auto;
    }


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

<form method="post" action="calculate.php">
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
        

            <li><a href="purchase.php">Purchase Software</a></li>
            

          </ul>
            
          <ul class="nav navbar-nav navbar-right">
           <li><a href="adminlogout.php">Logout</a></li>
          </ul>
    </div>
  </div>
</nav>


  <div class="container-fluid"> 
    <div class="row">
      <div class="col-sm-1" style="background-color:white;">
        <p>S1|</p>
      </div>
      <div class="col-sm-2" style="background-color:white;">
        <label class="s1">Office 365</label>
        <input type="text" name="number"  />
      </div>
    </div>
  </div><br>

  <div class="container-fluid"> 
    <div class="row">
      <div class="col-sm-1" style="background-color:white;">
        <p>S2|</p>
      </div>
     <div class="col-sm-2" style="background-color:white;">
        <label class="s1">MATLAB</label>
        <input type="text" name="number1"  />
      </div>
     </div>
  </div> <br> 

  <div class="container-fluid"> 
    <div class="row">
      <div class="col-sm-1" style="background-color:white;">
        <p>S3|</p>
      </div>
     <div class="col-sm-2" style="background-color:white;">
        <label class="s1">Norton Virus</label>
        <input type="text" name="number2"  />
      </div>
     </div>
  </div> <br> 

  <div class="container-fluid"> 
    <div class="row">
      <div class="col-sm-1" style="background-color:white;">
        <p>S4|</p>
      </div>
     <div class="col-sm-4" style="background-color:white;">
        <label class="s1">Visual Studio Enterprise</label>
        <input type="text" name="number3"  />
      </div>
     </div>
  </div> <br> 

  <div class="container-fluid"> 
    <div class="row">
      <div class="col-sm-1" style="background-color:white;">
        <p>S5|</p>
      </div>
     <div class="col-sm-2" style="background-color:white;">
        <label class="s1">Windows OS</label>
        <input type="text" name="number4"  />
      </div>
     </div>
  </div> <br>
  <input type="submit" value="Submit" name="btreg" class="btn btn-primary"/> 
  
</form>
</body>
</html>




