<link rel="stylesheet" href="pacman.css"/>
<?php

require('Ghost.php');
require('Maze.php');
require('Buttons.php');

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

$maze = new Maze();
$maze->Render();

$buttons = new Buttons();
$buttons->Render();
?>
