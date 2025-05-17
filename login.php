<?php
session_start();

include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {

        //read from database
        $query = "SELECT * from loginpage where user_name = '$user_name' limit 1";
        $result = mysqli_query($con, $query);

        if($result)
        {
            if($result && mysqli_num_rows($result) > 0)
            {
                $user_data = mysqli_fetch_assoc($result);
                
                if($user_data['password'] === $password)
                {

                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: index.php");
                    die;
                }
            }
        }
        
        echo "<script>alert('wrong username or password!');</script>";
    }else
    {
        echo "<script>alert('wrong username or password!');</script>";
    }
}

?>


<!DOCTYPE html>
<html>
<head>
<title> signin system</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="Dstyle.css">
</head>

<body>

    <div class ="login-form">
        <h2>Member Login</h2>
        <form method="post">
            <div class ="input-field">
                <i class="fa fa-user"></i>
                <input type="text" name="user_name" placeholder="username">
            </div>
            <div class ="input-field">
                <i class="fa fa-unlock-alt"></i>
                <input type="password" name="password" placeholder="password">
            </div>

            <input type="submit" value="Login">

            <div class="extra">
                <a href="#">Forgot Password ?</a>
                <a href="signup.php">Create an Account</a>
            </div>
        </form>
    </div>
</body>
</html>