CREATE TABLE prova (
    nome VARCHAR(50) NOT NULL,
    cognome VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL primary key,
    password VARCHAR(255) NOT NULL,
	n_adottati INT check (n_adottati >= 0),
 	n_caricati INT check (n_caricati >= 0)
);

INSERT INTO prova (nome, cognome, email, password, n_adottati, n_caricati)
VALUES
  ('Mario', 'Rossi', 'mario@email.com', 'password123', 2, 3),
  ('Luca', 'Verdi', 'luca@email.com', 'password456', 1, 4),
  ('Giulia', 'Bianchi', 'giulia@email.com', 'password789', 0, 2),
  ('Paolo', 'Neri', 'paolo@email.com', 'passwordabc', 4, 6),
  ('Sara', 'Gialli', 'sara@email.com', 'passworddef', 3, 1);

