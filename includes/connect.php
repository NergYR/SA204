<?php

$host = 'localhost';
$dbname = 'bdd_sae';
$user = 'user';
$pass = 'password';

$con=mysqli_connect($host,$user,$pass) or die("Erreur  de connexion à la base de données");
$connection=mysqli_select_db($con,$dbname) or die ("Erreur dans la sélection de la base de données");

if(!$connection){
    echo "Erreur de connexion à la base de données";
}

?>