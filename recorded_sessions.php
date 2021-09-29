<?php
include("navbar.php");
if (!isset($_SESSION["name"])) header('Location: index.php');

?>

<head>
    <link rel="stylesheet" href="style/recorded_sessions.css">
</head>
<div class="container">
    <div class="row justify-content-md-center">
        <h1 class="text-center col-md-7 border-bottom-2 border-white">Your sessions</h1>
        <div class="col-12">
            <?php

            require_once "connect.php";
            if (!isset($_SESSION["name"])) header('Location: index.php');
            $connection = @new mysqli($connect[0], $connect[1], $connect[2], $connect[3]);


            if ($connection->connect_errno) {
                echo "Error: " . $connection->connect_errno . "Opis" . $connection->connect_error;
            } else {
                //SELECT * FROM units WHERE units.user_id = 3
                $query = 'SELECT * FROM units WHERE units.user_id =' . $_SESSION['id'];
                $result = $connection->query($query);
                while ($row = $result->fetch_assoc()) {
                    print("<h3>" . $row["name"] . " | " . $row["date"] . " | " . $row["weight"] . "</h3>");
                    $query2 = 'SELECT * FROM exercises WHERE exercises.unit_id =' . $row["id"];
                    $result2 = $connection->query($query2);
                    while ($row2 = $result2->fetch_assoc()) {
                        print($row2["name"] . " | " . $row2["weight"] . " | " . $row2["reps"] . " | " . $row2["sets"] . " | " . $row2["time"] . "</br>");
                    }
                    //$_SESSION["id"] = $row['ID'];

                }
            }
            ?>
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