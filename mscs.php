<?php
require 'connection.php';
session_start();
$stu = $_SESSION['stud'];
$result1 = mysqli_query($conn, 'SELECT Program, Department from studentreg where StudentID="'.$stu.'"');
	while($databorrow1=mysqli_fetch_Array($result1))
{
	 if($databorrow1[1]=='EE')
	{
		header("location:studavailablecourses_et.php");	
	}
	else if($databorrow1[1]=='MA')
	{
	header("location:studavailablecourses_ma.php");
	}
	else if($databorrow1[1]=='PH')
	{
	header("location:studavailablecourses_ph.php");
	}
	else if($databorrow1[1]=='CS')
	{
	header("location:studavailablecourses_cs.php");
	}
}

?>