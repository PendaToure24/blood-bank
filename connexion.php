<?php
session_start();
$conn = new mysqli("localhost", "root", "", "banque_of_blood");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM utilisateur WHERE nom='$nom' AND mot_de_passe='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION["nom"] = $nom;
        header("Location: index.php");
    } else {
        echo "Identifiants incorrects.";
    }
}
?>

<head>
    <link rel="stylesheet" type="text/css" href="accueil.css">
</head>

<form method="POST" action="index.php">
    Nom: <input type="text" name="nom" required>
    Mot de passe: <input type="password" name="password" required>
    <button type="submit">Connexion</button>
</form>