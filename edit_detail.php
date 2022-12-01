<?php
session_start();
$update_var=0;
$conn = mysqli_connect('localhost', 'adarsh', 'test1234', 'ninja_pizza');

//check connection
if(!$conn){
    echo 'Connection error:' . mysqli_connect_error();
}



if($_SERVER['REQUEST_METHOD'] == "POST")
{
  
    // $user_name=$_POST['username'];

    $new_name=$_POST['user_input_name'];
    $new_password=$_POST['user_input_password'];
    if(!empty($new_name) && !empty($new_password)){
    // echo $new_name;
    // echo  $new_password;
    $sql = "UPDATE pizzas SET names='$new_name' , passwords='$new_password' where id= '$_SESSION[userid]' ";

    if ($conn->query($sql) === TRUE) {
        $update_var=1;
    }
} 
}
$conn->close();


 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css"href="edit_detail_style.css">
     <link rel="icon" href="logo.png" type="image/icon type">
     <title>Edit details</title>
 </head>
 <body>
   <div class="container">
          <form method="post" class="login-form">  
            <div>
              <label class="HEADING" style="position: absolute; top: 33px;font-size:30px; left: 240px;  color: cornsilk">
                Edit details
              </label>
              
              <label class="name_label">New Name:</label>
              <input type="text" name="user_input_name" class="user_input_name" required="required">
            </div>
            
            <div>
              <label class="password_label">Password:</label>
              <input type="password" name="user_input_password" class="user_input_password" required="required">
            </div>
            <div>
              <input type="submit" name="submit" value="Submit" class="submit">  
              <div style="color: green;position:absolute;top:202px;left:170px"><?php if($update_var==1) echo "Record updated successfully please login again" ?></div>
          </div>

          <a href="login.php" style="position: absolute; top: 273px;left: 415px;  color: purple;font-size: 15px";> CLICK HERE TO LOGIN</a>
      </form>
      </div>
 </body>
 </html>

