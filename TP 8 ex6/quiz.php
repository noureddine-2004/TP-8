<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résultat du quiz</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Résultats du Quiz</h1>

    <?php
    $score = 0;

    if ($_POST['q1'] == "Paris") $score++;
    if ($_POST['q2'] == "4") $score++;
    if ($_POST['q3'] == "Bleu") $score++;

    echo "<p>Votre score est : <strong>$score / 3</strong></p>";

    echo "<ul>";
    echo "<li>1. Capitale : Paris — Votre réponse : " . ($_POST['q1'] ?? "aucune") . "</li>";
    echo "<li>2. 2+2 = 4 — Votre réponse : " . ($_POST['q2'] ?? "aucune") . "</li>";
    echo "<li>3. Ciel : Bleu — Votre réponse : " . ($_POST['q3'] ?? "aucune") . "</li>";
    echo "</ul>";
    ?>

</body>
</html>
