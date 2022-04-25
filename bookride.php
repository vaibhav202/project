<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="main.js"></script>
    <script type="text/javascript" src="main2.js"></script>
    <link href="style1.css" rel="stylesheet">
    <title>ShareTheRide! / Book a ride</title>
    <link rel="icon" href="assets/STR!.svg" type="image/x-icon">
</head>

<body>
<?php
    require('users_database_conn.php');
    if (isset($_REQUEST['email'])) {
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $phone    = stripslashes($_REQUEST['phone']);
        $phone    = mysqli_real_escape_string($con, $phone);
		$pickup    = stripslashes($_REQUEST['pickup']);
        $pickup    = mysqli_real_escape_string($con, $pickup);
		$destination    = stripslashes($_REQUEST['destination']);
        $destination    = mysqli_real_escape_string($con, $destination);
		$pickup_date    = stripslashes($_REQUEST['pickup_date']);
        $pickup_date    = mysqli_real_escape_string($con, $pickup_date);
		$hour    = stripslashes($_REQUEST['hour']);
        $hour    = mysqli_real_escape_string($con, $hour);
		$minute    = stripslashes($_REQUEST['minute']);
        $minute    = mysqli_real_escape_string($con, $minute);
		$am_pm    = stripslashes($_REQUEST['am_pm']);
        $am_pm    = mysqli_real_escape_string($con, $am_pm);
        $query    = "INSERT into `tbl_bookings` (email, phone, pickup, destination, pickup_date, hour, minute, am_pm)
                     VALUES ('" . $email . "', '" . $phone . "', '" . $pickup . "', '" . $destination . "', '" . $pickup_date . "', '" . $hour . "', '". $minute ."', '". $am_pm ."')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo '<div style="font-size: 20px; height: 100vh; margin: auto; display: flex; align-items: center; align-self: center; justify-content: center; flex-direction: column;">
                    <h3 style="color: #212121; letter-spacing: -1.5px; font-weight: 900">Your ride from '.$pickup.' to '.$destination.' is booked succesfully.</h3>
                    <span><a style="margin-top: -10px; font-weight: 800; color: #00BCD4; text-decoration: none;" href="index.php"><- Go back</a> <b>or</b> <a style="margin-top: -10px; font-weight: 800; color: #00BCD4; text-decoration: none;" href="login.php">Login -></a></span>
                  </div>';
        } else {
            echo '<div style="font-size: 20px; font-weight: 800; height: 100vh; margin: auto; display: flex; align-items: center; align-self: center; justify-content: center; flex-direction: column;">
                  <h3 style="letter-spacing: -1px; font-weight: 500;">Required fields are missing.</h3>
                  <span><a style="font-weight: 700;" href="signup.php">Signup again -> </a></span>
                  </div>';
        }
    } else {
?>
<form method="post" action="">
        <div id="loginuibase" class="loginui">
            <h1>sharetheride!</h1>
            <p>Book a ride</p>

                <input required name="email" type="text" placeholder="Enter your email" />

                <input required name="phone" type="text" placeholder="Enter your phone number" />

                <input style="margin-bottom: 5%;" required name="pickup" id="pickup" type="text" placeholder="Enter pickup location">
                <span id=display></span>

                <input style="margin-bottom: 5%;" name="destination" required type="text" value="<?php $city = $_GET["city"]; echo ($city); ?>" placeholder="<?php $city = $_GET["city"]; echo ($city); ?>" />

                <input required name="pickup_date" type="date" placeholder="dd/mm/yyyy">

                <div class="time-selection">
                <select style="border-top-left-radius: 10px; border-bottom-left-radius: 10px; border-right: none;" name="hour">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
					<option>8</option>
					<option>9</option>
					<option>10</option>
					<option>11</option>
					<option>12</option>
				</select>

				<select name="minute">
					<option>05</option>
					<option>10</option>
					<option>15</option>
					<option>20</option>
					<option>25</option>
					<option>30</option>
					<option>35</option>
					<option>40</option>
					<option>45</option>
					<option>50</option>
					<option>55</option>
				</select>

				<select style="border-top-right-radius: 10px; border-bottom-right-radius: 10px; border-left: none;" name="am_pm">
					<option>am</option>
					<option>pm</option>
				</select>
                </div>

            <div class="clearfix">
                <a href="index.php"><button class="gobackbtn" type="button">Cancel</button></a>
                <a href="payment_gateway.php"><button class="signupbtn" type="button">Next</button></a>
            </div>
        </div>
</form>
<?php
    }
?>
</body>

</html>