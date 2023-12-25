<?php

$name = $_REQUEST['name'];
  $email = $_REQUEST['email'];
  $password = $_REQUEST['password'];
  $message = $_REQUEST['message'];


 if(isset($_POST['btntest']))
 {
   
    $host="localhost";
    $user="root";
    $password="";
    $db="clinic_db";

    @$conn = mysqli_connect( $host,$user ,$password, $db  );

    $insert="insert into contact_us values('$name','$email','$password','$message')";


    mysqli_query( $conn, $insert);

    if($conn){
        echo("Done!");
    }
    else{
        echo("Failed!");
    }
 }
?>