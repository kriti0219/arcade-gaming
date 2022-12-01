<?php
  
$conn = "";
   
try {
    $servername = "localhost";
    $dbname = "ninja_pizza";
    $username = "adarsh";
    $password = "test1234";
   
    $conn = new PDO(
        "mysql:host=$servername; dbname=loginPage",
        $username, $password
    );
      
   $conn->setAttribute(PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
  
?>