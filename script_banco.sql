-- Criação do banco de dados
-- CREATE DATABASE usuarios;

-- Use o banco de dados
-- USE usuarios;

-- Criação da tabela usuarios
CREATE TABLE usuarios (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    usuario TEXT NOT NULL,
    senha TEXT NOT NULL
);

INSERT INTO usuarios (usuario, senha) VALUES
    ('admin', 'admin'),
    ('etec', 'etec'),
    ('usuario1', 'senha1'),
    ('usuario2', 'senha2'),
    ('usuario3', 'senha3');