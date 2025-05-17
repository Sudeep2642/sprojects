<?php
session_start();

   include("connection.php");
   include("functions.php");
   require_once('config.php');

   $user_data = check_login($con);



?>


<!DOCTYPE html>
<html>
<head>
<title> signin system</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="Admin123.css">
</head>

<body>

    <div class ="login-form">
        <h2>Member Login</h2>
        <form method="POST">
            <div class ="input-field">
                <i class="fa fa-user"></i>
                <input type="text" placeholder="username" name="name">
            </div>
            <div class ="input-field">
                <i class="fa fa-unlock-alt"></i>
                <input type="text" placeholder="password" name="password">
            </div>

            <button name="Signin">Sign In</button>

            <div class="extra">
                <a href="#">Forgot Password ?</a>
                <a href="#">Create an Account</a>
            </div>
        </form>
    </div>

    <?php 
    
    if(isset($_POST['Signin']))
    {
        $query="SELECT * FROM `admin_login` WHERE 'name'='$_POST[name]' AND 'password'='$_POST[password]' ";
        $result=mysqli_query($con,$query);
        if(mysqli_num_rows($result)==1)
        {
            echo"<script>alert('Incorrect Password');</script>";
        }
        else
        {
            session_start();
            $_SESSION['AdminLoginId']=$_POST['name'];
            header("location: Admin Panel.php");
        }
    }
    
    ?>


</body>
</html>