CREATE DATABASE LOJA;

USE LOJA;

CREATE TABLE Clientes(

id_cliente INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(100) NOT NULL
);

CREATE TABLE Pedidos(
id_pedido INT AUTO_INCREMENT PRIMARY KEY,
id_cliente INT,
data_pedido DATE,
FOREIGN KEY (id_cliente) REFERENCES Clientes(id_cliente)
);

INSERT INTO Clientes (nome) VALUES
('Carlos'),
('Ana'),
('Bruna'),
('Jessica'),
('Victor'),
('Fernanda');

INSERT INTO Pedidos (id_cliente, data_pedido) VALUES

(1, '2024-11-11'),  
(1, '2022-10-20'),  
(1, '2021-07-25'),  -- Carlos
(2, '2023-09-01'),  -- Ana
(5, '2024-08-28'),  -- Victor
(6, '2025-01-07'),  
(6, '2025-03-19');  -- Fernanda








