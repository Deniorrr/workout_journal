<?php
session_start();
require_once "connect.php";

$connection = @new mysqli($connect[0], $connect[1], $connect[2], $connect[3]);


if ($connection->connect_errno) {
    echo "Error: " . $connection->connect_errno . "Opis" . $connection->connect_error;
} else {

    $query = 'SELECT users.email FROM users WHERE users.email = "' . $_POST['mail'] . '"';

    $result = $connection->query($query);
    if ($result->num_rows > 0) {

        $_SESSION["error_text"] = "Mail already exists";
        header('Location: register.php');
    } else {

        $query = "INSERT INTO users (first_name, passwd, email) VALUES('" . $_POST['first'] . "','" . $_POST['passwd'] . "','" . $_POST['mail'] . "')";

        if ($connection->query($query) === TRUE) {
            header('Location: registered.php');
        } else {
            printf($query);
        }
    };
}
