<?php

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
    echo "";
}else{
    header('Location: /SA204/');
    setcookie('error', 16, time() + 1, '/SA204/');
}

if(isset($_POST['product']) && isset($_POST['quantity'])){
    $product = $_POST['product'];
    $quantity = $_POST['quantity'];
    
    $sql = "SELECT * FROM Produits WHERE PID='$product'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    if($row){

        $new_quantity = $row['stock'] + $quantity;

        // Check if new stock quantity is negative
        if ($new_quantity < 0) {
            setcookie('error', 22, time() + 1, '/SA204/'); // Error code 22 for resulting negative stock
            header('Location: /SA204/members/admin.php');
            exit();
        }

        $quantity = $quantity + $row['stock'];
        $sql = "UPDATE Produits SET stock='$quantity' WHERE PID='$product'";
        if(mysqli_query($con, $sql)){
            setcookie('error', 20, time() + 1, '/SA204/');
            header('Location: /SA204/members/admin.php');
        }else{
            setcookie('error', 21, time() + 1, '/SA204/');
            header('Location: /SA204/members/admin.php');
        }
    }else{
        $sql = "INSERT INTO Produits (PID, stock) VALUES ('$product', '$quantity')";
        if(mysqli_query($con, $sql)){
            setcookie('error', 20, time() + 1, '/SA204/');
            header('Location: /SA204/members/admin.php');
        }else{
            setcookie('error', 21, time() + 1, '/SA204/');
            header('Location: /SA204/members/admin.php');
        }
    }
}

?>