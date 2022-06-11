<?php
    $connection = mysqli_connect('127.0.0.1', 'root', '', 'test');
    if(!$connection){
        die("Connection to DB ends with error!");
    }