<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact US</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css"href="contact_new_style.css">
    <link rel="icon" href="logo.png" type="image/icon type">

    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
</head>
<body>
    <nav>
        <input id="nav-toggle" type="checkbox">
        <a href="Home-page.php">
            <div class="logo" style="font-family:Georgia sans"><strong>Arcade Gaming</strong>
              <img src="logo.png" alt="" height="55px"></div>
          </a>
            <ul class="links">
                <li><a href="arcade.php">Home</a></li>
                <li><a href="contact_new.php">Contact</a></li>
                <li><a href="login.php">Log / Sign up</a></li>
                <!-- <li><a href="logout.php">Logout</a></li> -->
            </ul>
            <label for="nav-toggle" class="icon-burger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </label>
        </nav>

    <section class="contact">
        <div class="background">
        <div class="content">
            <h2>Contact US</h2>
            <p>We love questions and would appreciate any feedback - we'll be happy to help! Have any queries or issues to resolve ? Here are some ways to contact us.</p>
        </div>
        <div class="container">
                <div class="contactInfo">
                    <div class ="box">
                        <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>Address</h3>
                            <p>SRM University,<br>Kattangulanthur, Potheri<br>603203</p>
                        </div>
                    </div>
                    <div class ="box">
                        <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>Phone</h3>
                            <p>6290115661</p>
                        </div>
                    </div>
                    <div class ="box">
                        <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>Email</h3>
                            <p>am2475@srmist.edu.in</p>
                        </div>
                    </div>
                    </div>
                    <div class="contactForm">
                        <form action="https://getform.io/f/51e3a119-beec-4151-988a-49774206f437" method="post">
                            <h2>Send Message</h2>
                            <div class="inputBox">
                                <input type="text" name="Name" required="required">
                                <span>Full Name</span>
                            </div>
                            
                            <div class="inputBox">
                                <input type="text" name="Email" required="required">
                                <span>Email</span>
                            </div>
                            
                            <div class="inputBox">
                                <textarea name ="Message" required="required"></textarea>
                                <span>Type your Message...</span>
                            </div>
                            
                            <div class="inputBox">
                                <input type="submit" name="" value="Send">
                                
                            </div>
                        </form>
                    </div>
                </div>
                </div>
            </section>
</body>
</html>