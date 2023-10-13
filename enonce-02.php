<?php

function debug($value)
{
    echo '<pre style="background-color:black;color:white;overflow: auto;padding: 1rem;font-family:monospace;">';
    print_r($value);
    // var_dump($value);
    echo '</pre>';
}

$path = 'data/persons.json';
$jsonString = file_get_contents($path);
$jsonData = json_decode($jsonString, true);
debug($jsonData);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3><?= $jsonData[2]["friends"][1]["name"] ?></h3>
    <p>La couleur des yeux de Ball Shaffer est : <strong><?= $jsonData[2]["eyeColor"] ?></strong></p>
    <main>
        <?php
        foreach ($jsonData as $person) {
        ?>

            <article>
                <img src=<?= $person["picture"] ?> alt="">
                <h2>Name : <?= $person["name"] ?></h2>
                <h3>Age : <?= $person["age"] ?></h3>
                <p>Eye color : <?= $person["eyeColor"] ?></p>
                <p>Email : <?= $person["email"] ?></p>
                <p>Favorite fruit : <?= $person["favoriteFruit"] ?></p>
                <?php
                if ($person["isActive"] === true) {
                    echo "<p>" . "ACTIF" . "</p>";
                }
                ?>
                <p>Tags : <?= implode(",", $person["tags"]) ?></p>
                <hr>

            </article>

        <?php
        }
        ?>
    </main>
</body>

</html>