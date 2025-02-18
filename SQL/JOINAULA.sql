CREATE DATABASE JoinAula;

USE JoinAula;


CREATE TABLE Pessoa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    nacionalidade VARCHAR(50) NOT NULL
);


CREATE TABLE Endereco (
    id INT AUTO_INCREMENT PRIMARY KEY,
    rua VARCHAR(100) NOT NULL,
    numero INT NOT NULL,
    pessoa_id INT,
    FOREIGN KEY (pessoa_id) REFERENCES Pessoa(id) 
);



