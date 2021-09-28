<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Progress monitor</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="icon" 
      type="image/png" 
      href="images/logo.png">
  <link rel="stylesheet" href="/style/main.css">
  <link rel="stylesheet" href="/style/nav-style.css">
</head>
 -->

<?php
include("navbar.php");
if (!isset($_SESSION["name"])) header('Location: index.php');

?>
<div class="container">
  <div class="row justify-content-md-center">
    <h1 class="text-center col-md-7 border-bottom-2 border-white">Welcome to Progress Monitor</h1>
  </div>
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="applet-wrapper applet-left" role="button">
        <div class="row align-items-center bgc-darker">
          <div class="col-md-4">
            <img src="images/profile2.png" class="w-100 d-inline-block align-top" alt="" loading="lazy">
          </div>
          <div class="col-md-8">
            <h2 class="text-center border-bottom-2 border-white">Users data</h2>
            <p><span class="font-weight-bold">Name:</span> <?php echo $_SESSION["name"] ?></p>
            <p><span class="font-weight-bold">Last weight:</span> 75 Kg</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="applet-wrapper applet-right" role="button">
        <div class="row align-items-center bgc-darker">
          <div class="col-md-4">
            <img src="images/calendar.png" class="w-100 d-inline-block align-top" alt="" loading="lazy">
          </div>
          <div class="col-md-8">
            <h2 class="text-center border-bottom-2 border-white">Recorded sessions</h2>
            <p><span class="font-weight-bold">Last recorded training:</span> over 2 weeks ago</p>
            <p><span class="font-weight-bold">Overall trainings recorded:</span> 20</p>
          </div>
        </div>
      </div>
    </div>
    <a class="col-md-6" href="add_unit.php">
      <div class="applet-wrapper applet-left" role="button">
        <div class=" row align-items-center bgc-darker py-4">
          <div class="col-md-4">
            <img src="images/plus.png" class="w-100 d-inline-block align-top" alt="" loading="lazy">
          </div>
          <div class="col-md-8">
            <h2 class="text-center">Add new training unit</h2>
          </div>
        </div>
      </div>
    </a>
    <!-- <a class="col-md-6" href="add_exercise.php">
      <div class="applet-wrapper applet-right" role="button">
        <div class=" row align-items-center bgc-darker py-4">
          <div class="col-md-4">
            <img src="images/plus.png" class="w-100 d-inline-block align-top" alt="" loading="lazy">
          </div>
          <div class="col-md-8">
            <h2 class="text-center">Add new exercise</h2>
          </div>
        </div>
      </div>
    </a> -->
    <a class="col-md-6" href="add_unit.php">
      <div class="applet-wrapper applet-bottom" role="button">
        <div class="row align-items-center bgc-darker py-4">
          <div class="col-md-4">
            <img src="images/question-mark.png" class="w-100 d-inline-block align-top" alt="" loading="lazy">
          </div>
          <div class="col-md-8">
            <h2 class="text-center">About Progress Monitor</h2>
          </div>
        </div>
      </div>
    </a>

  </div>
</div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
</script>
</body>

</html>