/* 
    todo 1. Créer une BDD bibliothèque
        todo Table : livre (id_livre, titre, auteur)
*/

CREATE DATABASE bibliotheque;
USE bibliotheque;

CREATE TABLE author (
    id_author INT PRIMARY KEY AUTO_INCREMENT,
    name_author VARCHAR(25),
    firstname_author VARCHAR(10),
    date_birthday DATE,
    city_birthday VARCHAR(25)
);

CREATE TABLE category (
    id_category INT PRIMARY KEY AUTO_INCREMENT,
    name_category VARCHAR(25)
);

CREATE TABLE book (
    id_book INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(25),
    descriptif text,
    date_partition INT,
    name_editor VARCHAR(20),
    id_author INT,
    FOREIGN KEY (id_author) REFERENCES author(id_author)
);

CREATE TABLE book_category (
    id_book INT,
    id_category INT,
    PRIMARY KEY (id_book, id_category),
    FOREIGN KEY (id_book) REFERENCES book(id_book),
    FOREIGN KEY (id_category) REFERENCES category(id_category)
);