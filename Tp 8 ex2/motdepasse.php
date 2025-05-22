<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mot de passe généré</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Mot de passe généré</h1>

    <?php
    $longueur = $_POST['longueur'];
    $caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*';
    $motdepasse = '';

    for ($i = 0; $i < $longueur; $i++) {
        $motdepasse .= $caracteres[rand(0, strlen($caracteres) - 1)];
    }

    echo "<p><strong>Votre mot de passe :</strong> $motdepasse</p>";
    ?>

</body>
</html>
