<!DOCTYPE html>
<?php

session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You have to log in first";
    header("location: login.php");

}

if (isset($_POST['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
?>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script src="main.js"></script>
    <script src="main2.js"></script>
    <link href="style1.css" rel="stylesheet">
    <title>ShareTheRide! / <?php echo $_SESSION['username']; ?></title>
    <link rel="icon" href="assets/STR!.svg" type="image/x-icon">
</head>

<body>

  <div class="nav">
    <input type="checkbox" id="nav-check">

      <div class="nav-header-phone">
        <a href="#search"><i class="fa-solid fa-magnifying-glass"></i></a>
        <div class="nav-title-phone" id="brand-small">
          <a style="text-decoration: none;" href="index">str!</a>
        </div>
      </div>

      <div class="nav-header">
        <div class="nav-title" id="brand">
          <a style="text-decoration: none;" href="index">sharetheride!</a>
        </div>
      </div>

    <div class="nav-btn">
      <label for="nav-check">
        <span></span>
        <span></span>
      </label>
    </div>

    <div style="margin-top: -46.4px;" class="nav-links">
      <a href="about.php">About Us</a>
      <a href="#contactus">Contact Us</a>
    </div>
  </div>

  <?php if (isset($_SESSION['success'])) : ?>
            <div class="error success" >
                <h3>
                    <?php
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
    
    <?php endif ?>
  
    <?php  if (isset($_SESSION['username'])) : ?>
    
    <div style="height: 40px; margin-top: 50px; position: relative; background-color: rgb(245,250,255);">
      <div style="height: 38px; display: flex; align-items: center; justify-content: center;">
        <p style="font-weight: 700; color: #212121;">
            Welcome
            <?php echo $_SESSION['username']; ?>!
        </p>

        <span>
          <?php session_destroy(); ?>
          <a style="color: #00BCD4; text-decoration: none; font-weight: 700;" href="index.php?logout='1'">&NonBreakingSpace;Signout</a>
        </span>

      </div>
    </div>
 
    <?php endif ?>

  <div class="bg1">
    <div class="empty-area"><span></span></div>
    </div>
  </div>

  <h1 class="heading">Hop in crack a window let's get back out there</h1>

  <div class="ride-search-container">
      <div class="content-width">
        <input type="text" name="destination" id="destination" placeholder="Where are you going?" />
        <div style="margin-top: 5px; background-color: rgba(0,0,0,0);" id="display2"></div>
      </div>
  </div>

  <div style="margin-top: 10px;" class="row">
    <div class="column">
      <i class="fas fa-coins"></i>
      <h3>Your pick of rides at low prices</h3>
      <p>No matter where you're going, by carpool, find the perfect ride from our wide range of destinations and routes at low prices.</p>
    </div>
    <div class="column">
      <i class="fas fa-user-check"></i>
      <h3>Trust who you travel with</h3>
      <p>We take the time to get to know each of our members. We check reviews, profiles and IDs, so you know who you're travelling with and can book your ride at ease on our secure platform.</p>
    </div>
    <div class="column">
      <h1>Let's ride</h1>
      <a href="#search"><button class="searchforride">Search for ride</button></a>
    </div>
  </div>

  <section class="testimonials">
<h2 class="testimonials-title">See what our users say</h2>
  <div class="container">

    <div class="slides">
      <div id="slide-1" class="slide-ctrl"></div>
      <div id="slide-2" class="slide-ctrl"></div>
      <div id="slide-3" class="slide-ctrl"></div>

      <figure class="slide">
        <blockquote class="testimonial">
          <p>"My motto is very simple. It doesn't cost you a penny to be nice and kind, but it will cost you everything if you're not. If I'm free and somebody needs my help, I'll be the first one to jump in, in a heartbeat."<b>&nbsp;&nbsp;- Vaibhav</b></p>
        </blockquote>
      </figure>

      <figure class="slide">
        <blockquote class="testimonial">
          <p>"I'm a disabled Marine Corps veteran, and because of my disability, I'm no longer able to work in a structured environment. The few hours a week that I drive connects me to my community and gives me extra money to help make ends meet."<b>&nbsp;&nbsp;- Ahmad</b></p>
        </blockquote>
      </figure>

      <figure class="slide">
        <blockquote class="testimonial">
          <p>"Driving with STR! is the perfect way to make money and be there for my family's needs. I love providing a way to get my passengers from point A to B. Independence is key for me, and I enjoy meeting new people while driving!"<b>&nbsp;&nbsp;- Ayush</b></p>
        </blockquote>
      </figure>
      
      <div class="slides-ctrl">
        <a href="#slide-1" class="slide-btn"><button></button></a>
        <a href="#slide-2" class="slide-btn"><button></button></a>
        <a href="#slide-3" class="slide-btn"><button></button></a>
                
      </div>
    </div>
  </div>
</section>



  <div id="contactus">
		<div class="bottom-container">
      <span>
        <label>© 2022 Vaibhav Pancholi</label>
      </span>
			<p>Contact Us</p>
      <a href="#"><i class="fas fa-envelope"></i></a>
      <a href="#"><i class="fa-brands fa-facebook"></i></a>
      <a href="#"><i class="fa-brands fa-instagram-square"></i></a>
      <a href="#"><i class="fa-brands fa-twitter"></i></a>
			<p><a style="color: rgb(50,55,60);" id="callus" href="tel:+919426981496">Call us for query<br><b>+919426981496</b></a></p>
    </div>
  </div>
  
</body>
</html>