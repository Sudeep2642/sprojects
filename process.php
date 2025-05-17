<?php
include("config.php")
?>
<?php

if(isset($_POST)){
    $firstname = $_POST['firstname'];
    $lastname  = $_POST['lastname'];
    $info      = $_POST['info'];
    $email     = $_POST['email'];
    $number    = $_POST['number'];
    $date      = $_POST['date'];
    $guest     = $_POST['guest'];
    $table_type  = $_POST['table_type'];

    $sql = "INSERT INTO resto (firstname, lastname, info, email, number, date, guest, table_type) VALUES('$firstname','$lastname','$info','$email','$number','$date','$guest','$table_type')";
    $stmtinsert = $db->prepare($sql);
    $result = $stmtinsert->execute([$firstname, $lastname, $info, $email, $number, $date, $guest, $table_type]);
    if($result){
      echo 'Successfully Saved.';
    }else{
        echo 'The data has been successfully saved.';
    }
}else{
    echo 'saved data';
}