<?php

    $name = $_POST["name"];
    $description = $_POST["description"];
    $category = $_POST["category"];
    $price = $_POST["price"];

    $content = "Название товара: $name\nОписание: $description\nКатегория: $category\nЦена: $price";
    
    $filename = "products.txt";
    $fp = fopen($filename, "w");
    fwrite($fp, $content);
    fclose($fp);