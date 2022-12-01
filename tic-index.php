<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tic Tac Toe</title>
    <link rel="stylesheet" href="tic-style.css">
    <link rel="icon" href="logo.png" type="image/icon type">
</head>

<body>
    <nav>
        <input id="nav-toggle" type="checkbox">
        <a href="Home-page.php">
            <div class="logo" style="font-family:Georgia sans"><strong>Arcade Gaming</strong>
              <img src="logo.png" alt="" height="55px"></div>
          </a>
            <ul class="links">
                <li><a href="Home-page.php">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#games">Games</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="#login">Login / Signup</a></li>
            </ul>
            <label for="nav-toggle" class="icon-burger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </label>
        </nav>

            
            <div class="gameContainer">
        
        <div class="container">
            <div class="lines"></div>
            <div class="box bt-0 bl-0"><span class="boxtext"></span></div>
            <div class="box bt-0"><span class="boxtext"></span></div>
            <div class="box bt-0 br-0"><span class="boxtext"></span></div>
            <div class="box bl-0"><span class="boxtext"></span></div>
            <div class="box"><span class="boxtext"></span></div>
            <div class="box br-0"><span class="boxtext"></span></div>
            <div class="box bl-0 bb-0"><span class="boxtext"></span></div>
            <div class="box bb-0"><span class="boxtext"></span></div>
            <div class="box bb-0 br-0"><span class="boxtext"></span></div>
        </div>
        <div class="gameInfo">
            <h1>Welcome to Tic Tac Toe</h1>
            <div>
                <span class="info">Turn for X</span>
                <button id="reset">Reset</button>
            </div>
            <div class="imgbox">
                <img src="cat-bunny.gif" alt="">
            </div>
        </div>

    </div>
    <script src="tic-script.js"></script>
</body>

</html>