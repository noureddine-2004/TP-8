<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résultat</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Résultat du calcul</h1>

    <?php
    $nb1 = $_POST['nb1'];
    $nb2 = $_POST['nb2'];
    $op = $_POST['operation'];
    $resultat = "";

    if ($op == "+") {
        $resultat = $nb1 + $nb2;
    } elseif ($op == "-") {
        $resultat = $nb1 - $nb2;
    } elseif ($op == "*") {
        $resultat = $nb1 * $nb2;
    } elseif ($op == "/") {
        if ($nb2 != 0) {
            $resultat = $nb1 / $nb2;
        } else {
            $resultat = "Erreur : division par zéro";
        }
    }

    echo "<p><strong>Résultat :</strong> $resultat</p>";
    ?>

</body>
</html>
