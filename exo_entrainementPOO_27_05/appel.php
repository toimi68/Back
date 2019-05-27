<?php

require_once('exo_27_05.php');//j'instancie ma class Etudiant
$etudiant=new Etudiant;
$etudiant->setPrenom('touhami');
$etudiant->setnom('zarouel');
$etudiant->setEmail('toim3@free.fr');
$etudiant->setTelephone('0667686561');
$e = $etudiant->getInfos();

?>

<h2>Etudiant : <?= $e['prenom'] .''. $e['nom'] ?></h2>


Prenom :<?= $e['prenom']?><br>
Nom:<?= $e['nom']?><br>
telephone:<?= $e['telephone'] ?><br>
email<?= $e['email'] ?> <br>