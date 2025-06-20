<?php
session_start();

   include("connection.php");
   include("functions.php");
   require_once('config.php');

   $user_data = check_login($con);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>

    <style>
        body{
            margin:0px;
        }
        div.header{
            font-family:poppins;
            display:flex;
            justify-content:space-between;
            align-items:center;
            padding:0px 60px;
            background-color: #5bd1d7;
        }
        div.header button{
            background-color: #f0f0f0;
            font-size: 16px;
            font-weight: 550;
            padding: 8px 12px;
            border: 2px solid black;
            border-radius: 5px;
        }
    </style>
</head>
<body>

  <div class="header">
    <h1>WELCOME TO ADMIN PANEL - <?php echo $_SESSION['AdminLoginId']?></h1>
    <form method="POST">
    <button name="Logout">LOG OUT</button>
    </form>
  </div>

  <?php 
    if(isset($_POST['Logout']))
    {
        session_destroy();
        header("location: Admin123.php");
    }
  ?>
    
</body>
</html>