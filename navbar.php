<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Progress monitor</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="icon" type="image/png" href="images/logo.png">
  <link rel="stylesheet" href="style/main.css">
  <link rel="stylesheet" href="style/nav-style.css">
</head>

<body class="bgc-dark">
  <?php
  session_start();
  ?>
  <div class="nav_wrapper sticky-top">
    <nav class="navbar navbar-expand-lg navbar-dark bgc-dark">
      <a class="navbar-brand" href="main.php">
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
            <a class="nav-link" href="logout.php">Log out</a>
          </li>
        </ul>
      </div>
      <a class="nav-link position-absolute nav_right text-light" href="login.php">
        <div class="login">
          <figure><img src="images/profile2.png" alt="login icon" width="30px"></figure>

          <?php
          if (isset($_SESSION["name"])) {
            echo $_SESSION["name"] . $_SESSION["id"];
          } else {
            echo "Login";
          }
          ?>
        </div>
      </a>
    </nav>
  </div>