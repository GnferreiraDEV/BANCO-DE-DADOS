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


INSERT INTO Pessoa (nome, nacionalidade) 
VALUES 
('João Silva', 'Brasileiro'),
('Maria Souza', 'Portuguesa'),
('Carlos Lima', 'Brasileiro');


INSERT INTO Endereco (rua, numero, pessoa_id) 
VALUES 
('Rua A', 123, 1),  -- Endereço de João Silva
('Rua B', 456, 2),  -- Endereço de Maria Souza
('Rua C', 789, 3);  -- Endereço de Carlos Lima

SELECT p.id, p.nome, p.nacionalidade, e.rua, e.numero
FROM Pessoa p
JOIN Endereco e ON p.id = e.pessoa_id;

