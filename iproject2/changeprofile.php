<?php
    require "session_auth.php";
    require "database.php";

    $Username = $_SESSION['username'];
    $Fullname = $_REQUEST['fullname'];
    $Email = $_REQUEST['additional_email'];
    $Phone = $_REQUEST['phone'];
    
    if (isset($Username) && isset($Fullname) && isset($Email) && isset($Phone)){
       /* echo "Debug> changeprofile.php got username=$Username; fullname=$Fullname; email=$Email; phone=$Phone";*/
        if (changeprofile($Username, $Fullname, $Email, $Phone)) {
            echo "<script>alert('Profile has been updated')</script>";
        } else {
            echo "<script>alert('Update failed')</script>";    
        }
    } else {
        echo "<script>alert('Required fields are missing!')</script>";
    }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Website</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            background-color: lavender;
            margin: 0;
            padding: 0;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        #main {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            box-sizing: border-box;
            padding-top: 20px; /* Added top padding */
            padding-bottom: 20px; /* Added bottom padding */
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .button {
            width: 100%;
            padding: 10px;
            background-color: 
            color: #fff;
            border: none;
            border-radius: 0;
            cursor: pointer;
            font-size: 14px;
            font-family: 'Times New Roman', Times, serif;
        }
        .button a {
            color: #fff;
            text-decoration: none;
        }
        .button:hover {
            background-color: #4c3f63; /* Match button hover color with index.php */
        }
    </style>
  </head>
  <body>
    <div class="container wrapper">
        <div id="top">
            <h1>WAPH-Individual Project</h1>
        </div>
        <div class="wrapper">
            <div id="main">
                <h2>WAPH</h2>
                <h2>Individual Project</h2>
                <center>
                    <p>Heyyyyeahhh! your changes have been made. Please login again below</p>
                    <button class="button" type="submit"><a href="form.php">Login</a></button>
                </center>
            </div>
        </div>
    </div>
  </body>
</html>
