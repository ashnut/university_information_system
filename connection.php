<?php

$conn = mysqli_connect("localhost", "root", "", "univ");


// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
//echo "Succesful";
?>