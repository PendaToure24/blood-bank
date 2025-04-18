<?php
$conn = new mysqli("localhost", "root", "", "banque_of_blood");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $groupe_sanguin = $_POST["groupe_sanguin"];
    $quantite = $_POST["quantite"];
    $datecollecte = $_POST["datecollecte"];
    $dateperemption = $_POST["dateperemption"];

    $sql = "INSERT INTO blood (groupe_sanguin, quantite_ml,date_collecte,date_peremption) VALUES ('$groupe_sanguin', '$quantite','$datecollecte','$dateperemption')";
    if ($conn->query($sql) === TRUE) {
        echo "Poche de sang ajoutée.";
    } else {
        echo "Erreur: " . $conn->error;
    }
}
?>
<head>
    <link rel="stylesheet" type="text/css" href="accueil.css">
</head>
<form method="POST">
    <label for="groupe_sanguin">Groupe Sanguin:</label>
    <select id="groupe_sanguin" name="groupe_sanguin">
        <option>O+</option>
        <option>O-</option>
        <option>A+</option>
        <option>A-</option>
        <option>B+</option>
        <option>B-</option>
        <option>AB+</option>
        <option>AB-</option>
    </select>
    Quantité (ml): <input type="number" name="quantite" required><br>
    Date de collecte: <input type="Date" name="datecollecte">
    Date de peremption: <input type="Date" name="dateperemption">
    <button type="submit">Ajouter</button>
</form>
<div class="liens">
        <a href="index.php">Retour</a>
    </div>