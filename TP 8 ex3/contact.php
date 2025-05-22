<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Message envoyé</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Message reçu</h1>

    <?php
    if (!empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['message'])) {
        echo "<p><strong>Nom :</strong> " . $_POST['nom'] . "</p>";
        echo "<p><strong>Email :</strong> " . $_POST['email'] . "</p>";
        echo "<p><strong>Message :</strong><br>" . nl2br($_POST['message']) . "</p>";
    } else {
        echo "<p>Veuillez remplir tous les champs.</p>";
    }
    ?>

</body>
</html>
