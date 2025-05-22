<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Messages</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Messages du livre d'or</h1>

    <?php
    $nom = $_POST['nom'];
    $message = $_POST['message'];
    $date = date("d/m/Y H:i");

    $ligne = "$date - $nom : $message\n";

    file_put_contents("messages.txt", $ligne, FILE_APPEND);

    $contenu = file("messages.txt");

    foreach ($contenu as $ligne) {
        echo "<p>" . nl2br(htmlspecialchars($ligne)) . "</p>";
    }
    ?>

</body>
</html>
