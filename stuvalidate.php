<?php
require 'connection.php';
session_start();

if (isset($_POST['btlog'])) {
  
    $name = $_POST['stud'];
    $pass = $_POST['password'];
    
    //username and password for login page
    if( $name == "" && $pass == "")
    {
        
        //$_SESSION['uid']=$name;
        header('Location: ..\bl\stulogin.php') or die(" Error ");
    }
    $result = mysqli_query($conn, 'SELECT * FROM studentreg WHERE StudentID="'.$name.'" AND password="'.$pass.'"');
  	if (mysqli_num_rows($result) == 1) {
  	  $_SESSION['stud'] = $name;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: welcome.php');

  	}else {
  		echo "<script type='text/javascript'>alert('Invalid Login');</script>";
  	}
  }

?>
