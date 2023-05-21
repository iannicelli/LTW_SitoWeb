CREATE TABLE utenti (
    nome VARCHAR(50) NOT NULL,
    cognome VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL primary key,
    password VARCHAR(255) NOT NULL
);

ALTER TABLE utenti
ADD COLUMN n_adottati INT CHECK (n_adottati >= 0) ,
ADD COLUMN n_caricati INT CHECK (n_caricati >= 0) ;

ALTER TABLE utenti
ALTER COLUMN n_adottati SET DEFAULT 0,
ALTER COLUMN n_caricati SET DEFAULT 0;

select * from utenti;


