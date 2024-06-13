<?php // Get Stocks Information


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


$sql="SELECT * FROM Produits";
$result = mysqli_query($con, $sql);
echo "<table border='1' style='width:100%; border-collapse:collapse;'>";
echo "<tr><th>Nom du Produit</th><th>Prix</th><th>Stock</th></tr>";
while($row = mysqli_fetch_assoc($result)) {
    // Déterminer la couleur de fond pour le stock
    $stockClass = '';
    if ($row['stock'] < 5) {
        $stockClass = 'class="stock-low"';
    } elseif ($row['stock'] < 10) {
        $stockClass = 'class="stock-medium"';
    }

    echo "<tr>";
    echo "<td>" . htmlspecialchars($row['Pnom']) . "</td>";
    echo "<td>" . htmlspecialchars($row['prix']) . "</td>";
    echo "<td $stockClass>" . htmlspecialchars($row['stock']) . "</td>";
    echo "</tr>";
}
echo "</table>";

?>