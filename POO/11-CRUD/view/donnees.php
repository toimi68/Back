<?php
//echo '<pre>';print_r($donnees);echo'</pre>';
//$donnees correspond à l'indice donnees declare dans la methode render du controller
?>
<div>
<a href="?op=add" class="btn btn-large btn-info mb-2"><i class="fas fa-plus"> Ajouter un nouvelle donnée</i>
</a>         </div>
<table class="table table-bordered text-center">
<thead><tr>
<th>ID</th><!--on creer manuellement un champ ns l'avons supprimer au mommentb de la requete SQL 
ds EntityRepository-->
<?php foreach($fields as $value): ?>
<th><?= $value['Field']?></th>
<?php endforeach; ?>
<th>details</th>
<th>modifier</th>
<th>supprimer</th>
<tr></thead>
<tbody>
<?php foreach($donnees as $value): ?>
<tr>
<td><?= implode('</td><td>', $value) ?></td>
<td><a href="?op=select&id=<?=$value[$id]?>" class="text-dark"><i class="fas fa-eye"></i> </a></td>
<td><a href="?op=update&id= <?=$value[$id]?>" class="text-dark"><i class="fas fa-wrench"></i></td>
<td><a href="?op=delete&id=<?=$value[$id]?>" class="text-dark"><i class="fas fa-trash-alt"></i></a> </td>
</tr>
<?php endforeach; ?>
</tbody>
</table>