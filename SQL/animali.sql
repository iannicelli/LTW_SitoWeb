CREATE TABLE animali (
	id int primary key,
    nome VARCHAR(50) NOT NULL,
   	image BYTEA,
	casa_provvisoria VARCHAR(255) NOT NULL,
	età int,
	tipologia VARCHAR(255),
	descrizione VARCHAR(255) not null,
	razza varchar(255),
	adottato bool ,
	adottato_da varchar(255),
	caricato_da varchar(255)
   
);


CREATE TABLE immagini (
    nome VARCHAR(255) primary key,
    valore BYTEA
);

select * from animali