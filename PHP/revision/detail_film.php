<?php
echo'<pre>';print_r($_GET);echo '</pre>';
echo "<h1>detail du film n°<strong> $_GET[id_films] </strong></h1>";
foreach($_GET as $key => $value)
{
    echo "$key : $value<br>";
}