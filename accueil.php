<?php session_start(); ?>

<head>
    <link rel="stylesheet" type="text/css" href="accueil.css">
</head>
<h2>Bienvenue dans la gestion de la banque de sang</h2>

<?php if (isset($_SESSION["login"])): ?>
    <p>Connecté en tant que <?= $_SESSION["login"] ?> | <a href="logout.php">Déconnexion</a></p>
    <ul>
        <li><a href="ajout_poche.php">Ajouter une poche de sang</a></li>
        <li><a href="supp_poche.php">Supprimer une poche</a></li>
        <li><a href="ajout_utilisateur.php">Ajouter un utilisateur</a></li>
        <li><a href="affichageliste">Afficher la liste des poches de sang</a>
    </ul>
<?php else: ?>
    <div class="liens">
    Vous avez un compte ?<br>
    <a href="connexion.php">Se connecter</a><br>
    Sinon<br>
    <a href="ajout_utilisateur.php">S'inscrire</a><br>
    <br>
    </div>
<?php endif ?>