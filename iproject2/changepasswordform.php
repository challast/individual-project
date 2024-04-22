<?php
  require "session_auth.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>WAPH- Change password</title>
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
  <h1>Change Password, WAPH</h1>
  <div id="digit-clock"></div>  
<?php
  //some code here
  echo "Visited time: " . date("Y-m-d h:i:sa");
  $rand = bin2hex(openssl_random_pseudo_bytes(16));
  $_SESSION['nocsrftoken'] = $rand;
?>
  <form action="changepassword.php" method="POST" class="form login">
    Username:<?php echo htmlentities($_SESSION['username']); ?> <br>
    Password: <input type="password" class="text_field" name="newpassword" />
    <input type="hidden" class="text_field" name="nocsrftoken" value="<?php echo $rand; ?>" /> <br>
    <button class="button" type="submit">Change Password</button>
  </form>
  </center>
  </div>
  </div>
  </div>
</body>
</html>
