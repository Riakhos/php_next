CREATE DATABASE blog_comments;
USE blog_comments;

CREATE TABLE comments (
    id_comments int NOT NULL AUTO_INCREMENT,
    pseudo varchar(10) NOT NULL,
    message text NOT NULL,
    date_heure_message TIMESTAMP NOT NULL,
    PRIMARY KEY (id_comments)
) ENGINE=InnoDB;