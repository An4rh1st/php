<?php
    require "connection.php";
    $id = $_GET["id"];
    $delete = mysqli_query($connection, "DELETE FROM `users` WHERE `users`.`id` = '$id'");
    if(!$delete){
        die("Error");
    }
    header("Location: ../index.php");
    die();