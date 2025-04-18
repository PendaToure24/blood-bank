<?php
$conn = new mysqli("localhost", "root", "", "banque_of_blood");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $sql = "DELETE FROM blood WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Poche supprimée.";
    } else {
        echo "Erreur: " . $conn->error;
    }
}
?>

<head>
    <link rel="stylesheet" type="text/css" href="accueil.css">
</head>

<form method="POST">
    ID de la poche: <input type="number" name="id" required>
    <button type="submit">Supprimer</button>
</form>
<div class="liens">
        <a href="index.php">Retour</a>
    </div>