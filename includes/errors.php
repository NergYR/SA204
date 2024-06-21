<?php
// Error codes

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
        23 => "Error produit Introuvable",
        24 => "Error PID Introuvable",
        25 => "Error lors de votre commande",
    ];

    return isset($errorMessages[$errorCode]) ? $errorMessages[$errorCode] : "Unknown error code";
}
if (isset($_GET['error'])) {
    $error = intval($_GET['error']);
    echo getErrorMessage($error);
}



?>