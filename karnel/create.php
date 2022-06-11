<?php
    require "connection.php";
    $name = $_POST["name"];
    $login = $_POST["login"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $query = mysqli_query($connection, "INSERT INTO `users` (`id`, `name`, `login`, `password`, `email`) VALUES (NULL, '$name', '$login', '$password', '$email')");
    if(!$query){
        die("Error");
    }
    header("Location: ../index.php");
    die();