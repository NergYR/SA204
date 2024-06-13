<?php

    include '../includes/errors.php';

    if(isset($_COOKIE['id'])){
        $id = $_COOKIE['id'];
    }else{
        header('Location: /SA204/');
        setcookie('error', 15, time() + 1, '/SA204/');
    }

    include '../includes/connect.php';

    $sql="SELECT * FROM utilisateurs WHERE UID='$id' AND role='admin'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    if($row){
        echo "Welcome admin";
    }else{
        header('Location: /SA204/');
        setcookie('error', 16, time() + 1, '/SA204/');
    }


?>