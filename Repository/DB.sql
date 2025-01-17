-- Active: 1732187725602@@127.0.0.1@3306@immobilier
DROP TABLE IF EXISTS logement;
CREATE TABLE IF NOT EXISTS logement(
    id_logement INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(50),
    adresse VARCHAR(50),
    ville VARCHAR(50),
    cp INT(5),
    surface INT(5),
    prix INT(10),
    photo VARCHAR(50),
    type VARCHAR(50),
    description TEXT
);

SELECT * FROM logement;