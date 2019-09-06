<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>conducteur</title>
</head>
<?php
class conducteur
{
    public $conducteur;
   public function setConducteur ($conducteur)
{
$this->conducteur=$conducteur;
}
public function getConducteur()
{
    return $this-> conducteur;
}



}
?>
<body>
    <table>
   <tr>
       <th>preNom</th>
       <th>nom</th>
       <th>id_conducteur</th>
   </tr>

   <tr>
       <td>julien</td>
       <td>avigny</td>
       <td>1</td>
   </tr>
   <tr>
       <td>Morgane</td>
       <td>alamia</td>
       <td>2</td>
   </tr>
   <tr>
       <td>philippe</td>
       <td>pandre</td>
       <td>3</td>
   </tr>
   <tr>
       <td>amelie</td>
       <td>blondelle</td>
       <td>4</td>
   </tr>
   <tr>
       <td>alex</td>
       <td>richy</td>
       <td>5</td>
   </tr>

   
</table>
</body>
</html>















