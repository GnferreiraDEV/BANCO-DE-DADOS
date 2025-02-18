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


SELECT p.id_pedido, c.nome
FROM Pedidos p
JOIN Clientes c ON p.id_cliente = c.id_cliente;

SELECT c.nome, p.id_pedido
FROM Clientes c
LEFT JOIN Pedidos p ON c.id_cliente = p.id_cliente;

SELECT c.nome, COUNT(p.id_pedido) AS numero_de_pedidos
FROM Clientes c
LEFT JOIN Pedidos p ON c.id_cliente = p.id_cliente
GROUP BY c.id_cliente;



-- O código cria um banco de dados chamado 'LOJA' com duas tabelas principais: 'Clientes' e 'Pedidos'. A tabela 'Clientes' contém informações sobre os clientes (id_cliente e nome), enquanto a tabela 'Pedidos' armazena os pedidos realizados, com referência à tabela 'Clientes' através do campo id_cliente. Após a criação das tabelas, são inseridos dados de exemplo. Em seguida, são feitas três consultas para exibir informações dos pedidos, incluindo o nome do cliente associado ao pedido, a lista de todos os clientes e seus pedidos, e a contagem do número de pedidos por cliente. A estrutura de relacionamento entre as tabelas é garantida por meio de chaves primárias e estrangeiras.






