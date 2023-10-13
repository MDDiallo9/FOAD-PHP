<?php 
$tempCelsius = [25,03,35,11];

function conversion($tempC){
    return ($tempC * 9/5) + 32;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://classless.de/classless-tiny.css">

</head>
<body>
<table>
  <tr>
    <th>°C</th>
    <th>°F</th>
    
  </tr>
  <tr>
    <td><?= $tempCelsius[0] ?></td>
    <td><?= conversion($tempCelsius[0]) ?></td>
  </tr>
  <tr>
    <td><?= $tempCelsius[1] ?></td>
    <td><?= conversion($tempCelsius[1]) ?></td>
  </tr>
  <tr>
    <td><?= $tempCelsius[2] ?></td>
    <td><?= conversion($tempCelsius[2]) ?></td>
  </tr>
  <tr>
    <td><?= $tempCelsius[3] ?></td>
    <td><?= conversion($tempCelsius[3]) ?></td>
  </tr>
  
</table>
</body>
</html>