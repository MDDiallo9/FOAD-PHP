<?php

$nums = [27, 15, 34, 379, 248, 5643, 81, 211, 999, 142, 300, 572];

?>
<ul>
    <?php
    foreach ($nums as $num) {
        if ($num % 2 === 0) {
            echo "<li>" . $num . " : pair" . "</li>";
        } else {
            echo "<li>" . $num . " : impair" . "</li>";
        }
    };
    ?>
</ul>