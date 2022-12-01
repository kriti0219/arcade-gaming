<?php 
session_start();
include('config/db_connect.php');
$confirm_email=$_SESSION['useremail'];
$confirm_name=$_SESSION['username'];
$confirm_password=$_SESSION['userpassword'];
$sql = "INSERT INTO pizzas(names,passwords,email,scores) VALUES('$confirm_name','$confirm_password','$confirm_email',0)";
mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="emailconfirmstyle.css">
    <link rel="icon" href="logo.png" type="image/icon type">
    <title>Email Confirmation</title>
</head>
<body>
<div class="container">
    <h1 class="neonText">
          Email has been confirmed!<br><br>Please login again
    </h1>
    <a href="login.php" class="login"><h2><br>Click here to login </h2></a>

 </div>
</body>
</html>
