<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    session_start();
    include '../includes/connect.php';
    include '../includes/errors.php';

    if (isset($_GET['PID'])) {
        $id = intval($_GET['PID']);
        $sql12 = "SELECT * FROM bdd_sae.Produits WHERE PID = $id";
        $result12 = $con->query($sql12);

    if ($result12->num_rows > 0) {
        $product = $result12->fetch_assoc();
    } else {
        die("Produit non trouvé.");
    }
} else {
    die("ID de produit non fourni.");
}

    $con->close();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="css.css">
    <title><?php echo htmlspecialchars($product['Pnom']); ?></title>
</head>
<body>
<header class="header">
    <?php include '../includes/nav.php'; ?>
</header>

<main>
    <h1><?php echo htmlspecialchars($product['Pnom']); ?></h1>
    <div class="product-detail">
        <p>Marque: <?php echo htmlspecialchars($product['marque']); ?></p>
        <p>Prix: <?php echo htmlspecialchars($product['prix']); ?>€</p>
        <p>Stock : <?php echo htmlspecialchars($product['stock']); ?> </p>
        <p>Description: <p>
        <!-- Ajoutez des sections pour les avis, les images, etc. -->
        <!-- Par exemple, pour les images: -->
        <div class="product-images">
            <?php
            // Suppose que vous avez un tableau 'images' dans votre table 'Produits' ou une table séparée pour les images
            // $images = explode(',', $product['images']); // Si les images sont stockées sous forme de chaîne séparée par des virgules
            // foreach ($images as $image) {
            //     echo "<img src='path/to/images/" . htmlspecialchars($image) . "' alt='" . htmlspecialchars($product['Pnom']) . "'>";
            // }
            ?>
        </div>
        <!-- Ajoutez des avis -->
        <div class="product-reviews">
            <?php
            // Suppose que vous avez une table 'Avis' liée à 'Produits' par 'product_id'
            // $sqlReviews = "SELECT * FROM Avis WHERE product_id = $id";
            // $resultReviews = $conn->query($sqlReviews);
            // if ($resultReviews->num_rows > 0) {
            //     while($review = $resultReviews->fetch_assoc()) {
            //         echo "<div class='review'>";
            //         echo "<h3>" . htmlspecialchars($review['title']) . "</h3>";
            //         echo "<p>" . htmlspecialchars($review['content']) . "</p>";
            //         echo "<p>Note: " . htmlspecialchars($review['rating']) . "/5</p>";
            //         echo "</div>";
            //     }
            // } else {
            //     echo "<p>Aucun avis pour ce produit.</p>";
            // }
            ?>
        </div>
    </div>
</main>
</body>
</html>