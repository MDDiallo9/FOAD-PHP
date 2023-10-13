<?php
function debug($value)
{
    echo '<pre style="background-color:black;color:white;overflow: auto;padding: 1rem;font-family:monospace;">';
    print_r($value);
    // var_dump($value);
    echo '</pre>';
}

$path = 'https://randomuser.me/api/?results=20';
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
            gap: 2rem;
        }
        .fem{
            text-decoration: underline;
        }
        article{
            text-align: center;
            border: solid 1px black;
            min-width: 16rem;
        }
    </style>
</head>

<body>
    <main>
        <?php
        foreach ($jsonData["results"] as $user) {
        ?>
            <article>
                <img src="<?= $user["picture"]["large"] ?>" alt="">
                <?php 
                if ($user["gender"] === "female" ){
                    echo '<p class="fem">'.$user["name"]["first"]."</p>";
                    echo '<p class="fem">'.$user["name"]["last"]."</p>";
                }else{
                    echo '<p>'.$user["name"]["first"]."</p>";
                    echo '<p>'.$user["name"]["last"]."</p>";
                }
                ?>
                <p><?= $user["email"] ?></p>
            </article>
        <?php } ?>
    </main>
</body>

</html>