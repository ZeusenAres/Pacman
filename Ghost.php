<?php

require('position.php');

class Ghost
{
    public function __construct(string $color)
    {
        $this->Position = new Position(0, 0);

        $this->Color = $color;

        $this->EyeDirection = "up";
    }

    public function __toString() : string
    {
        return "Ghost " . $this->Color . " " . $this->Position;
    }

    public string $Color;

    public string $EyeDirection;

    public Position $Position;
}