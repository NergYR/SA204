<?php
if (isset($_COOKIE['id'])) {
    header('Location: ../index.php');
    setcookie('error', 14, time() + 1, '/');
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Register Form</title>
    <link rel="stylesheet" href="../css/main.css">
    <script src="../js/main.js"></script>
</head>

<body onload="checkCookie()">
    <header class="header">
        <?php include '../includes/nav.php'; ?>
    </header>
    <div class="form-container">
        <div class="switch-button">
            <input type="checkbox" id="toggleForm" class="toggle-checkbox">
            <label for="toggleForm" class="toggle-label">
                <div class="toggle-handle"></div>
            </label>
            
        </div>

        <div class="form-flip">
            <div class="form-login">
                <form action="login.php" method="post">
                    <h2>Login</h2>
                    <div class="form-group">
                        <input type="email" name="email" id="login-email" required>
                        <label for="login-email">Email</label>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" id="login-password" required>
                        <label for="login-password">Password</label>
                    </div>
                    <div class="form-group">
                        <button type="submit">Login</button>
                    </div>
                </form>
            </div>
            <div class="form-register">
                <form action="register.php" method="post">
                    <h2>Register</h2>
                    <div class="form-group">
                        <input type="text" name="name" id="register-name" required>
                        <label for="register-name">Name</label>
                    </div>
                    <div class="form-group">
                        <input type="text" name="surname" id="register-surname" required>
                        <label for="register-surname">Surname</label>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" id="register-email" required>
                        <label for="register-email">Email</label>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" id="register-password" required>
                        <label for="register-password">Password</label>
                    </div>
                    <div class="form-group">
                        <button type="submit">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toggleForm = document.getElementById('toggleForm');
            const formFlip = document.querySelector('.form-flip');

            toggleForm.addEventListener('change', function() {
                if (this.checked) {
                    formFlip.style.transform = 'rotateY(180deg)';
                } else {
                    formFlip.style.transform = 'rotateY(0deg)';
                }
            });
        });
    </script>
</body>

</html>