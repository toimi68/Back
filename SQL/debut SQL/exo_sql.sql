 Exercice: Créer une base de donnée magasin
-- Créé une table produit qui contient les colonnes suivantes:
-- id -> INT PRIMARY KEY AUTO_INCREMENT NOT NULL
create table voitures(id-car INT(3) primary key auto_increment not null,marque varchar,(50)model varchar(60),couleur varchar(30)prix(float),date de vente date)

-- nom_produit -> débrouillez-vous
type=>varchar
-- catégorie_produit -> débrouillez-vous
type=>varchar
-- reference_produit -> débrouillez-vous
type=>varchar
-- prix_produit -> débrouillez-vous
type=>INT/FLOAT
-- stock_produit -> débrouillez-vous
ALTER TABLE voitures ADD stock INT(3);type=>INT
-- date_ajout -> débrouillez-vous
date_ajout
type date=> a-m-jour
         =>a-m-j  h-m-s 
         timestamp (les secondes ecoulées depuis 01-01-1970)
=>YEAR -1999-
-- Insérer au moins 20 produits
insert into(nom de la table)voitures(marque,model,couleur,prix,date-vente)
values('lamborghini','Countach','blanc','500000','2018-02-30');
-- Afficher tous les produits classé du plus récent au plus ancien
SELECT*FROM voitures ORDER BY date_vente DESC;
-- Afficher les 10 premiers produits
SELECT *FROM voitures LIMIT 1,10;
-- Afficher les 10 derniers produits

-- Ajouter une colonne date_vente
ALTER TABLE voitures ADD date_livraison DATE;
-
--ajouter une date de livraison  aux produits

UPDATE voitures SET date_livraison='2019.02.20'WHERE id_voiture ='2';
-- Afficher les produits entre 2 date de vente
SELECT*FROM voitures WHERE date_vente BETWEEN '2019-02-20'AND'2019-03-30';
-- Afficher les 10 derniers produits
-- Afficher les 10 produits du milieu
SELECT *FROM voitures LIMIT 1,4;
             ou
SELECT*FROM voitures WHERE id_voiture BETWEEN 2 AND 5;
-- Afficher les produits commencent par une lettre spécifique

SELECT*FROM voitures WHERE marque LIKE 'l%';

cf base "sql"



