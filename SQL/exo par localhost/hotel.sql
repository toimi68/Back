exprimer les requetes suivantes enSQL-
*n° de chambre avec tv:
SELECT num-chambre FROM chambres WHERE equipement LIKE '%tv';
*n°de chambre et les capacites:
SELECT num_chambre,nb_pers FROM chambres;
*la capacite theorique d accueil de l hotel:
SELECT SUM(nb_pers)FROM chambres;
ou
SELECT SUM(nb_pers)as capacite FROM chambres;
*prix par personne des chambres avec tv:
SELECT AVG (prix/pers)FROM chambres WHERE equipement LIKE '%tv%';
   ou
   SELECT prix/nb_pers FROM chambres WHERE equipement LIKE '%tv%';

*les numeros des chambres et le numero des clients ayant reserve des chambres pour le 09/02/2004.
SELECT num_chambre,num_client FROM reservation WHERE date_arrivé ='2019-03-30';
*les n° de chambre coutant au minimum 80 € ayant un bain et valant au maximum 120€:
SELECT num_chambre FROM chambres WHERE confort LIKE 'lit double'AND prix BETWEEN 80 AND 120;
                         ou
SELECT num_chambre FROM chambres WHERE hautDeGamme LIKE  'jakuzi'AND prix <=80<=150;

*les n° deds chambres coutant au max 80€ ou ayant un bain et valant au maximum 120€:
SELECT COUNT(id_chambre)FROM chambres WHERE prix BETWEEN 50 AND 150;
*les noms,prenom,adresse des clients dont le nom commence par "d":
SELECT nom,prenom,adresse FROM clients WHERE nom LIKE 'd%',
-- Les noms des clients n'ayant pas fixé la date de départ.
SELECT nom FROM clients AS c, reservation AS r WHERE date_depart IS NULL AND c.num_client = r.num_client;
-- Jointure entre les tables client et réservation avec AS(alias) et INNER JOIN
SELECT *FROM clients AS c INNER JOIN reservation AS r WHERE c.num_client=r.num_client;
-- Jointure entre les tables client et réservation avec INNER JOIN