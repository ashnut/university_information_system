<?php
require 'connection.php';
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Research Project</title>
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

            <li><a href="profcoursestaken.php">Courses taken</a></li>

            <li  class="active"><a href="profresearch.php">Research projects</a></li>
            
            <li><a href="profexamschedule.php">Exam Schedule</a></li>


          </ul>
            
          <ul class="nav navbar-nav navbar-right">
           <li><a href="proflogout.php">Logout</a></li>
          </ul>
    </div>
  </div>
</nav>

<div class = "tableOuter">
  <div class = "tableInner">
    <div id="tableContainer-1">
      <div id="tableContainer-2">
        <table id="myTable" border>

          <?php 

          require "connection.php";

            $pid = $_SESSION['profid1'];
            //$PF = $_POST['money1'];

            $sql = mysqli_query($conn, 'SELECT RID, Rtopic, RDesc, Fund FROM research WHERE PID="'.$pid.'"'); 

            
             echo"<tr><td>Research ID<td>Research Topic<td>Description<td>Fund<td></tr>";

              while($data=mysqli_fetch_Array($sql))
              {
                 
                  echo "<tr>";
                  echo "<td> $data[0] </td> ";
                  echo "<td> $data[1] </td> ";
                   echo "<td> $data[2] </td> ";
                    echo "<td> $data[3] </td> ";
              }

           ?>
      </div>
    </div>
  </div>
</div>


 



</body>
</html>
