<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
</head>
<body>

<?php
$errors = array();
if(isset($_POST['btreg']))
   {	print_r($_POST);
  
  /* $N = $_POST['username'];
   $P = $_POST['password'];
   $C = $_POST['passwordc'];
   $E = $_POST['emailid'];
   $Ph = $_POST['phone'];*/
   if(empty($_POST['username']))
   {
	   $errors['username1'] = "This field cannot be empty! ";
	   echo $errors['username1'];
   }
   if(strlen($_POST['username']) > 8)
   {
	   $errors['username2'] = "Your username must be atmost 8 characters long";
	   echo $errors['username2'];
   }
    if(empty($_POST['password']))
   {
	   $errors['password1'] = "This field cannot be empty! ";
	   echo $errors['password1'];
   }
   if(strlen($_POST['password']) < 6)
   {
	   $errors['password2'] = "Your password must be atleast 6 characters long";
	   echo $errors['password2'];
   }
   if(empty($_POST['passwordc']))
   {
	   $errors['passwordc1'] = "This field cannot be empty!";
	   echo $errors['passwordc1'];
   }
    if($_POST['password'] != $_POST['passwordc'])
   {
	   $errors['passwordc2'] = "Your passwords do not match";
	   echo $errors['passwordc2'];
   }
    if(empty($_POST['emailid']))
   {
	   $errors['emailid1'] = "This field cannot be empty!";
	   echo $errors['emailid1'];
   }
     if(empty($_POST['phone']))
   {
	   $errors['phone1'] = "This field cannot be empty! ";
	   echo $errors['phone1'];
   }
   if(!is_numeric($_POST['phone']))
   {
	   $errors['phone2'] = "Phone number should be in digits! ";
	   echo $errors['phone2'];
   }
    if(strlen($_POST['phone']) != 10 )
   {
	   $errors['phone3'] = "Phone number should 10 digit long! ";
	   echo $errors['phone3'];
   }
   
   
   
   }
	//	$sql = mysqli_query($conn, "INSERT INTO user(Name, Password, EmailID,Phone) VALUES ('$N', '$P','$E','$Ph')");
		//	echo "New record created successfully";
	
	 /*if ($_SERVER["REQUEST_METHOD"] == "POST") 
	 	{
            if (strlen($_POST["username"]) < 6) 
            {
               $N = "Name is required";
            }
        }*/
	/*if($P ==$C)
	{
		$C = "Equal"
	}*/ 
	
	
		
            	

 
?>

<form method =post action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
	Name: <input type="text" name ="username" value="<?php if(isset($_POST['username'])) echo $_POST['username']; ?>" />   <br> <br>	
	<p> <?php  if(isset($errors['username1'])) echo $errors['username1']; ?> <?php  if(isset($errors['username2'])) echo $errors['username2']; ?></p>
	EmailID: <input type="email" name ="emailid" value="<?php if(isset($_POST['emailid'])) echo $_POST['emailid']; ?>" />  <br> <br>	
	<p> <?php  if(isset($errors['emailid1'])) echo $errors['emailid1']; ?> </p>
	Password: <input type="password" name ="password" value="<?php if(isset($_POST['password'])) echo 	$_POST['password']; ?>" />  <br> <br>
	<p> <?php  if(isset($errors['password1'])) echo $errors['password1']; ?> <?php  if(isset($errors['password2'])) echo $errors['password2']; ?></p>
	Confirm Password: <input type="password" name ="passwordc" value="<?php if(isset($_POST['passwordc'])) echo $_POST['passwordc']; ?>"/>  <br> <br>	
	<p> <?php  if(isset($errors['passwordc1'])) echo $errors['passwordc1']; ?> <?php  if(isset($errors['passwordc2'])) echo $errors['passwordc2']; ?></p>
	Phone Number: <input type="text" name="phone" value="<?php if(isset($_POST['phone'])) echo $_POST['phone']; ?>" /> <br> <br>
	<p> <?php  if(isset($errors['phone1'])) echo $errors['phone1']; ?> <?php  if(isset($errors['phone2'])) echo $errors['phone2']; ?> <?php  if(isset($errors['phone3'])) echo $errors['phone3']; ?></p>
	
	Term: <select>
		<option value="sp">Spring 2018</option>
  		<option value="su">Summer 2018</option>
  		</select> <br> <br>
	<input type = "submit" value = "Register" name="btreg" onclick=popfunction()/>
	<input type = "submit" value = "Login" name= "btlog" onclick="window.location.href='login.php'" />
	<script>
		function popfunction()
		{
			alert("Registered Successfully");
		}
	</script>
</form>
</body>
</html>

