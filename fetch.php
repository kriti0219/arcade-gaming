<?php
//write query for all pizzas
 $sql = 'SELECT names, passwords, id FROM pizzas ORDER BY created_at';

 //make query and get result
 $result = mysqli_query($conn, $sql);

 //fetch the resulting rows as an array
 $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

 print_r($pizzas);

 //free result from memory
 mysqli_free_result($result);

 //close the connection
 mysqli_close($conn);


 ?>