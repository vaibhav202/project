<?php
include 'inc/header.php';
Session::CheckLogin();
?>


<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
   $userLog = $users->userLoginAuthotication($_POST);
}
if (isset($userLog)) {
  echo $userLog;
}

$logout = Session::get('logout');
if (isset($logout)) {
  echo $logout;
}



 ?>

<div class="loginui">
          <h1 class='text-center'>sharetheride!</h1>
          <p>Admin Login</p>

            <form action="" method="post">
  
                  <input type="email" name="email"  class="form-control" placeholder="Enter your email">
              
                  <input type="password" name="password"  class="form-control" placeholder="Enter your pasword">
      
                  <button type="submit" name="login">Login</button>
            </form>
</div>

  <?php
  include 'inc/footer.php';

  ?>
