<?php
    // echo '<pre>';
    // print_r($_FILES);
    // echo '</pre>';
    $type = $_FILES["img"]["type"];
    if (($type !== "image/jpeg") && ($type !== "image/png")) {
        echo "Файл не поддрерживается";
        die();
    }
    $tmp = $_FILES["img"]["tmp_name"];
    $dirSave = "../uploads/" . time() . "_" . $_FILES["img"]["name"];
    if(move_uploaded_file($tmp, $dirSave)){
        echo "Файл загружен по пути <a href='$dirSave'>$dirSave</a>";
    }
    else{
        echo "При загрузке файла произошла ошибка!";
    }