<?php

require('Ghost.php');

$ghosts = [
    new Ghost("red"),
    new Ghost("yellow"),
    new Ghost("pink"),
    new Ghost("blue")
    ];

foreach ($ghosts as $ghost)
{
    echo $ghost . "</br>";
}

?>
