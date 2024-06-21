<?php
    include 'connect.php';

    if(!isset($_COOKIE['id'])) {
        setcookie("error", 15, time() + 3600, "/");
        header("Location: ../view/products.php");
    }
    $PID = $_POST["PID"];


    if (isset($_POST['quantity'])) {
        $quantity = intval($_POST['quantity']);
        $sql = "SELECT * FROM bdd_sae.Produits WHERE PID = $PID";
        $result = mysqli_query($con, $sql);

        if ($result->num_rows > 0) {
            $product = mysqli_fetch_assoc($result);
            $stock = $product['stock'];

            if ($stock >= $quantity) {
                // Add to cart
                
                //retrieve value of stock + add command in Commande table
                
                $sql = "UPDATE bdd_sae.Produits SET stock = stock - $quantity WHERE PID = $PID";
                $result = mysqli_query($con, $sql);
                
                if ($result) {
                    $CID = time();
                    $id = $_COOKIE["id"];
                    $sql = "INSERT INTO bdd_sae.Commande (CID, UID, PID, quantite) VALUES ($CID, $id, $PID, $quantity)";
                    $result = mysqli_query($con, $sql);

                    if(!$result){
                        setcookie("error", 25, time() + 3600, "/");
                        header("Location: ../view/details.php?PID=$PID");
                    }
                } else {
                    setcookie("error", 21, time() + 3600, "/");
                    header("Location: ../view/details.php?PID=$PID");
                }





                setcookie("error", 20, time() + 3600, "/");
                header("Location: ../view/products.php");
            } else {
                setcookie("error", 22, time() + 3600, "/");
                header("Location: ../view/details.php?PID=$PID");
            }
        } else {
            setcookie("error", 23, time() + 3600, "/");
            header("Location: ../view/products.php");
        }
    } else {
        setcookie("error", 8, time() + 3600, "/");
        header("Location: ../view/details.php?PID=$PID");
    }




?>