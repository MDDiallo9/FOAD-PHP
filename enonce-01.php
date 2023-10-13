<?php 
$tempCelsius = [25,03,35,11];

function conversion($tempC){
    return ($tempC * 9/5) + 32;
}

echo conversion(25);
?>

<table>
  <tr>
    <th>°C</th>
    <th>°F</th>
    
  </tr>
  <tr>
    <td><?= $tempCelsius[0] ?></td>
    <td><?= $tempCelsius[1] ?></td>
    <td><?= $tempCelsius[2] ?></td>
    <td><?= $tempCelsius[3] ?></td>
    
  </tr>
  <tr>
    <td><?= conversion($tempCelsius[0]) ?></td>
    <td><?= conversion($tempCelsius[1]) ?></td>
    <td><?= conversion($tempCelsius[2]) ?></td>
    <td><?= conversion($tempCelsius[3]) ?></td>
    
  </tr>
</table>