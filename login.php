<!DOCTYPE html>

<html>
<head>
    <meta http-equiv="content-type">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400;500;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="style1.css" rel="stylesheet">
    <script src="main.js"></script>
    <title>ShareTheRide! / Login</title>
    <link rel="icon" href="assets/STR!.svg" type="image/x-icon">
</head>
<body>
<?php
    require('users_database_conn.php');
    session_start();
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']); 
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            header("Location: authenticated_user_page.php");
        } else {
            echo '<div style="font-size: 20px; height: 100vh; margin: auto; display: flex; align-items: center; align-self: center; justify-content: center; flex-direction: column;">
                  <h3 style="letter-spacing: -1px; font-weight: 500; margin-top: -10px;">Looks like you entered something wrong.</h3><br/>
                  <span><a style="margin-top: -10px; font-weight: 800; color: #00BCD4; text-decoration: none;" href="index.php"><- Go back</a> <strong>or</strong> <a style="margin-top: -10px; font-weight: 800; color: #00BCD4; text-decoration: none;" href="login.php">Try again -></a></span>
                  </div>';
        }
    } else {
?>


    <form method="post">
        <div class="loginui">
            <h1>ShareTheRide!</h1>
            <p>Login to your account</p>

            <input required type="text" name="username" placeholder="Enter email">
            <input required type="password" name="password" placeholder="Enter password">

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
