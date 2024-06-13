<?php

    include '../includes/errors.php';

    if(isset($_COOKIE['id'])){
        $id = $_COOKIE['id'];
    }else{
        header('Location: /SA204/');
        setcookie('error', 15, time() + 1, '/SA204/');
    }

?>

