CREATE TABLE utenti (
    nome VARCHAR(50) NOT NULL,
    cognome VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL primary key,
    password VARCHAR(255) NOT NULL
);