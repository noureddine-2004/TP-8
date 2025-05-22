<?php
session_start();

$identifiant = $_POST['identifiant'];
$motdepasse = $_POST['motdepasse'];

if ($identifiant == "admin" && $motdepasse == "1234") {
    $_SESSION['utilisateur'] = $identifiant;
    header("Location: bienvenue.php");
} else {
    echo "<p>Identifiants incorrects.</p>";
}
?>
