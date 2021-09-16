<?php
session_start();
require_once "connect.php";

$connection = @new mysqli($connect[0], $connect[1], $connect[2], $connect[3]);


if ($connection->connect_errno) {
    echo "Error: " . $connection->connect_errno . "Opis" . $connection->connect_error;
} else {

    $query = 'SELECT * FROM users WHERE users.email = "' . $_POST['email'] . '"';
    header('Location: login.php');
    $_SESSION["error_text"] = $query;
    $result = $connection->query($query);
    if ($result->num_rows == 0) {

        $_SESSION["error_text"] = "This mail is not registered! Try again";
        header('Location: login.php');
    } else {

        $query = "SELECT * FROM users WHERE users.email = '" . $_POST['email'] . "'AND users.passwd = '" . $_POST['passwd'] . "'";
        $result = $connection->query($query);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $_SESSION["name"] = $row['first_name'];
            // $_SESSION["name"] = 
            header('Location: main.php');
        } else {
            $_SESSION["error_text"] = "Wrong password! Try again";
        }
    };
}
