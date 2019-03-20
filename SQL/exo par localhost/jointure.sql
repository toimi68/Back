jointure interne ou INNER JOIN sert à lier plusieurs tables entre elles.
cette commande retourne les enregistrements qd il y a au - 1 ligne ds chaque colonne
qui correspondent à la condition
SELECT*FROM nom_de_la_table INNER JOIN nom_de_la_table2 ON condition;
ou
SELECT*FROM nom_de_la_table INNER JOIN nom_de_la_table2 WHERE condition;
---CROSS JOIN sert à croiser chaque lignes d'un tableau A avec les lignes d'un tableau B.
Retourne le produit(*) de ces 2 tableaux.Generant la commande CROSS JOIN est combinée avec la commande WHERE  pr filtrer les resultats qui respectent certaines conditions.
SELECT*FROM nom_de_la_table CROSS JOIN nom_de_la_table2;
ou
SELECT*FROM nom_de_la_table1,nom_de_la_table2; 

LEFT JOIN permet de lister ts les enregistrements de la table gauche meme s il n y a pas de correspondant ds la 2éme table.
SELECT*FROM nom_de_la_table_1 LEFT JOIN nom__table_2 ON condition;
SELECT*FROM nom_de_la_table_1 LEFT OUTTER JOIN nom_table_2 ON condition;

RIGHT JOIN permet de lister ts les enregistrements de la table droite meme s'il n' y a pas de correspondance ds la 2 èm table.
SELECT*FROM nom_table_1 RIGHT JOIN nom_table_2 ON condition;
ou
SELECT*FROM nom_table_1  RIGHT OUTER JOIN nom_table_2 ON condition;