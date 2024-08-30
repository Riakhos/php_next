CREATE DATABASE bibliotheque;
USE bibliotheque;

CREATE TABLE book (
    id_book INT NOT NULL AUTO_INCREMENT ,
    title varchar(25) NOT NULL,
    autor varchar(25) NOT NULL,
    descriptif text NOT NULL,
    editor varchar(25) NOT NULL,
    date_partition DATE(Y),
    PRIMARY KEY (id_book)
) ENGINE=InnoDB;
