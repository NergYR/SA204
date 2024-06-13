<?php 
  session_start();
  include 'includes/connect.php';
  include 'includes/errors.php';

  $numbers1 = [];

  while (count($numbers1) < 2) {
      $randNum = rand(10, 53);
      if (!in_array($randNum, $numbers1)) {
          $numbers1[] = $randNum;
      }
  }
  
  list($rdm1, $rdm2) = $numbers1;
  
  $numbers2 = [];
  
  while (count($numbers2) < 3) {
      $randNum = rand(10, 17);
      if (!in_array($randNum, $numbers2)) {
          $numbers2[] = $randNum;
      }
  }
  
  list($rdm3, $rdm4, $rdm5) = $numbers2;
  

  $sql1 = "SELECT * FROM bdd_sae.Produits WHERE PID = $rdm1";
  $result1 = mysqli_query($con, $sql1);
  
  

  $row1 = mysqli_fetch_assoc($result1);
  $promo1_name = $row1['Pnom'];
  $promo1_img = $row1['image'];
  $promo1_price = $row1['prix'];


  $sql2 = "SELECT * FROM bdd_sae.Produits WHERE PID = $rdm2";
  $result2 = mysqli_query($con, $sql2);

  $row2 = mysqli_fetch_assoc($result2);
  $promo2_name = $row2['Pnom'];
  $promo2_img = $row2['image'];
  $promo2_price = $row2['prix'];


  $sql3 = "SELECT * FROM bdd_sae.Produits WHERE PID = $rdm3";
  $result3 = mysqli_query($con, $sql3);

  $row3 = mysqli_fetch_assoc($result3);
  $bestsell1 = $row3['image'];

  $sql4 = "SELECT * FROM bdd_sae.Produits WHERE PID = $rdm4";
  $result4 = mysqli_query($con, $sql4);

  $row4 = mysqli_fetch_assoc($result4);
  $bestsell2 = $row4['image'];

  $sql5 = "SELECT * FROM bdd_sae.Produits WHERE PID = $rdm5";
  $result5 = mysqli_query($con, $sql5);

  $row5 = mysqli_fetch_assoc($result5);
  $bestsell3 = $row5['image'];




?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet">
  <link href="./css/main.css" rel="stylesheet">
  <title>Accueil</title>
  <script src="js/main.js"></script>
</head>
<body onload="checkCookie()">
<header class="header">
      <?php include 'includes/nav.php'; ?>
    </header>
  <div class="container">

    <section class="promo-section">
      <div class="promo-bg"></div>
      <div class="promo-circle promo-circle-top"></div>
      <div class="promo-circle promo-circle-bottom"></div>
      <div class="promo-item promo-item-left">
        <div class="promo-item-bg"><?php echo "Nom : " . $promo1_name;
                                         echo "<br>";
                                         echo "Prix : ". $promo1_price . "€";  ?></div>
        <div class="promo-item-text"></div>
      </div>
      <div class="promo-item promo-item-right">
        <div class="promo-item-bg"><?php echo "Nom : " . $promo2_name;
                                         echo "<br>";
                                         echo "Prix : ". $promo2_price . "€";  ?></div>
        <div class="promo-item-text"></div>
      </div>
    </section>
    
    <section class="best-sell-section">
      <div class="best-sell-bg"></div>
      <div class="best-sell-item best-sell-item-left">
        <div class="best-sell-item-bg">
          <img class="best-sell-item-bg" src="<?php echo $bestsell1; ?>" alt="bestsell1">
        </div>
        <div class="best-sell-item-text"></div>
      </div>
      <div class="best-sell-item best-sell-item-middle">
        <div class="best-sell-item-bg">
          <img class="best-sell-item-bg" src="<?php echo $bestsell2; ?>" alt="bestsell2">
        </div>
        <div class="best-sell-item-text"></div>
      </div>
      <div class="best-sell-item best-sell-item-right">
        <div class="best-sell-item-bg">
          <img class="best-sell-item-bg" src="<?php echo $bestsell3; ?>" alt="bestsell3">
        </div>
        <div class="best-sell-item-text"></div>
      </div>
    </section>
  </div>
</body>
</html>
