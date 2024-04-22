<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>HomePage</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f2f5;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 600px;
      margin: 50px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    #top {
      text-align: center;
    }
    h1 {
      font-size: 24px;
      margin-bottom: 20px;
      color: #1877f2;
    }
    #main {
      text-align: center;
    }
    h2 {
      font-size: 20px;
      margin-bottom: 10px;
    }
    .button {
      padding: 10px 20px;
      background-color: #1877f2;
      color: #fff;
      border: none;
      border-radius: 5px;
      text-decoration: none;
      font-size: 16px;
      margin: 5px;
    }
    .button:hover {
      background-color: #166fe5;
    }
  </style>
</head>
<body>
  <div class="container wrapper">
    <div id="top"><!-- put any top content between here -->
      <h1>WAPH-Individual Project</h1>
    </div>
    <div class="wrapper">
      <div id="main">
        <h2>Welcome <?php echo htmlentities($_SESSION['username']); ?>!</h2>
        <button class="button" type="submit"><a href="changepasswordform.php">Change password</a></button> | 
        <button class="button" type="submit" name="edit"><a href="profile.php">Edit profile</a></button> | 
        <button class="button" type="submit"><a href="logout.php">Logout</a></button>
        <script src="index.js"></script>
      </div>
    </div>
  </div>
</body>
</html>
