<?php
//include 'includes/connect.php';
if(isset($_COOKIE['id'])){
    $id = $_COOKIE['id'];
}
?>

<div class="header-bg">
        <?php if(isset($_COOKIE['id'])){
            echo "<div class='header-button-center'><a class='header-button-right-logout' href='login/logout.php'>Deconnexion</a></div>";
            echo "<div class='header-overlay-left'></div>";
            echo "<div class='header-overlay-right'></div>";
            
            }else{
                echo "<div class='header-button-right'><a class='header-button-right-login' href='login/'>Login</a></div>";
                echo "<div class='header-button-left'><a class='header-button-left-register' href='register/'>Register</a></div>";
                echo "<div class='header-overlay-left'></div>";
                echo "<div class='header-overlay-right'></div>";
            }?>
</div>

