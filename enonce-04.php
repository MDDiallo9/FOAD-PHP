<?php
function debug($value)
{
    echo '<pre style="background-color:black;color:white;overflow: auto;padding: 1rem;font-family:monospace;">';
    print_r($value);
    // var_dump($value);
    echo '</pre>';
}

$path = 'https://dummyjson.com/user';
$jsonString = file_get_contents($path);
$jsonData = json_decode($jsonString, true);

/* debug($jsonData) */

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        main {
            display: flex;
            flex-wrap: wrap;
        }
    </style>
</head>

<body>
    <main>
        <?php
        foreach ($jsonData["users"] as $user) {
        ?>
            <article>
                <img src="<?= $user["image"] ?>" alt="">
                <p><?= $user["firstName"] ?></p>
                <p><?= $user["lastName"] ?></p>
                <p><?= $user["email"] ?></p>
            </article>
        <?php } ?>
    </main>
</body>

</html>