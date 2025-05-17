<?php 
        
            include 'dbcon.php';
            
            $firstname = $_POST['firstname'];
            $lastname  = $_POST['lastname'];
            $info      = $_POST['info'];
            $email     = $_POST['email'];
            $number    = $_POST['number'];
            $date      = $_POST['date'];
            $guest     = $_POST['guest'];
            $table_type  = $_POST['table_type'];

        
        $query="INSERT INTO `beauty`.`resto` ( `firstname`,`lastname`, `info`, `email`, `number`,`date`, `guest`,`table_type`) 
        VALUES ('$firstname', '$lastname', '$info', '$email', '$number', '$date', '$guest', '$table_type');";

    
        $result= mysqli_query($con, $query);
        if($result){
            echo " <script> alert ('inserted'); </script>";
            ?>
            
            <?php
        }
        else {
                echo "<script> alert ('failed'); </script>";
             }
        
        
        
        ?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
       <!-- <link rel="stylesheet" href="appointment 1.css"> -->
       <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
    </head>
    <body>

    <!--<a href="logout.php" class="btn btn-info btn-lg">
        <span class="glyphicon glyphicon-log-out"></span>Logout</a>-->

    <style type="text/css">
    *{
    margin: 0;
    padding: 0;
}
body{
    background-image:url(images/resto.jpg);
    background-position: center;
    background-size: cover;*/
    font-family: sans-serif;
    margin-top: 40px;
}

.banner-btn{
	margin: 10px auto 0;
}
.banner-btn a{
	font-size:20px;
	font-family: 'Kaushan Script',cursive ;
	width: 150px;
	text-decoration: none;
	text-align: center;
	display: inline-block;
	margin: 0 10px;
	padding: 1px 0;
	color: #fff ;
	/*border:0.5px solid black;*/
	position: relative;
	z-index: 1;
	transition:color 0.5s;
}

.regform{
    width: 800px;
    background-color: rgb(0,0,0,0.5);
    margin: auto;
    color:white;
    padding: 10px 0px 10px 0px;
    text-align: center;
    border-radius: 15px 15px 0px 0px;
}
.main{
    background-color: rgb(0,0,0,0.5);
    width: 800px;
    margin: auto;
}
form{
    padding: 10px;
}
#name{
    width: 100%;
    height: 100px;
}
.name{
    margin-left: 25px;
    margin-top: 30px;
    width: 125px;
    color:white;
    font-size: 18px;
    font-weight: 700;
}
.firstname{
    position: relative;
    left: 200px;
    top: -37px;
    line-height: 40px;
    border-radius: 6px;
    padding: 0 22px;
    font-size: 16px;
    color: black;
}
.lastname{
    position: relative;
    left: 400px;
    top: -80px;
    line-height: 40px;
    border-radius: 6px;
    padding: 0 22px;
    font-size: 16px;
    color: #000;
}
.firstlabel{
    position: relative;
    color: #e5e5e5;
    text-transform: capitalize;
    font-size: 14px;
    left: 492px;
    top: -76px;
}
.lastlabel{
    position: relative;
    color: #e5e5e5;
    text-transform: capitalize;
    font-size: 14px;
    left: 492px;
    top: -76px;
}
.info{
    position: relative;
    left: 200px;
    top: -40px;
    line-height: 40px;
    width: 470px;
    border-radius: 6px;
    padding: 0 22px;
    font-size: 16px;
    color: #555;
}
.email{
    position: relative;
    left: 200px;
    top: -30px;
    line-height: 40px;
    width: 470px;
    border-radius: 6px;
    padding: 0 22px;
    font-size: 16px;
    color: #555;
}
/*.code{
    position:relative;
    left: 200px;
    top: -37px;
    line-height: 40px;
    width: 95px;
    border-radius: 6px;
    padding: 0 22px;
    font-size: 16px;
    color:black;
}*/
.phone{
    position:relative;
    left: 200px;
    top: -37px;
    line-height: 40px;
    width: 320px;
    border-radius: 6px;
    padding: 0 22px;
    font-size: 16px;
    color:black;
}
/*.area-code{
    position: relative;
    color:white;
    text-transform: capitalize;
    left: 54px;
    top: -4px;
}*/
.phone-number{
    position: relative;
    color:white;
    text-transform: capitalize;
    left: -100px;
    top: -4px;
}

.date{
    position: relative;
    left: 200px;
    top: -30px;
    line-height: 40px;
    width: 320px;
    border-radius: 6px;
    padding: 0 22px;
    font-size: 16px;
    color: #555;
}

.guest{
    position: relative;
    left: 200px;
    top: -30px;
    line-height: 40px;
    width: 320px;
    border-radius: 6px;
    padding: 0 22px;
    font-size: 16px;
    color: #555;
}

.option{
    position: relative;
    left: 200px;
    top: -37px;
    line-height: 40px;
    width: 320px;
    height: 40px;
    border-radius: 6px;
    padding: 0 22px;
    font-size: 16px;
    color: #555;
    outline: hidden;
}

.option option{
    font-size: 20px;
}
button {
    background-color: #3BAF9F;
    display: block;
    margin: 20px 0px 0px 20px;
    text-align: center;
    border-radius: 12px;
    border: 2px solid #366473;
    padding: 14px 90px;
    color: #FFFFFF;
    cursor: pointer;
    transition: 0.25px ease;
}
    </style>

    <div>
    <?php
    
    ?>

<div class="banner-btn">
                    <a href="logout.php">Logout</a>
                </div>

        <div class="regform"><h1>Table Reservation</h1></div>
        <div class="menu">
            <form action="index.php" method="post">
                <div id="name">
                    <h2 class="name">Name</h2>
                    <input class="firstname" id="firstname" type="text" name="firstname" placeholder="firstname" required><br>
                    <label class="firstlabel">first name</label>
                    <input class="lastname" id="lastname" type="text" name="lastname" placeholder="lastname" required>
                    <label class="lastlabel"></label>
                    </div>
                    <h2 class="name">Address</h2>
                    <input class="info" id="info" type="text" name="info" placeholder="enter your address" required>
                    <h2 class="name">Email</h2>
                    <input class="email" id="email" type="text" name="email" placeholder="enter your email" required>

                    <h2 class="name">Phone No </h2>
                    <!--<input class="code" type="text" name="areacode" placeholder="+91">
                    <label class="area-code">Area Code</label>-->
                    <input class="phone" id="number" type="text" name="number" placeholder="enter your mobile number" required>

                    <h2 class="name">Date & Time</h2>
                    <input class="date" id="date" type="datetime-local" name="date" placeholder="select date" required>

                    <h2 class="name">No. of Guests</h2>
                    <input class="guest" id="guest" type="text" name="guest" placeholder="no.of guests" required>
                    

                    <h2 class="name"> Tables</h2>
                    <select class="option" id="services" name="table type">
                        <option disabled="disabled" selected="selected">---Choose Option</option>
                        <option>Family Dinning table</option>
                        <option>outdoor Table</option>
                        <option>Wooden table</option>
                        <option>Booths</option>
                        <option></option>

                    </select>
                    
                    <button class="submit" id="register" name="create">Submit</button>

            </form>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script> 
<script type="text/javascript">
$(function(){
    $('#register').click(function(e){

        var valid = this.form.checkValidity();
        if(valid){


            var firstname = $('#firstname').val();
            var lastname  = $('#lastname').val();
            var info      = $('#info').val();
            var email     = $('#email').val();
            var number    = $('#number').val();
            var date      = $('#date').val();
            var guest     = $('#guest').val();
            var table_type = $('#table_type').val();

            e.preventDefault();

            $.ajax({
                type: 'POST',
                url: 'process.php',
                data: {firstname: firstname,lastname: lastname,info: info,email: email,number: number,date: date,
                guest: guest,table_type: table_type},
                success: function(data){
                    swal.fire({
                         'title': 'Successful',
                         'text': 'Successfully saved the data',
                         'type': 'success'
                         })

                },
                error: function(data){
                    swal.fire({
                          'title': 'Errors',
                          'text': 'There were while saving the data',
                          'type': 'error'
                         })

                }
            });

            
        }else{
           
        }



    });

    
}); -->

<!-- </script>            -->

    </body>
</html>
      
