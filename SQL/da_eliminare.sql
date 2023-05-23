select * from utenti
select * from animali order by id
select * from adozioni
select * from caricamento


update utenti
set n_adottati = 1
where email='federicalavini@gmail.com'

SELECT * 
FROM animali JOIN caricamento on caricamento.id_animale = animali.id
where email='federicalavini@gmail.com'
