<?php 

session_start();
include('config/db_connect.php');
// json_decode($lastname);
// print_r($_POST) ;
// print_r($lastname);
 json_encode($_POST);
//  print_r($_POST);
$score=$_POST['myData'];
 echo $_POST['myData'];
// echo json_encode(['token' ]);
// if($_REQUEST["name"]){

    // $name=$_REQUEST['name'];

    $sql = "UPDATE pizzas SET scores='$score' where id= '$_SESSION[userid]' ";
    mysqli_query($conn,$sql);
    // echo $name;
    
// }

?>