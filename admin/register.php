<!DOCTYPE html>
<?php
session_start();
?>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="assets/style.css" rel="stylesheet">
    <script src="main.js"></script>
    <title>ShareTheRide! / Signup</title>
    <link rel="icon" href="/assets/STR!.svg" type="image/x-icon">
</head>

<body>
<?php
    require('users_database_conn.php');
    if (isset($_REQUEST['username'])) {
        $name = stripslashes($_REQUEST['name']);
        $name = mysqli_real_escape_string($con, $name);
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $mobile    = stripslashes($_REQUEST['mobile']);
        $mobile    = mysqli_real_escape_string($con, $mobile);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $query    = "INSERT into `tbl_users` (name, username, email, mobile, password, roleid)
                     VALUES ('" . $name . "', '" . $username . "', '" . $email . "', '" . $mobile . "', '" . sha1($password) . "', '". 3 ."')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo '<div style="font-size: 20px; height: 100vh; margin: auto; display: flex; align-items: center; align-self: center; justify-content: center; flex-direction: column;">
                    <h2 style="color: #212121; letter-spacing: -1.5px; font-weight: 900">User '.$name.' added successfully!</h2>
                    <span><a style="margin-top: -10px; font-weight: 800; color: #00BCD4; text-decoration: none;" href="index.php">Go to admin panel -></a></span>
                  </div>';
        } else {
            echo '<div style="font-size: 20px; font-weight: 800; height: 100vh; margin: auto; display: flex; align-items: center; align-self: center; justify-content: center; flex-direction: column;">
                  <h3 style="letter-spacing: -1px; font-weight: 500;">Required fields are missing.</h3>
                  <span><a style="font-weight: 700;" href="signup.php">Signup again -> </a></span>
                  </div>';
        }
    } else {
?>

<div class="loginui">
          <h1 style="margin-top: -10px;">sharetheride!</h1>
          <p>Create your account</p>
<form style="margin-top: -50px;" method="post">

                <input required name="name" type="text" placeholder="Enter your name">

                <input required name="username" type="text" placeholder="Create user name">

                <input required name="email" type="email" placeholder="Enter email">

                <input required name="mobile" type="text" placeholder="Enter phone number">

                <input required name="password" type="password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,16}$" title="Must contain at least one number and one uppercase and lowercase letter, special character and at least 8 or 16 characters" placeholder="Create Password">

                <input type="hidden" name="roleid" value="3">

            <div class="clearfix">
                <a href="index.php"><button class="gobackbtn" type="button">Go back</button></a>
                <button class="signupbtn" type="submit">Next</button>
            </div>
</form>
<?php
    }
?>
</div>  
</body>

</html>
