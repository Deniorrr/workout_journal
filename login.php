<?php
session_start();
if (isset($_SESSION["name"])) header('Location: main.php');
error_reporting(0);
include("navbar.php");
?>

<head>
  <link rel="stylesheet" href="style/login.css">
</head>
<div class="container">
  <div class="row justify-content-md-center flex-column align-items-center">
    <h1 class="text-center col-md-7 border-bottom-2">Login</h1>
    <div class="row">
      <form class="px-5 pt-5" action="login_script.php" method="POST">
        <?php

        if (isset($_SESSION["error_text"])) {
          echo " <div class='alert alert-danger' role='alert'>" . $_SESSION["error_text"] . "</div>";
        }
        // session_unset();
        ?>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <div class="wrapper">
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
          </div>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <div class="wrapper">
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="passwd">
          </div>
        </div>
        <button type="submit" class="btn text-uppercase font-weight-bold button_submit">Submit</button>
        <div class="forgotten d-flex flex-nowrap mt-4">
          Password forgotten?
          <pre> </pre>
          <a href="registerr.php"> Recover password</a>
        </div>
      </form>
    </div>
    <div class="register d-flex flex-nowrap">
      Wanna create an account?
      <pre> </pre>
      <a href="register.php"> Register now!</a>

    </div>

  </div>
</div>
</body>