<?php
    include '../includes/connect.php';
    include '../includes/errors.php';

    function sanitizeInput($data) {
        return htmlspecialchars(strip_tags(trim($data)));
    }
    
    $name = sanitizeInput($_POST['name']);
    $email = sanitizeInput($_POST['email']);
    $password = sanitizeInput($_POST['password']);
    $surname = sanitizeInput($_POST['surname']);
    $id = time();

    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    if(empty($name) && empty($email) && empty($password)){
        setcookie('error', 8, time() + 1, '/');
        header('Location: ../login/index.php');
    }elseif(strlen($password) < 6){
        setcookie('error', 9, time() + 1, '/');
        header('Location: ../login/index.php');
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        setcookie('error', 11, time() + 1, '/');
        header('Location: ../login/index.php');
    }elseif(!preg_match('/^[a-zA-Z0-9]*$/', $name)){
        setcookie('error', 12, time() + 1, '/');
        header('Location: ../login/index.php');
    }
    
    $sql = "INSERT INTO bdd_sae.utilisateurs (UID, nom, prenom, email, adresse, mdp, role) VALUES ('$id', '$surname', '$name', '$email', ' ', '$hashed_password', 'user')";
    $result = mysqli_query($con, $sql);

    if($result){
        setcookie('id', $id, time() + 3600, '/');
        header('Location: ../index.php');
    }else{
        echo "Error";
    }
?>