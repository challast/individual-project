<?php
    require "session_auth.php";
    require "database.php";

    $username = $_SESSION['username'];
    $userInfo = getUserInfo($username);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Extract data from the form
    $name = isset($_POST["fullname"]) ? $_POST["fullname"] : $userInfo['fullname'];
    $additionalEmail = isset($_POST["additional_email"]) ? $_POST["additional_email"] : $userInfo['additional_email'];
    $phone = isset($_POST["phone"]) ? $_POST["phone"] : $userInfo['phone'];
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Change Profile</title>
  <script type="text/javascript">
      function displayTime() {
        document.getElementById('digit-clock').innerHTML = "Current time:" + new Date();
      }
      setInterval(displayTime,500);
  </script>
</head>
<body>
  <div class="container wrapper">
<div id="top"><!-- put any top content between here -->
  <h1>WAPH-Individual Project</h1>
</div>
<div class="wrapper">

<div id="main">
  <h1>Change Profile, facebook</h1>
  <h2>Facebook Application</h2>
  <div id="digit-clock"></div>  
<?php
  //some code here
  echo "Visited time: " . date("Y-m-d h:i:sa")
?>
<br>
 
  <form action="changeprofile.php" method="POST" class="form login">

 <!-- <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="form">
    Username: <?php echo htmlentities($_SESSION['username']); ?>
    <br>
 -->

    New Fullname: <input type="text" class="text_field" name="fullname" placeholder="Enter your fullname" id="fullname" value="<?php echo isset($userInfo['fullname']) ? $userInfo['fullname'] : ''; ?>"/> <br>
    New Email: <input type="text" class="email" name="additional_email" placeholder="Enter your email" id="additional_email" value="<?php echo isset($userInfo['additional_email']) ? $userInfo['additional_email'] : ''; ?>"/> <br>
    New Phone: <input type="text" id="phone" name="phone" class="phone" placeholder="Enter your phone number" id="phone" value="<?php echo isset($userInfo['phone']) ? $userInfo['phone'] : ''; ?>"/> <br>

    <button class="button" type="submit">Change Profile</button>
  </form>
  </center>
  </div>
  </div>
  </div>
</body>
</html>