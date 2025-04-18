<?php
$conn = new mysqli("localhost", "root", "", "banque_of_blood");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $mdp = $_POST["mdp"];
    $role=$_POST['role'];

    $sql = "INSERT INTO utilisateur (nom, email, mot_de_passe, role) VALUES ('$nom', '$email', '$mdp', '$role')";
    if ($conn->query($sql) === TRUE) {
        echo "Utilisateur ajouté.";
    } else {
        echo "Erreur: " . $conn->error;
    }
}
?>
<head>
    <link rel="stylesheet" type="text/css" href="accueil.css">
</head>
<form method="POST" action="index.php">
    Nom: <input type="text" name="nom" required><br>
    Email: <input type="email" name="email" required><br>
    Mot de passe: <input type="password" name="mdp"><br>
    <label for="role">Choisissez un rôle:</label>
    <select id="role" name="role">
        <option>Gestionnaire</option>
        <option>Administrateur</option>
        <option>Simple utilisateur</option>
    </select>
    <br><br>
    <button type="submit">Ajouter</button>
</form>
