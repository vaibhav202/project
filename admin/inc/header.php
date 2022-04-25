<?php
$filepath = realpath(dirname(__FILE__));
include_once $filepath."/../lib/Session.php";
Session::init();



spl_autoload_register(function($classes){

  include 'classes/'.$classes.".php";

});


$users = new Users();

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>sharetheride! / Admin Panel</title>
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/style.css">
  </head>
  <body>


<?php


if (isset($_GET['action']) && $_GET['action'] == 'logout') {
  // Session::set('logout', '<div class="alert alert-success alert-dismissible mt-3" id="flash-msg">
  // <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  // <strong>Success !</strong> You are Logged Out Successfully !</div>');
  Session::destroy();
}



 ?>
<style>
  .noboxborder {
    display: block;
    border: 0px;
    outline: 0px;
  }

  .noboxborder:focus {
    border: 0px;
    outline: 0px;
  }

  @media only screen and (max-width: 500px) {
    .ifsmallscreen {
      margin-top: -6px;
    }
  }
</style>

    <div style="width: 100%;">

      <nav class="navbar navbar-expand-md" style="height: 50px; background-color: rgb(240,245,250);">
        <a class="navbar-brand ifsmallscreen" style="color: rgb(0,188,212); font-size: 24px; font-weight: 700; margin-left: 20px; letter-spacing: -1px;" href="index.php">sharetheride!</a>
        <button class="navbar-toggler noboxborder" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon noboxborder" style="color: black; font-weight: 800; line-height: 10px;"><p>----<br>----</p></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav ml-auto" style="padding-left: 20px; background-color: rgb(240,245,250);">



          <?php if (Session::get('id') == TRUE) { ?>
            <?php if (Session::get('roleid') == '1') { ?>
              <li class="nav-item

              <?php

                          $path = $_SERVER['SCRIPT_FILENAME'];
                          $current = basename($path, '.php');
                          if ($current == 'addUser') {
                            echo " active ";
                          }

                         ?>">

                <a class="nav-link" style="color: rgb(50,55,60); font-size: 20px; padding-right: 30px;" href="addUser.php">Add user </span></a>
              </li>
            <?php  } ?>
            <li class="nav-item
            <?php

      				$path = $_SERVER['SCRIPT_FILENAME'];
      				$current = basename($path, '.php');
      				if ($current == 'profile') {
      					echo "active ";
      				}

      			 ?>

            ">

              <a class="nav-link" style="color: rgb(50,55,60); font-size: 20px; padding-right: 30px;" href="profile.php?id=<?php echo Session::get("id"); ?>">Profile <span class="sr-only">(current)</span></a>
            </li>

          <?php }else{ ?>

              <li class="nav-item

              <?php

                          $path = $_SERVER['SCRIPT_FILENAME'];
                          $current = basename($path, '.php');
                          if ($current == 'register') {
                            echo " active ";
                          }

                         ?>">
                <a class="nav-link" style="color: rgb(50,55,60); font-size: 20px; padding-right: 30px;" href="register.php">Register</a>
              </li>
              <li class="nav-item
                <?php

                    				$path = $_SERVER['SCRIPT_FILENAME'];
                    				$current = basename($path, '.php');
                    				if ($current == 'login') {
                    					echo " active ";
                    				}

                    			 ?>">
                <a class="nav-link" style="color: rgb(50,55,60); font-size: 20px; padding-right: 20px;" href="login.php">Login</a>
              </li>

          <?php } ?>


          </ul>

        </div>
      </nav>
