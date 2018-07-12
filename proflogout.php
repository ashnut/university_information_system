<?php

session_start();
session_destroy();
echo "You have been logged out successfully ".$_SESSION['profid1'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Logout</title>
</head>
<body>
	<br><br><br>
<a href="mainpage.php">Go Back to Mainpage</a> 
</body>
</html>