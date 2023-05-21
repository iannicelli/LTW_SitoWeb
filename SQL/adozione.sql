CREATE TABLE adozioni (
	id_animale int primary key,
    nome 	VARCHAR(255) NOT NULL,
	indirizzo VARCHAR(255),
	provincia VARCHAR(255),
	telefono VARCHAR(255),
	cognome VARCHAR(255),
	citta VARCHAR(255),
	cap VARCHAR(255),
	email VARCHAR(255),
   	documento BYTEA,
	desiderio VARCHAR(255),
	famiglia VARCHAR(255),
	varie VARCHAR(255),
	occuparsi VARCHAR(255),
	altri VARCHAR(255)
);
