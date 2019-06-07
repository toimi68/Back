--connexio à la BDD--
mysql -u root -p
show databases;



--creer une base de donnée BDD
create database nom_de_la_BDD;
--selectionne une BDD--
USE omega
           --creation d'une table dans la BDD--
--Type de données(int,varchar,text,float,...)--
create table fruit(id_fruit INT(3),nom VARCHAR(60),origine VARCHAR(50),calibre INT(1),prix FLOAT,categorie VARCHAR(20));
--afficher toutes les tables--
show tables;
          --insertion dans la BDD--
INSERT INTO nom_de_la_table (id_fruit,nom,origine,calibre,prix,categorie) 
VALUES ('1','pomme','France','5','12.50','Golden');
--selectionner toutes les données d'une table--
select*from nom de la table;
-----afficher les données par rapport à une valeur-------
select prenom from stagiaires where yeux= marron;
              ou
select*from stagiaires where yeux='marron';              
        de maniére generale c'est
select nom_colonne from nom_de_la_table where nom_colonne ='valeur';
------afficher les données ds un ordre defini--------
SELECT*FROM stagiaires WHERE yeux = 'marron' ORDER BY prenom; 

---------afficher ds l'ordre décroissant--------
SELECT*FROM stagiaires WHERE yeux='marron' ORDER BY id_stagiaires DESC;

---selectionner les données d'une ou plusieurs colonnes, genre:noms et categorie---
select nom,categorie from fruit
----pour supprimer une ligne de la table avec condition
"delete from nom_de_la_table where condition"
--mettre à jour une colonne d'une table
update fruit set calibre='7' where id_fruit='2';
--mettre à jour plusieurs colonnes d'une table
UPDATE nom de la table(fruit) SET non de la colonne(calibre ='7') WHERE condition(id_fruit='3');
--ajouter une colonne à la table
ALTER TABLE nom_de_la_table ADD nom_de_la_colonne;
pour ajouter le lieu 
on peut faire: UPDATE fruit SET commerce='supermarché' WHERE id_fruit='3';-- opérateur de comparaison --

= Egale
<> Pas égale
! = Pas égale
> Supérieur
< Inférieur
>= Supérieur ou égale a
<= Inférieur ou égale a
IN liste de plusieur valeurs possible
BETWEEN recherche des valeurs comprrise dans un intérval donné (utile pour les
nombres ou dates)
LIKE recherche en spécifiant le debut, le milieu ou la fin d'un tocIS NULL valeur est nulle
IS NOT NULL valeur n'est pas null


--Selectionner des données entre (BETWEEN) un interval (fonctionne ds une requete utilisant WHERE)
SELECT*FROM bonbon WHERE id_bonbon BETWEEN 2 and 6;
--Selectionner des données qui ne sont pas comprises entre (NOT BETWEEN)un interval
SELECT *from bonbons WHERE id_bonbons NOT BETWEEN 3 AND 6.
--------afficher un nombre limité de données--------
SELECT*FROM stagiaires LIMIT 2;
--afficher un nombre limite de donnée en sautant des lignes
    SELECT*FROM STAGIAIRES limit 1,2.
    LE 1ER CHIFFRE REPRESENTE L OFFSET dc le nb  de ligne ignorées et le 2nd le nb de donnees à afficher
    CREATE  TABLE xxx(id INT(3)primary key auto_increment not null)
    pour selectioner selon l anciennete du vehicule
    select*from voitures order by voitures desc;
    create database magasin;
    table produit qui contient les colonnes suivantes
    create table voitures(id-car INT(3) primary key auto_increment not null,marque varchar,(50)model varchar(60),couleur varchar(30)prix(float),date de vente date)
---pour ajouter une colonne-------ici colonne stock
ALTER TABLE voitures ADD stock INT(3);
pour afficher la date 
type=>INT
date_ajout
type date=> a-m-jour
         =>a-m-j  h-m-s 
         timestamp (les secondes ecoulées depuis 01-01-1970)
=>YEAR -1999--