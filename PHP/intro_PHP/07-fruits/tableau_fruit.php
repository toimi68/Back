<?php

// 1- D�clarer un tableau ARRAY avec tout les fruits
//reponse:
$tab_fruits = array("pommes","bananes","peches","cerises");
//	2- D�clarer un tableau ARRAY avec les poids suivants : 100, 500, 1000, 1500, 2000, 3000, 5000, 10000.
	//reponse:
	$tab_poids = array (100,500,1000,1500,2000,3000;5000,10000);
	//3- Affichez les 2 tableaux
//reponse:
	echo '<pre>';print_r($tab_fruits); echo '</pre>';
	echo '<pre>';print_r($tab_poids); echo '</pre>';

	//4- Sortir le fruit "cerises" et le poids 500 en passant par vos tableaux pour les transmettres � la fonction "calcul()" et obtenir le prix.
	//reponse:
echo ($tab_fruits['0'],$tab_poids['1']) . '<hr>';
	//5- Sortir tout les prix pour les cerises avec tout les poids (indice: boucle).
	//reponse:
	echo '<div class="col-md-6 offset-md-3 mx-auto alert alert-info text-center">';
	foreach{$tab_poids as $poids)
		echo calcul($tab_fruits[0],$poids).'<hr>';
	}
	echo'</div><hr>';
	//6- Sortir tout les prix pour tout les fruits avec tout les poids (indice: boucle imbriqu�e).
	//reponse:
foreach($tab_fruits as $fruits)
{
	echo '<div class="col-md-6 offset-md-3 mx-auto alert alert-info text-center">';
	foreach($tab_poids as $poids)
	{
		echo calcul($fruits  $poids).'<hr>';
	}
	echo '</div><hr>';
}

	//7- Faire un affichage dans une table HTML pour une pr�sentation plus sympa.
	 //reponse:
	 echo '<table class="table table-border text-center"><tr>';
	 echo '<th>poids</th>';
	 foreach($tab_fruits as $fruit)
	 {
echo"<th>$fruit</th>";
	 }
	 
echo '<tr>'	;
foreach($tab_poids as $poids)
echo '<tr>';
echo "<th>$poids g</th>";
foreach($tab_fruits as $fruit)
{
	echo "<td>".calcul($fruit,$poids)."</td>";
}
echo '<tr>';
}
	 echo'</table>';



	
	 //1--
	 require_once("fonction.php");
		$fruits=array('cerises','bananes','pomme','peches');
		$poids =array(100, 500, 1000, 1500, 2000, 3000, 5000, 10000);
	//2-	
	echo '<pre>'; print_r($fruits);echo '</pre>';
	echo '<pre>';var_dump($poids); echo '</pre>';


	require_once('fonctions.php');
		echo calcul($fruits[0],$poids[1]);
		foreach()

	 ?>
     <!DOCTYPE html>
	 <html lang="en">
	 <head>
		 <meta charset="UTF-8">
		 <meta name="viewport" content="width=device-width, initial-scale=1.0">
		 <meta http-equiv="X-UA-Compatible" content="ie=edge">
		 <title>Document</title>
	 </head>
	 <body>
	 </body>
	 </html>
	 
	            