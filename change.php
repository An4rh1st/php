<?php
    require "karnel/connection.php";
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
<form action="karnel/add_change.php" method="post">
    <p>Изменить никнейм</p>
    <input type="hidden" name="id" value="<?= $user["id"]?>">
    <input type="text" name="name" value="<?= $user["name"]?>">
    <p>Изменить логин</p>
    <input type="text" name="login" value="<?= $user["login"]?>">
    <p>Изменить пароль</p>
    <input type="text" name="password" value="<?= $user["password"]?>">
    <p>Изменить email (необязательно)</p>
    <input type="email" name="email" value="<?= $user["email"]?>"><br><br>
    <button type="submit">Сохранить изменения</button>
</form>