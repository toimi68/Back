<?php
require_once'connexion.php';
extract($_POST);
$tab=array();
$result = $bdd->querry('SELECT*FROM produit');
$tab['resultat'] ='<table class="table">';
$tab['resultat'] ='<tr>';
for($i = 0;$i<$resultat->columnCount();$i++){
$column =$result->getColumnCount($i);
$tab['resultat'].="<th>$column[name]</th>";
}
$tab['resultat'].='</tr>';
while($produit =$result->fetch(PDO::FETCH_ASSOC))/
$tab['resultat'].='<tr>';
foreach($produit  as $values)
{
    $tab['resultat'].='<td>';
    $tab['resultat'] = '</table>';
    echo json_encode($tab);
