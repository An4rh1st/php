<?php
    require "connection.php";
    echo '<pre>';
    print_r($_GET);
    echo '</pre>';
    $id = $_POST["id"];
    $name = $_POST["name"];
    $login = $_POST["login"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $change = mysqli_query($connection, "UPDATE `users` SET `name` = '$name', `login` = '$login', `password`= '$password', `email`= '$email' WHERE `users`.`id` = '$id'");
    if(!$change){
        die("Error");
    }
    header("Location: ../index.php");
    die();
?>