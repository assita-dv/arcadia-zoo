<?php
// Démarre la session
session_start();

// Vérifie si la déconnexion est demandée
if (isset($_GET['logout']) && $_GET['logout'] == '1') {
    // Détruit toutes les variables de session
    session_unset();

    // Détruit la session
    session_destroy();

    // Message de déconnexion réussie
    $message = "Déconnexion réussie.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN ARCADIA </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/style/main.css">
    <link rel="stylesheet" href="/style/main.scss">
    
</head>
<header>
<?php
    require "pages/header.html";
    ?>
</header>

<body>

<?php
    // Affiche le message de déconnexion réussie si défini
    if (isset($message)) {
        echo "<p>$message</p>";
    }
    ?>
    <div class="login-body">
<section class="login-section">
    
    <h1 class="login-h1">Connexion</h1>
    <form action="/backend/loginbdd.php" method="POST">
    <div class="input-box">
        <input type="email" name="username" placeholder="username" required>
        <i class="fa-solid fa-user"></i>
        </div>
        <div class="input-box">
        <input type="password" name="password" placeholder="mot de passe" required>
        <i class="fa-solid fa-lock"></i>
    </div>
    <div class="remenber-forgot">
        <label ><input type="checkbox">se souvenir de moi</label>
    </div>
    <button class="login-btn">se connecter</button>
    </form>
</section>

</div>
</body>

<script src="/script.javascript/script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>


<!-- ajout de footer --->
<footer>
<?php
    require "pages/footer.html";
    ?>
</footer>

</html>

