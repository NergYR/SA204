<?php 

    session_start();
    include '../includes/connect.php';
    include '../includes/errors.php';
    $sql10 = "SELECT * FROM bdd_sae.Produits";
    $result10 = mysqli_query($con, $sql10);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet">
  <link href="../css/main.css" rel="stylesheet">
  <link rel="stylesheet" href="css.css">
  <title>Liste des produits</title>
  <script src="js/main.js"></script>
</head>
<body onload="checkCookie()">
<header class="header">
      <?php include '../includes/nav.php'; ?>
</header>

<body>
    <h1>Liste des Produits</h1>
    <div class="product-list">
        <?php
        if ($result10->num_rows > 0) {
            while($row = $result10->fetch_assoc()) {
                echo "<div class='product'>";
                echo "<h2><a href='details.php?PID=" . htmlspecialchars($row["PID"]) . "'>" . htmlspecialchars($row["Pnom"]) . "</a></h2>";
                echo "<p>" . htmlspecialchars($row["marque"]) . "</p>";
                echo "<p>Prix: " . htmlspecialchars($row["prix"]) . "€</p>";
                echo "</div>";
            }
        } else {
            echo "0 résultats";
        }
        ?>
    </div>
</body>
</html>