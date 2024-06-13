<?php
//include 'includes/connect.php';
if(isset($_COOKIE['id'])){
    $id = $_COOKIE['id'];
}
?>

<div class="header-bg">
        <?php if(isset($_COOKIE['id'])){
            echo "<div class='header-button-right'><a class='header-button-right-logout' href='/SA204/login/logout.php'>Deconnexion</a></div>";
            echo "<div class='header-button-left'><a class='header-button-right-logout' href='/SA204/members/'>Members</a></div>";
            echo "<div class='header-overlay-left'></div>";
            echo "<div class='header-overlay-right'><a class='home-link' href='/SA204'>Home</a></div>";
            
            }else{
                echo "<div class='header-button-right'><a class='header-button-right-login' href='/SA204/login/'>Login</a></div>";
                echo "<div class='header-button-left'><a class='header-button-left-register' href='/SA204/register/'>Register</a></div>";
                echo "<div class='header-overlay-left'></div>";
                echo "<div class='header-overlay-right'>  <a class='home-link' href='/SA204'>Home</a></div>";
            }?>
</div>

