<?php 

require 'connection.php';
session_start();

if(isset($_POST['btpreg']))
{
	$PID = $_POST['profid'];
	$PF = $_POST['pfname'];
  $PL = $_POST['plname'];
  $PS = $_POST['psex'];
  $PA = $_POST['padd'];
  $PC = $_POST['pcity'];
  $PSt = $_POST['pstate'];
	$PE = $_POST['pmail'];
	$PP = $_POST['ppass'];
	$sql = mysqli_query($conn, "INSERT INTO prof(PID ,FirstName , LastName, Pemail, Password, Sex, Address, City, State) VALUES 
    ('$PID', '$PF', '$PL', '$PE', '$PP', '$PS', '$PA' , '$PC', '$PSt')"); 
}

if(isset($_POST['btplog']))
{
  $prof_name = $_POST['profid1'];
    $prof_pass = $_POST['ppassword'];



if( $prof_name == "" && $prof_pass == "")
    {
        
        //$_SESSION['uid']=$name;
        header('Location: proflogin.php') or die(" Error ");
    }

    
    $result = mysqli_query($conn, 'SELECT * FROM prof WHERE PID="'.$prof_name.'" AND Password="'.$prof_pass.'"');
  	// while($dat=mysqli_fetch_array($result))
   //  {
   //    echo "$dat[0]";
   //    echo "$dat[1]";
   //  }


    if (mysqli_num_rows($result) == 1) {
  	   $_SESSION['profid1'] = $prof_name;
  	  // $_SESSION['success'] = "You are now logged in";
  	  header('location: profwelcome.php');

  	}else {
  		echo "<script type='text/javascript'>alert('Invalid Login');</script>";
  	}
  
}

$conn->close();
?>