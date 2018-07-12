<!-- <?php 

// echo "Hi ".$_SESSION['stud'];

?>
 -->

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Software</title>
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
     .soft{
      text-align: center;
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
        
            
           

            <li><a href="mscs.php">Available courses</a></li>

            <li><a href="studcoursestaken.php">Courses taken</a></li>
            <li><a href="studexamschedule.php">Exam Schedule</a></li>

            <li class="active"><a href="software.php">List of Software</a></li>

          </ul>
            
          <ul class="nav navbar-nav navbar-right">
           <li><a href="logout.php">Logout</a></li>
          </ul>
    </div>
  </div>
</nav>

<h3><b> Hello, these are the list of software available for <?php require 'connection.php';
session_start(); echo $_SESSION['stud']; ?> </h3></b><br><br>

<div class = "soft">
<a href="https://support.office.com/en-us/article/Download-and-install-or-reinstall-Office-365-or-Office-2016-on-a-PC-or-Mac-4414EAAF-0478-48BE-9C42-23ADC4716658?ui=en-US&rs=en-US&ad=US"> Office 365 </a>
<br><br>
<a href="https://www.mathworks.com/support/install-matlab.html"> MATLAB </a>
<br><br>
<a href="https://us.norton.com/downloads"> Norton Anti Virus </a>
<br><br>
<a href="https://www.visualstudio.com/downloads/?utm_source=mscom&utm_campaign=msdocs"> Visual Studio Enterprise </a>
<br><br>
<a href="https://msofficeworks.com/product/microsoft-windows-10-professional-64-bit-instant-download?gclid=EAIaIQobChMIpp-RtNeM2AIVlI2zCh02Ww1JEAQYASABEgLUL_D_BwE"> Windows OS </a>
</div>
</body>
</html>

