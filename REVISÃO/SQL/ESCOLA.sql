CREATE DATABASE ESCOLA;

USE ESCOLA;

CREATE TABLE Aluno (
    id_aluno INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    data_nascimento DATE
);


CREATE TABLE Professor (
    id_professor INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    especialidade VARCHAR(100)
);


CREATE TABLE Curso (
    id_curso INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100),
    descricao TEXT,
    id_professor INT,
    FOREIGN KEY (id_professor) REFERENCES Professor(id_professor)
);

-- Criação da tabela Matricula
CREATE TABLE Matricula (
    id_matricula INT PRIMARY KEY AUTO_INCREMENT,
    id_aluno INT,
    id_curso INT,
    data_matricula DATE,
    FOREIGN KEY (id_aluno) REFERENCES Aluno(id_aluno),
    FOREIGN KEY (id_curso) REFERENCES Curso(id_curso)
);


CREATE TABLE Avaliacao (
    id_avaliacao INT PRIMARY KEY AUTO_INCREMENT,
    id_matricula INT,
    nota DECIMAL(5,2),
    data_avaliacao DATE,
    FOREIGN KEY (id_matricula) REFERENCES Matricula(id_matricula)
);
