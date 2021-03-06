<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Progress monitor</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="icon" type="image/png" href="images/logo.png">
  <link rel="stylesheet" href="style/nav-style.css">

</head>

<body class="bgc-dark">
  <div class="nav_wrapper sticky-top">
    <nav class="navbar navbar-expand-lg navbar-dark bgc-dark">
      <a class="navbar-brand" href="#">
        <img src="images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
        Progress Monitor</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse align-right" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
        </ul>
      </div>
      <a class="nav-link position-absolute nav_right text-light" href="login.html">
        <div class="login">
          <figure><img src="images/profile2.png" alt="login icon" width="30px"></figure>
          Login
        </div>
      </a>
    </nav>
  </div> -->

<head>
  <link rel="stylesheet" href="style/login.css">
</head>
<?php
include("navbar.php");
?>
<div class="container">
  <div class="row justify-content-md-center flex-column align-items-center">
    <h1 class="text-center col-md-7 border-bottom-2">Register</h1>
    <div class="row">
      <form class="px-5 pt-5" method="POST" action="register_script.php">

        <?php
        if (isset($_SESSION["error_text"])) {
          echo " <div class='alert alert-danger' role='alert'>" . $_SESSION["error_text"] . "</div>";
        }
        session_unset();
        ?>
        <div class="form-group">
          <label for="firstname">First name</label>
          <div class="wrapper">
            <input type="text" class="form-control" id="firstname" placeholder="First name" name="first">
          </div>
        </div>
        <div class="form-group">
          <label for="firstname">E-mail</label>
          <div class="wrapper">
            <input type="email" class="form-control" id="mail" aria-describedby="emailHelp" placeholder="E-mail" name="mail">
          </div>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <div class="wrapper">
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="passwd">
          </div>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Confirm Password</label>
          <div class="wrapper">
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password" name="passwd2">
          </div>
        </div>
        <button type="submit" class="btn text-uppercase font-weight-bold button_submit">Register</button>
        <div class="forgotten d-flex flex-nowrap mt-4">
          Password forgotten?
          <pre> </pre>
          <a href="register.php">Recover password</a>
        </div>
      </form>
    </div>
    <div class="register d-flex flex-nowrap">
      Already have an account?
      <pre> </pre>
      <a href="login.php">Login in!</a>
    </div>
  </div>
</div>
</body>