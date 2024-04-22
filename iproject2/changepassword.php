
<?php
	require "session_auth.php";
	require "database.php";
	$token =$_POST['nocsrftoken'];
	if(!isset($token) or $token!=$_SESSION['nocsrftoken']){
		echo "<script>alert('CSRF Attack is detected!')</script>";
		die();
	}  
	$username = $_SESSION["username"];
	$password = $_REQUEST["newpassword"]; 
	if (isset($username) and isset($password)){
		echo "Debug> changepassword.php got username=$username;newpassword=$password";
		if(changepassword($username,$password)){
			echo "<script>alert('password has been changed!')</script>";
		}else{
			echo "<script>alert('change password failed!')</script>";
		}
	}else{
		echo "<script>alert('No username/password provided!')</script>";
	}
  	
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Website</title>
    
  </head>
  <body>
<div class="container wrapper">
<div id="top"><!-- put any top content between here -->
  <h1>WAPH-Individual Project</h1>
</div>
<div class="wrapper">

<div id="main">
    <p> Hi your changes have been made Please login again below</p>
	<button class="button" type="submit"><a href="form.php">Login</a></button>
	</center>
  </div>
  </div>
  </div>

  </body>
</html>