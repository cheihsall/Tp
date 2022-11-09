
USE MaBase;

CREATE TABLE utilisateurs
(
   id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
   Matricule INT NOT NULL,
    Nom VARCHAR(100) NOT NULL,
    Prenom VARCHAR(100) NOT NULL,
    Email VARCHAR(255) NOT NULL,
    `Role` ENUM('User', 'Administrateur') NOT NULL,
    `MotDePasse` VARCHAR(255) NOT NULL,
    Etat BOOLEAN DEFAULT 0,
    `DateInscription` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    DateModif DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    DateArchiv DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
    
);