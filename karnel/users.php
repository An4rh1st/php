<?php
    require "connection.php";
    // echo '<pre>';
    // print_r($_GET);
    // echo '</pre>';
    $id = $_GET["id"];
    $user = mysqli_query($connection, "SELECT * FROM `users` WHERE `id` = '$id'");
    $user = mysqli_fetch_assoc($user);
    // echo '<pre>';
    // print_r($user);
    // echo '</pre>';
?>
<h1><?= $user["name"]?></h1>
<p><?= $user["login"]?></p>
<p><?= $user["password"]?></p>
<i><?= $user["email"]?></i>