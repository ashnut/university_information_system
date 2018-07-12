<!DOCTYPE html>
<html lang="en">
<head>
  <title>About us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      /*margin-bottom: 50px;*/
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    
    }
   
    /* Add a gray background color and some padding to the footer */
    .footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    .bg-1 { 
      background-color: #000001;
      color: #fefefe;
    }
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
        
        <li><a href="mainpage.php">Home</a></li>

        <li class="active"><a href="#">About us</a></li>

      

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
          <li><a href="adminlogin.php">Administrative staff</a></li>\
        </ul>
      </li>
      </ul>
    </div>
  </div>
</nav>
<br>
  <div class="container-fluid bg-1 text-center" >
    <h3> <i> At NYIT, we think outside THE BOX and transform imagination into action.</i> </h3>
    <img src="main_aboutus.jpg"  width="800" >
    <h3>
Explore New York Institute of Technology—a dynamic, highly ranked, and accredited not-for-profit university committed to educating the next generation of leaders, and to inspiring innovation and advancing entrepreneurship.
Our 10,000 students representing 50 states and 100 countries at campuses around the world become engaged, technologically savvy physicians, architects, scientists, engineers, business leaders, digital artists, health care professionals, and more.</h3>
  </div>

</body>
</html>