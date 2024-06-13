<div class="header">
    <div class="header-bg">
        <div class="logo">
            <a href="/SA204"><img src="../images/house-solid.svg" alt="Logo"></a>
        </div>
        <div class="nav-links">
            <ul>
                <li><a href="/SA204">Accueil</a></li>
                <li><a href="/SA204/products">Produits</a></li>
            </ul>
        </div>
        <div class="auth-buttons">
            <?php if(isset($_COOKIE['id'])): ?>
                <a class="logout" href="/SA204/login/logout.php">Déconnexion</a>
                <a class="members" href="/SA204/members/">Espace Membres</a>
            <?php else: ?>
                <a class="login" href="/SA204/login/">Connexion</a>
                <a class="register" href="/SA204/login/">Inscription</a>
            <?php endif; ?>
        </div>
    </div>
</div>
