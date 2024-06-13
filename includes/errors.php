<?php
// Error codes
/*
// Error code 1: Email already exists
if(isset($_COOKIE['error'])){
    $error = $_COOKIE['error'];
    if($error == 1){
        echo "Email already exists";$code=1;
    }
}
// Error code 2: Email does not exist
if(isset($_COOKIE['error'])){
    $error = $_COOKIE['error'];
    if($error == 2){
        echo "Email does not exist";$code=2;}
}
// Error code 3: Password is incorrect
if(isset($_COOKIE['error'])){
    $error = $_COOKIE['error'];
    if($error == 3){
        echo "Password is incorrect";$code=3;}
}
// Error code 4: Email and password are required
if(isset($_COOKIE['error'])){
    $error = $_COOKIE['error'];
    if($error == 4){
        echo "Email and password are required";$code=4;}
}
// Error code 5: Email is required
if(isset($_COOKIE['error'])){
    $error = $_COOKIE['error'];
    if($error == 5){
        echo "Email is required";$code=5;}
}
// Error code 6: Password is required
if(isset($_COOKIE['error'])){
    $error = $_COOKIE['error'];
    if($error == 6){
        echo "Password is required";$code=6;}
}
// Error code 7: Name is required
if(isset($_COOKIE['error'])){
    $error = $_COOKIE['error'];
    if($error == 7){
        echo "Name is required";$code=7;}
}
// Error code 8: Empty fields
if(isset($_COOKIE['error'])){
    $error = $_COOKIE['error'];
    if($error == 8){
        echo "Fill fields please";$code=8;}
}
// Error code 9: Password must be at least 6 characters
if(isset($_COOKIE['error'])){
    $error = $_COOKIE['error'];
    if($error == 9){
        echo "Password must be at least 6 characters";$code=9;}
}
// Error code 10: Passwords do not match
if(isset($_COOKIE['error'])){
    $error = $_COOKIE['error'];
    if($error == 10){
        echo "Passwords do not match";$code=10;}
}
// Error code 11: Invalid email
if(isset($_COOKIE['error'])){
    $error = $_COOKIE['error'];
    if($error == 11){
        echo "Invalid email";$code=11;}
}
// Error code 12: Invalid name
if(isset($_COOKIE['error'])){
    $error = $_COOKIE['error'];
    if($error == 12){
        echo "Invalid name";$code=12;}
}*/

function getErrorMessage($errorCode) {
    $errorMessages = [
        1 => "Email already exists",
        2 => "Email does not exist",
        3 => "Password is incorrect",
        4 => "Email and password are required",
        5 => "Email is required",
        6 => "Password is required",
        7 => "Name is required",
        8 => "Fill fields please",
        9 => "Password must be at least 6 characters",
        10 => "Passwords do not match",
        11 => "Invalid email",
        12 => "Invalid name",
        13 => "Error de connexion à la base de données",
        14 => "Error Already Logged In",
        15 => "Error Not Logged In",
        16 => "Error Not Admin",
        17 => "Error Not User",
        18 => "Error Connection DB Failed",
        19 => "Error SQL Querry Failed",
        20 => "Stock Added",
        21 => "Error Adding Stock",
        22 => "Error Negative Stock",
    ];

    return isset($errorMessages[$errorCode]) ? $errorMessages[$errorCode] : "Unknown error code";
}
if (isset($_GET['error'])) {
    $error = intval($_GET['error']);
    echo getErrorMessage($error);
}



?>