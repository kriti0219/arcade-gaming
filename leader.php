<?php
session_start();
include('config/db_connect.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="leaderstyle.css">
    <link rel="icon" href="logo.png" type="image/icon type">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comforter&display=swap" rel="stylesheet">
    <title>Leaderboard</title>
    <style>
    table

{

border-style:solid;

border-width:2px;

border-color:pink;

}
</style>
</head>

<body>

<nav>
    <input id="nav-toggle" type="checkbox">
    <a href="Home-page.php">
      <div class="logo" style="font-family:Georgia sans"><strong>Arcade Gaming</strong>
        <img src="logo.png" alt="" height="55px">
      </div>
    </a>

    <ul class="links">
      <li><a href="Home-page.php">Home</a></li>



      <li><a href="contact.php">Contact</a></li>

      <li><a href="leader.php">Leaderboard</a></li>

    
      <li><a href="logout.php">Logout</a></li>
    </ul>
    <label for="nav-toggle" class="icon-burger">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
    </label>
  </nav>

<div class="container">
    <div class="background-photo">
    <div style="position: absolute; font-size:55px; left : 9em;top:2em; color:rgb(180, 180, 180,0.95)">Leaderboard</div>
  <img src="backgroundimg.jpg" alt="">
<?php
include('config/db_connect.php');
$i=0;
$new_score=5;
$old_score=4;
$iteration=0;
$sql = "SELECT * FROM pizzas ORDER BY scores DESC";
            $result = mysqli_query($conn, $sql);
            if ($result && mysqli_num_rows($result) > 0) {

                echo "<table cellpadding='0', cellspacing='1' and border='0'; style='position:absolute;
                top: 21em;
                left: 30em;
                width: 50em;
                height:25em;
                margin-top: -9em; /*set to a negative number 1/2 of your height*/
                margin-left: -15em;
                overflow-y:scroll;'>

<tr style='background-color: rgb(32, 31, 31); font-weight:bold;font-size:17px;color: cornsilk'>
<th>Rank</th>
<th>Id</th>

<th>name</th>

<th>Score</th>

</tr>";
                // output data of each row
                // echo "Rank: ".$i." " ."id: " . $user_data['id']." ". "Name: ".$user_data['names'] . " "."Score : ".$user_data['scores']. "<br>";
                while($user_data=mysqli_fetch_assoc($result)) 
                {

                    $new_score=$user_data['scores'];
                    if($new_score!=$old_score){
                        $i++;
                    }
                    $iteration++;

                    if($iteration==1){
                        echo "<tr style='background-color:rgba(90, 11, 90, 0.98);font-weight:bold;'>";
                      
                        echo "<td style='text-align:center ; color: rgb(209, 178, 4)'>" . $i . "</td>";
                      
                        echo "<td style='text-align:center'>" . $user_data['id'] . "</td>";
                      
                        echo "<td style='text-align:center; color: rgb(209, 178, 4)'>". $user_data['names']  . "</td>";
                      
                        echo "<td style='text-align:center'>" . $user_data['scores'] . "</td>";
                      
                        echo "</tr>";
                    }
                    else if($iteration==2){
                        echo "<tr style='background-color:rgba(110, 17, 110, 0.98);font-weight:bold;'>";
                      
                        echo "<td style='text-align:center;color:rgb(146, 146, 146)'>" . $i . "</td>";
                      
                        echo "<td style='text-align:center'>"  . $user_data['id'] . "</td>";
                      
                        echo "<td style='text-align:center; color:rgb(146, 146, 146)'>" . $user_data['names'] . "</td>";
                      
                        echo "<td style='text-align:center'>"  . $user_data['scores'] . "</td>";
                      
                        echo "</tr>";
                    }
                    else if($iteration==3){
                        echo "<tr style='background-color:rgba(122, 28, 122, 0.92);font-weight:bold'>";
                      
                        echo "<td style='text-align:center; color: rgb(49, 32, 21)'>" . $i . "</td>";
                      
                        echo "<td style='text-align:center'>" . $user_data['id'] . "</td>";
                      
                        echo "<td style='text-align:center; color: rgb(49, 32, 21)'>"  . $user_data['names'] . "</td>";
                      
                        echo "<td style='text-align:center'>"  . $user_data['scores'] . "</td>";
                      
                        echo "</tr>";
                    }
                    else{
                        echo "<tr style='background-color:rgb(120, 120, 120,0.95);font-weight:bold'>";
                      
                        echo "<td style='text-align:center'>" . $i . "</td>";
                      
                        echo "<td style='text-align:center'>"  . $user_data['id'] . "</td>";
                      
                        echo "<td style='text-align:center'>"  . $user_data['names'] . "</td>";
                      
                        echo "<td style='text-align:center'>" . $user_data['scores'] . "</td>";
                      
                        echo "</tr>";
                    }
                      
                        $old_score=$user_data['scores'];
                        }
                      echo "</table>";

                }
            
            else{
                echo "RESULT : 0";
            }





?>
</div>
    </div>
</body>
</html>