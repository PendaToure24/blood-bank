-- Création de la base de données
CREATE DATABASE IF NOT EXISTS banque_of_blood;
USE banque_of_blood;

-- Table utilisateur
CREATE TABLE utilisateur (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    mot_de_passe VARCHAR(255) NOT NULL,
    role ENUM('Administrateur', 'Gestionnaire','Simple utilisateur') NOT NULL
);

-- Table blood (poche de sang)
CREATE TABLE blood (
    id INT AUTO_INCREMENT PRIMARY KEY,
    groupe_sanguin ENUM('A+','A-','O+','O-','B+','B-','AB+','AB-') NOT NULL,
    quantite_ml INT NOT NULL,
    date_collecte DATE NOT NULL,
    date_peremption DATE NOT NULL
);
