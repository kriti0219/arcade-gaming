<?php
session_start();
include('config/db_connect.php');

$conn->close();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
  <link rel="stylesheet" href="home-page_style.css">
  <link rel="icon" href="logo.png" type="image/icon type">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Road+Rage&display=swap" rel="stylesheet">
</head>

<body onload="startTime()">
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

      <div class="dropdown">
        <button class="dropbtn">Profile</button>
        
        <div class="dropdown-content">

          <p style="margin-top: 7px;
          margin-left:7px;
           color:crimson;
           font-weight:bold">Username:
          <div style="margin-top:-7px;
            margin-left:8px;
            color:white"><?php echo $_SESSION['username']; ?></div>
          </p>

          <p style="margin-top: 7px;
          margin-left:7px;
           color:crimson;
           font-weight:bold">Email ID:
          <div style="margin-top:0px;
            margin-left:6px;
             margin-right:5px;
             margin-bottom:10px;
             color:white"><?php echo $_SESSION['useremail']; ?></div>
          </p>

          <p style="margin-top: 14px;
          margin-left:7px;
           color:crimson;
           font-weight:bold">User ID:
          <div style="margin-top:20px;
            margin-left:8px;
            color:white"><?php echo $_SESSION['userid']; ?></div>
          </p>

          <!-- <div><?php echo $_SESSION['userid']; ?></div> -->
          <a href="edit_detail.php">Edit Profile</a>
        </div>
      </div>
      <li><a href="logout.php">Logout</a></li>
    </ul>
    <label for="nav-toggle" class="icon-burger">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
    </label>
  </nav>
  <div class="container">

    <div class="background-photo" style="position: relative; left: 0; top: 0;">
      <img src="backgroundimg.jpg" alt="">
      <div id="txt" class="time" style="position: fixed; color:rgb(220,20,60,0.75);top:16px;left:372px;font-size:35px;z-index:100;font-weight:540"></div>
      <i id="samay" style="position: fixed; font-size:20px;color:rgb(255,255,255,0.5);left:378px;top:50px;;z-index:100;"></i>



      <!-- <a href="tiktak.php">TIKTAKTOEEEEEEE</a> -->

      <?php
      if ($_SESSION['username']) {
      ?>
        <div style="font-size: 80px;position:absolute;top:210px;left:855px;
       font-family: 'Road Rage', cursive; font-size:90px;
        	color: rgb(230, 227, 227);
		text-shadow:
			0 0 2px #fff,
			0 0 2px #fff,
			0 0 15px #ff52b1,
			0 0 0px #c231a2,
			0 0 18px #a8157c,
			0 0 20px #770b65,
			0 0 30px #61074e; text-align: center">Welcome <br><i style="color: #fff;
    	color: rgb(230, 227, 227);
		text-shadow:
			0 0 2px #fff,
			0 0 2px #fff,
			0 0 15px #ff52b1,
			0 0 0px #c231a2,
			0 0 18px #a8157c,
			0 0 20px #770b65,
			0 0 30px #61074e; font-family: 'Bangers', cursive;font-size:60px;" class="glow"><?php echo $_SESSION['username']; ?></i>
        </div>
      <?php
      } else echo "<h1>Please login first .</h1>";
      ?>

      <!-- tic-tac-toe video -->
      <a href="tiktak.php">
        <video autoplay loop muted class="video1">
          <source src="Tic-Tac-Toe.mp4" type="video/mp4">
        </video>
      </a>


      <!-- gartic video -->
      <a href="https://gartic.io/" target="_blank">
        <video autoplay loop muted class="video2">
          <source src="gartic.mp4" type="video/mp4">
        </video>
      </a>

      <!-- agar video -->
      <a href="https://agar.io/" target="_blank">
        <video autoplay loop muted class="video3">
          <source src="agar.mp4" type="video/mp4">
        </video>
      </a>

      <a href="https://smashkarts.io/" target="_blank">
        <video autoplay loop muted class="karts">
          <source src="karts.mp4" type="video/mp4">
        </video>
      </a>

      <!-- new page -->
      <h1 class="naya-page">Play games with<br>friends <i style="color: crimson;">online !</i></h1>

      <div class="naya-page-black" style="box-shadow: 0px 0px 50px -10px crimson;">

        <h2 class="karts_info">Turn on your racer mode NOW!<br>Compete with friends and join<br>online rooms to for an exciting experience !</h2>

        <h2 class="gartic_info">Wanna compete with your friends in<br>an online art battle ?<br>Well how about you try playing scribble?</h2>

        <h2 class="agar_info">Oh ! So you trust your reflexes ?<br>Why not compete with your<br>friends and know who's the best</h2>
      </div>

      <img src="Contact-us.jpg" alt="">
    </div>

  </div>
  <script>
    function startTime() {
      const today = new Date();
      let h = today.getHours();
      let m = today.getMinutes();
      let s = today.getSeconds();
      m = checkTime(m);
      s = checkTime(s);
      document.getElementById('txt').innerHTML = h + ":" + m + ":" + s;
      setTimeout(startTime, 1000);
    }

    function checkTime(i) {
      if (i < 10) {
        i = "0" + i
      }; // add zero in front of numbers < 10
      return i;
    }
  </script>
  <script>
    const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

    const d = new Date();
    let month = months[d.getMonth()];
    var day = d.getDate();
    document.getElementById('samay').innerHTML = day + " " + month;
    // document.write(day + " " + month);
  </script>

<!-- Start of ChatBot (www.chatbot.com) code -->
<script type="text/javascript">
    window.__be = window.__be || {};
    window.__be.id = "61fac95bfdd7c500072f72c7";
    (function() {
        var be = document.createElement('script'); be.type = 'text/javascript'; be.async = true;
        be.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.chatbot.com/widget/plugin.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(be, s);
    })();
</script>
<!-- End of ChatBot code -->
</body>

</html>