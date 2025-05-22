<?php
session_start();
if (!isset($_SESSION['utilisateur'])) {
    header("Location: login.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Bienvenue</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Bienvenue <?php echo $_SESSION['utilisateur']; ?> !</h1>
    <p><a href="logout.php">Déconnexion</a></p>

</body>
</html>
