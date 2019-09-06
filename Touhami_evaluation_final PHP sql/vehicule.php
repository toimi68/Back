<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
     crossorigin="anonymous">
    <title>vehicule</title>
</head>
<?php
class vehicule
{
  private $vehicule;
  public function __construct($arg)
  {
public function setVehicule($vehicule)
{
$this->vehicule=$vehicule;


}

public function getVehicule()
{
    return $this->vehicule;
}

  }
}





?>
<body>

  <table>
  
  <tr>
  <th>id_vehicule</th>
  <th>marque</th>
  <th>modele</th>
  <th>couleur</th>
  <th>immatriculation</th> 
  </tr>
  
  
  <tr>
  <td>501</td>
  <td>peugeot</td>
  <td>807</td>
  <td>noir</td>
  <td>AB-355-CA<</td>
  
  </tr>

  <tr>
  <td>502</td>
  <td>citroen</td>
  <td>c8</td>
  <td>>bleu</td>
  <td>FG-953-HI</td>
  
</tr>


  <tr>
  <td>503</td>
  <td>mercedes</td>
  <td>cls</td>
  <td>vert</td>
  <td>CE-122-AE</td>
  
</tr>

  <tr>
  <td>504<</td>
  <td>volvagen</td>
  <td>tourran</td>
  <td>gris</td>  
  <td>XN-973-MM</td>
  </tr>
  
 <tr>
  <td>505 </td>
  <td>skoda</td>
  <td>octavia</td>
  <td>noir</td>  
  <td>SO-322-NV</td>   
  </tr> 
<tr>
  <td>506</td> 
  <td>volvagen</td> 
  <td>passat</td> 
  <td>gris</td> d
  <td>PB-631-TK</td> 
  </tr> 
  </table>  
</body>
</html>