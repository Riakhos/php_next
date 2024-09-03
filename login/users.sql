CREATE DATABASE users;
USE users;

CREATE TABLE membre (
    id_membre INT NOT NULL AUTO_INCREMENT,
    nom VARCHAR(20) NOT NULL,
    prenom VARCHAR(20) NOT NULL,
    email VARCHAR(50) NOT NULL,
    mdp VARCHAR(60) NOT NULL,
    PRIMARY KEY (id_membre)
    ) ENGINE = InnoDB;