<?php
session_start();
require_once "connect.php";
if (!isset($_SESSION["name"])) header('Location: index.php');
$connection = @new mysqli($connect[0], $connect[1], $connect[2], $connect[3]);

if ($connection->connect_errno) {
    echo "Error: " . $connection->connect_errno . "Opis" . $connection->connect_error;
} else {
    if (count($_POST) == 0) header("location: main.php");
    // print_r($_POST);
    if ($_POST['training_name'] == "" or $_POST['date'] == "") {
        $_SESSION["error_text"] = "Please type in the name and the date of your training";
        header("location: add_unit.php");
    }
    //adding unit to sql
    $exercise_details = 5;
    $training_name = $_POST["training_name"];
    $users_weight = $_POST["weight"];
    $training_date = $_POST["date"];

    $query = "INSERT INTO `units` (`id`, `user_id`, `name`, `date`, `weight`) VALUES ('','" . $_SESSION["id"] . "', '" . $training_name . "', '" . $training_date . "', '" . $users_weight . "')";
    $result = $connection->query($query);
    // find id of this unit
    $query = "SELECT MAX(units.id) FROM `units`";
    $result = $connection->query($query);
    while ($row = mysqli_fetch_row($result)) {
        $unit_id = $row[0];
    }

    // adding exercises to unit to sql
    $exercise_amount = (count($_POST) - 3) / $exercise_details;
    for ($i = 0; $i < $exercise_amount; $i++) {
        $name = $_POST["exercise" . $i];
        if ($name != "") {
            $query = "INSERT INTO `exercises` (`id`, `unit_id`, `name`, `weight`, `reps`, `sets`, `time`) VALUES";
            $weight = $_POST["weight" . $i];
            $reps = $_POST["reps" . $i];
            $sets = $_POST["sets" . $i];
            $time = $_POST["time" . $i];
            $query = $query . '(NULL, "' . $unit_id . '", "' . $name . '", "' . $weight . '", "' . $reps . '", "' . $sets . '", "' . $time . '")';
            $connection->query($query);
            //print($query);
        }
    }
    // INSERT INTO `exercises` (`id`, `user_id`, `name`, `weight`, `reps`, `sets`, `time`) VALUES (NULL, '5', 'pulap', '82', '5', '3', '45s'), (NULL, '5', 'puszap', '82', '8', '5', '30s');
    //after all route to main.php
    header("location: main.php");
}
