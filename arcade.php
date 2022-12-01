<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
  <link rel="stylesheet" href="arcadestyle.css">
  <link rel="icon" href="logo.png" type="image/icon type">
  
</head>
<body onload="startTime()">
    
<div class="Header">
  <div class="neon">Arcade</div>
  <div class="flux">Gaming </div>
</div>

<nav>
        <input id="nav-toggle" type="checkbox">
        <a href="arcade.php">
            <div class="logo" style="font-family:Georgia sans"><strong>Arcade Gaming</strong>
            <img src="logo.png" alt="" height="55px"></div>
        </a>
        <ul class="links">
            <li><a href="arcade.php">Home</a></li>
            <li><a href="contact_new.php">Contact</a></li>
            <li><a href="login.php">Log / Sign up</a></li>
        </ul>
        <label for="nav-toggle" class="icon-burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </label>
    </nav>
    <div class="container">
    <div class="background-photo" style="position: relative; left: 0; top: 0;">
      <!-- <img src="backgroundimg.jpg" alt=""> -->
      <div id="txt" class="time" style="position: fixed; color:rgb(220,20,60,0.75);top:16px;left:372px;font-size:35px;z-index:100;font-weight:540"></div>
      <i id="samay" style="position: fixed; font-size:20px;color:rgb(255,255,255,0.5);left:378px;top:50px;;z-index:100;"></i>
        
        <!-- <img src="Contact-us.jpg" alt=""> -->
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
  document.getElementById('txt').innerHTML =  h + ":" + m + ":" + s;
  setTimeout(startTime, 1000);
}
function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}
</script>
<script>
  const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

const d = new Date();
let month = months[d.getMonth()];
var day=d.getDate();  
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