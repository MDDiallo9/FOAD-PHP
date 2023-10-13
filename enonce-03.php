<?php
function debug($value)
{
    echo '<pre style="background-color:black;color:white;overflow: auto;padding: 1rem;font-family:monospace;">';
    print_r($value);
    // var_dump($value);
    echo '</pre>';
}

$path = 'data/colors.json';
$jsonString = file_get_contents($path);
$jsonData = json_decode($jsonString, true);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .box {
            height: 100px;
            width: 100px;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>
    <?php
    foreach ($jsonData as $color) {
    ?>
        <div class="box" style="background-color:<?= $color["value"] ?> ;">
            <?= $color["color"] ?>
        </div>
    <?php } ?>
</body>

</html>