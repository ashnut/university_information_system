<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
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

<div class="jumbotron">
  <div class="container text-center">
    <h1>University Information System</h1>      <br> <br>

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
      <a class="navbar-brand" href="#">Logo</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        
        <li class="active"><a href="#">Home</a></li>

        <li><a href="#">About us</a></li>

        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Program
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Bachelors</a></li>
          <li><a href="#">Masters</a></li>
        </ul>
      </li> 

      </ul>
      <ul class="nav navbar-nav navbar-right">
         <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Register/Login
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          
          <li><a href="#">Student</a></li>
          <li><a href="#">Professor</a></li>
          <li><a href="#">Admin</a></li>
        </ul>
      </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid"> 
  <div class="row">
    <div class="col-sm-1" style="background-color:white;">
      <p>CSCI 665</p>
    </div>
    <div class="col-sm-2" style="background-color:white;">
	<a href="#demo1" data-toggle="collapse">Software Engineering</a>
	<div id="demo1" class="collapse">
	Techniques for the development and implementation of high-quality digital computer software are presented. Major areas covered in the course include software quality factors and metrics, software development outlines and specification languages, top-down vs. bottom-up design and development, complexity, testing and software reliability. 
	</div>
    </div>
   
  </div>
</div><br><div class="container-fluid"> 
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

</div><br><div class="container-fluid"> 
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

<div class="container-fluid"> 
  <div class="row">
    <div class="col-sm-1" style="background-color:white;">
      <p>CSCI 755</p>
    </div>
    <div class="col-sm-7" style="background-color:white;">
	<a href="#demo4" data-toggle="collapse">Artificial Intelligence</a>
	<div id="demo4" class="collapse">
	This course will cover machine learning (ML) concepts, decision theory, classification, clustering, feature selection, and feature extraction. Emphasis is on the core idea and optimization theory behind ML methods. Important ML applications (including biometrics and anomaly detection) will also be covered. 
	</div>
    </div>
  </div>
</div><br>

<div class="container-fluid"> 
  <div class="row">
    <div class="col-sm-1" style="background-color:white;">
      <p>CSCI 760</p>
    </div>
    <div class="col-sm-7" style="background-color:white;">
	<a href="#demo5" data-toggle="collapse">Database Systems</a>
	<div id="demo5" class="collapse">
	Design and implementation of databases. Hierarchal and network concepts; relational databases systems; entity relationship model: query languages; relational design theory; security and authorization; access methods; concurrency control backup and recovery. 
	</div>
    </div>
  </div>
</div> <br> 

<div class="container-fluid"> 
  <div class="row">
    <div class="col-sm-1" style="background-color:white;">
      <p>CSCI 620</p>
    </div>
    <div class="col-sm-7" style="background-color:white;">
	<a href="#demo6" data-toggle="collapse">Operating System Security</a>
	<div id="demo6" class="collapse">
	In this course students are introduced to advanced concepts in operating systems with emphasis on security. Topics include the application of policies for security administration, directory services, file system security, audit and logging, cryptographic enabled applications, cryptographic programming interfaces, and operating system integrity verification techniques.
	</div>
    </div>
  </div>
</div> <br> 



</body>
</html>
