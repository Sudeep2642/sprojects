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

            //save to database
            $user_id = random_num(20);
            $query = "insert into loginpage (user_id,user_name,password) values ('$user_id','$user_name','$password')";

            mysqli_query($con, $query);

            header("Location: login.php");
            die;
        }else
        {
            echo "please enter some valid infromation!";
    
        }
    }

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
</head>
<body>

     <style type="text/css">

body{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background-color: lavender;
    background-size: cover;
	background-position: center;
	height: 100vh;
}
.btn{
	margin-top: 5px;
	display: flex;
}
.btn img{
	width: 40px;
	margin-right: 25px;
}
.box{
    width: 300px;
    padding: 40px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: #191919;
    text-align: center;
}
.box h1{
    color: #fff;
    text-transform: uppercase;
    font-weight: 500;
}
.box input[type ="text"],.box input[type ="password"]{
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #3498db;
    padding: 14px 10px;
    width: 200px;
    outline: none;
    color:#fff;
    border-radius: 24px;
    transition: 0.25s;
}
.box input[type = "text"]:focus,.box input[type = "password"]{
    width: 200px;
    border-color:#2ecc71 ;
}
.box input[type = "submit"]{
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #3498db;
    padding: 14px 40px;
    outline: none;
    color:#fff;
    border-radius: 24px;
    transition: 0.25s;
    cursor: pointer;
}
.box input[type = "submit"]:hover{
    background: #2ecc71;
}

</style>

    <form class="box" method="post">
        <h1>Sign Up
        </h1>
        <input type="text" name="user_name" placeholder="enter your email">
        <input type="password" name="password" placeholder="Password">
        <input type="submit"  value="Signup">
        <a href="login.php">Click to Login</a><br><br>
    </form>
</body>
</html>