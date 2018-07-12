<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
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
    .footer {
      background-color: #f2f2f2;
      padding: 25px;
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

<div class="container">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="main3.png" alt="image1" style="width:100%;">
      </div>

      <div class="item">
        <img src="main1.png" alt="image2" style="width:100%;">
      </div>
    
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!--
<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-info">
        <div class="panel-heading">BLACK FRIDAY DEAL</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-info">
        <div class="panel-heading">BLACK FRIDAY DEAL</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
      </div>
    </div>
    
  </div>
</div><br>
-->

<!--
<footer class="container-fluid text-center">
  <p>Online Store Copyright</p>  
  <form class="form-inline">Get deals:
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Sign Up</button>
  </form>
</footer>
-->

</body>
</html>
