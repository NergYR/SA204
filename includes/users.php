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


$sql="SELECT * FROM Utilisateurs";
$result = mysqli_query($con, $sql);
echo "<table border='1' style='width:100%; border-collapse:collapse;'>";
echo "<tr><th>UID</th><th>Nom</th><th>Prenom</th><th>Role</th></tr>";

while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($row['UID']) . "</td>";
    echo "<td>" . htmlspecialchars($row['nom']) . "</td>";
    echo "<td>" . htmlspecialchars($row['prenom']) . "</td>";
    echo "<td>" . htmlspecialchars($row['role']) . "</td>";
    echo "</tr>";
}
echo "</table>";





?>