<?php
  $name = $_REQUEST['name'];
  $doctor = $_REQUEST['doctor'];
  $service = $_REQUEST['service'];
  $date = $_REQUEST['date'];


 if(isset($_POST['btntest1']))
 {
   
    $host="localhost";
    $user="root";
    $password="";
    $db="clinic_db";

    @$conn = mysqli_connect( $host,$user ,$password, $db  );

    $insert="insert into patients values('$name','$doctor' ,'$service','$date' )";

    mysqli_query( $conn, $insert);

    if($conn){
        echo("Booking done!");
    }
    else{
        echo("Failed!");
    }
 }



 
 
    
?>