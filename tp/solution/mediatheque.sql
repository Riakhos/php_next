CREATE TABLE mediatheque;
USE mediatheque;

CREATE TABLE livre (
    id_livre INT NOT NULL AUTO_INCREMENT, 
    titre VARCHAR(30) NOT NULL,
    auteur VARCHAR(30) NOT NULL,
    PRIMARY KEY (id_livre)
    ) ENGINE = InnoDB;