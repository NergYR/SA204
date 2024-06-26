<?php

include '../includes/errors.php';

if (isset($_COOKIE['id'])) {
    $id = $_COOKIE['id'];
} else {
    header('Location: /SA204/');
    setcookie('error', 15, time() + 1, '/SA204/');
}

include '../includes/connect.php';

$sql = "SELECT * FROM utilisateurs WHERE UID='$id' AND role='admin'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
if ($row) {
    echo "";
} else {
    header('Location: /SA204/');
    setcookie('error', 16, time() + 1, '/SA204/');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <script src="../js/main.js"></script>
</head>

<body onload="checkCookie()">
    <div>
        <header class="header">
            <?php include '../includes/nav.php'; ?>
        </header>
        <div class="container-admin">
            <div class="container-box-stocks">
                <?php include '../includes/stock.php'; ?>
            </div>
            <div class="container-box-users">
                <?php include '../includes/users.php'; ?>
            </div>
            <div class="container-box-addstock">
                <form action="../includes/addstock.php" method="post">
                    <h2>Add Stock</h2>
                    <label for="product">Product ID:</label>
                    <input type="number" id="product" name="product" required>
                    <label for="quantity">Quantity:</label>
                    <input type="number" id="quantity" name="quantity" required>
                    <button type="submit">Add Stock</button>
                </form>
            </div>
        </div>
        <div class="main-content-admin">
            <!-- Your main content goes here -->
        </div>
    </div>
    </div>



</body>

</html>