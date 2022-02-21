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
    <script src="main.js"></script>
    <title>ShareTheRide! / Signup</title>
    <link rel="icon" href="assets/STR!.svg" type="image/x-icon">
</head>

<body>
<?php
    require('users_database_conn.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $query    = "INSERT into `users` (username, email, password)
                     VALUES ('$username', '$email', '" . md5($password) . "')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo '<div style="font-size: 20px; height: 100vh; margin: auto; display: flex; align-items: center; align-self: center; justify-content: center; flex-direction: column;">
                    <h2 style="color: #212121; letter-spacing: -1.5px; font-weight: 900">Welcome '.$username.'!</h2>
                    <h3 style="letter-spacing: -1px; font-weight: 500; margin-top: -10px;">Your account created successfully.</h3>
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
<form method="post">
        <div id="loginuibase" class="loginui">
            <h1>ShareTheRide!</h1>
            <p>Create your account</p>

                <input required name="username" type="text" placeholder="Create user name">

                <input required name="email" type="email" placeholder="Enter email">

                <input required name="password" type="password" placeholder="Create Password">

            <div class="clearfix">
                <a href="index.php"><button class="gobackbtn" type="button">Go back</button></a>
                <button class="signupbtn" type="submit">Next</button>
            </div>
        </div>
</form>
<?php
    }
?>
</body>

</html>
