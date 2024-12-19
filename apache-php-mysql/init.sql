CREATE DATABASE IF NOT EXISTS my_database;

USE my_database;

CREATE TABLE IF NOT EXISTS usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30),
    password VARCHAR(30)
);

INSERT INTO usuario (name, password) VALUES ('Archmagos Istrakaris', '01110');
INSERT INTO usuario (name, password) VALUES ('Skitaari marshall Arkostic', '011001');
INSERT INTO usuario (name, password) VALUES ('Techprist Sistrius', '01110');
