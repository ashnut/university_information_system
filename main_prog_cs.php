<!DOCTYPE html>
<html lang="en">
<head>
  <title>Computer Science</title>
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
   
    /* Add a gray background: kground color and some padding to the footer */
   /* footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
*/
    .parent {display: block;position: relative;float: left;line-height: 30px;background-color: #FEFEFE;border-right:#CCC 1px solid;}
    .parent a{margin: 10px;color: #FEFEFE;text-decoration: none;}
    .parent:hover > ul {display:block;position:absolute;}
    .child {display: none;}
    .child li {background-color: #E4EFF7;line-height: 30px;border-bottom:#CCC 1px solid;border-right:#CCC 1px solid; width:100%;}
    .child li a{color: #000000;}
    ul{list-style: none;margin: 0;padding: 0px; min-width:13em;}
    ul ul ul{left: 100%;top: 0;margin-left:1px;}
    li:hover {background-color: #95B4CA;}
    .parent li:hover {background-color: #F0F0F0;}
    .expand{font-size:12px;float:right;margin-right:5px;}


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
        
        <li class="active"><a href="mainpage.php">Home</a></li>

        <li><a href="main_aboutus.php">About us</a></li>

        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Program
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
     
          <li class="parent"><a href="#">Masters<span class="expand" style="padding-left:20px">»</span></a>
          <ul class="child">
          <li><a href="main_prog_cs.php">Computer Science</a></li>
          <li><a href="main_prog_et.php">Electrical Technology</a></li>

          </ul>
          </li>
          <li class="parent"><a href="#">Bachelors <span class="expand" style="padding-left:7px">»</span></a>
          <ul class="child">
          <li><a href="main_prog_ma.php">Mathematics</a></li>
          <li><a href="main_prog_ph.php">Physics</a></li>
          </ul>
          </li>

        </ul>
      </li> 

       

      </ul>
      <ul class="nav navbar-nav navbar-right">
         <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Register/Login
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          
          <li><a href="stulogin.php">Student</a></li>
          <li><a href="proflogin.php">Professor</a></li>
          <li><a href="adminlogin.php">Administrative staff</a></li>
        </ul>
      </li>
      </ul>
    </div>
  </div>
</nav>
<font size="4">
<div class="container-fluid"> 
  <div class="row">
    <div class="col-sm-1" style="background-color:white;">
      <p>CSCI 665</p>
    </div>
    <div class="col-sm-7" style="background-color:white;">
	<a href="#demo1" data-toggle="collapse">Software Engineering</a>
	<div id="demo1" class="collapse">
	Techniques for the development and implementation of high-quality digital computer software are presented. Major areas covered in the course include software quality factors and metrics, software development outlines and specification languages, top-down vs. bottom-up design and development, complexity, testing and software reliability. 
	</div>
  </div>
    </div>
    </div><br>

<div class="container-fluid"> 
  <div class="row">
    <div class="col-sm-1" style="background-color:white;">
      <p>CSCI 670</p>
    </div>
    <div class="col-sm-7" style="background-color:white;">
  <a href="#demo2" data-toggle="collapse">Computer Graphics</a>
  <div id="demo2" class="collapse">
  Introduction to display system parameters; comparison of information retrieval and document retrieval; digitizing as an input process; picture models and data structures; display software; applications, hands-on laboratory experience. 
  </div>
    </div>
  </div>

</div><br>
<div class="container-fluid"> 
  <div class="row">
    <div class="col-sm-1" style="background-color:white;">
      <p>CSCI 690</p>
    </div>
    <div class="col-sm-7" style="background-color:white;">
  <a href="#demo3" data-toggle="collapse">Computer Networks</a>
  <div id="demo3" class="collapse">
  Connection of multiple systems in a networked environment. Topics include physical connection alternatives, error management at the physical level, commercially available protocol support, packet switching, LANs, WANs and Gateways. 
  </div>
    </div>
  </div>
</div><br>

</font>

</body>
</html>
