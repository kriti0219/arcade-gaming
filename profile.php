<?php

session_start();
include('config/db_connect.php');

//check connection
if(!$conn){
    echo 'Connection error:' . mysqli_connect_error();
}
$conn->close();
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="icon" href="logo.png" type="image/icon type">
     <title>Profile</title>
 </head>
 <body>
 <?php echo $_SESSION['username']; ?>
 <br>
 <?php echo $_SESSION['userid']; ?>
 <br>
 <?php echo $_SESSION['useremail']?>
 <br>
 <?php echo $_SESSION['userpassword']; ?>

 </body>
 </html>