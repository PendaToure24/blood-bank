<?php
$conn = new mysqli("localhost", "root", "", "banque_of_blood");
$sql = "SELECT * FROM blood";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Liste des poches de sang</title>
    <link rel="stylesheet" type="text/css" href="accueil.css">
</head>
<body>
    <h2>Liste des poches de sang</h2>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Groupe sanguin</th>
            <th>Quantité (ml)</th>
            <th>Date collecte</th>
            <th>Date péremption</th>
        </tr>

        <?php while($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['groupe_sanguin'] ?></td>
                <td><?= $row['quantite_ml'] ?></td>
                <td><?= $row['date_collecte'] ?></td>
                <td><?= $row['date_peremption'] ?></td>
            </tr>
        <?php } ?>
    </table>
    <div class="liens">
        <a href="index.php">Retour</a>
    </div>
    
</body>
</html>
