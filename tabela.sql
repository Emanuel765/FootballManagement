CREATE DATABASE IF NOT EXISTS futebol_db;
USE futebol_db;

CREATE TABLE IF NOT EXISTS jogadores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_completo VARCHAR(100) NOT NULL,
    apelido VARCHAR(50) NOT NULL,
    num_calcado INT NOT NULL,
    telefone VARCHAR(20) NOT NULL,
    data_nascimento DATE NOT NULL,
    num_camisola INT NOT NULL,
    posicao VARCHAR(50) NOT NULL
);
