<!DOCTYPE html>
<?php
session_start();
?>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400;500;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="style1.css" rel="stylesheet">
    <title>ShareTheRide!</title>
    <link rel="icon" href="assets/STR!.svg" type="image/x-icon">
</head>

<body>

  <div class="nav">
    <input type="checkbox" id="nav-check">
      <div class="nav-header">
        <div class="nav-title" id="brand">
          <a style="text-decoration: none;" href="index.php">ShareTheRide!</a>
        </div>
      </div>

    <div class="nav-btn">
      <label for="nav-check">
        <span></span>
        <span></span>
      </label>
    </div>

    <div style="margin-top: -46.4px;" class="nav-links">
      <a href="./login.php">Login</a>
      <a href="signup.php">Signup</a>
      <a href="#about">About Us</a>
      <a href="#contactus">Contact Us</a>
    </div>
  </div>

  <div style="margin-top: 70px;" class="bg1">
    <h1>Let's ride together!</h1>
    <div class="empty-area"><span></span></div>
    <form action="phpSearch.php" method="post">
    <div class="ride-search-container">
      <div class="content-width">
        <input type="text" name="search" id="search" placeholder="Leaving from"></button>
          <label>
            <span>|</span>
          </label>
        <input type="text" name="search" id="search" placeholder="Going to"></button>
        <label>
          <span>|</span>
        </label>
        <button class="ride-search-button"><i class="fas fa-search"></i></button>
      </form>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="column">
      <i class="fas fa-coins"></i>
      <h3>Your pick of rides at low prices</h3>
      <p>No matter where you're going, by carpool, find the perfect ride from our wide range of destinations and routes at low prices.</p>
    </div>
    <div class="column">
      <i class="fas fa-user-check"></i>
      <h3>Trust who you travel with</h3>
      <p>We take the time to get to know each of our members and bus partners. We check reviews, profiles and IDs, so you know who you're travelling with and can book your ride at ease on our secure platform.</p>
    </div>
    <div class="column">
      <h1>Let's ride</h1>
      <a href="#"><button class="applytodrive">Apply to drive</button></a>
      <a href="signup.php"><button class="signuptoride">Signup to ride</button></a>
    </div>
  </div>

  <div class="user-rating-container">
    <h1>See what our users say</h1>
    <div class="content">
      <p>"My motto is very simple. It doesn't cost you a penny to be nice and kind, but it will cost you everything if you're not. If I'm free and somebody needs my help, I'll be the first one to jump in, in a heartbeat."<br><br><b>- Ahmad Driving with STR! since 2019</b></p>

      <p>"Driving with STR! is the perfect way to make money and be there for my family's needs. I love providing a way to get my passengers from point A to B. Independence is key for me, and I enjoy meeting new people while driving!"<br><br><b>- Vaibhav Driving with STR! since 2017</b></p>

      <p>"I'm a disabled Marine Corps veteran, and because of my disability, I'm no longer able to work in a structured environment. The few hours a week that I drive connects me to my community and gives me extra money to help make ends meet."<br><br><b>- Ayush Driving with STR! since 2016</b></p>
    </div>
  </div>



  <div id="contactus">
		<div class="bottom-container">
      <span>
        <label>© 2022 Vaibhav Pancholi</label>
      </span>
			<p>Contact Us</p>
				<a href="#"><i class="fas fa-envelope"></i></a>
				<a href="#"><i class="fab fa-github"></i></a>
				<a href="#"><i class="fab fa-telegram"></i></a>
    </div>
  </div>
  
  <script src="main.js"></script>
  
</body>
</html>