<?php


class Maze
{
    public function __construct()
    {
        $this->Board = array(array());
        $this->initialize();
    }

    public function Show()
    {
        for ($y = 0; $y < count($this->Board); $y++)
        {
            $row = $this->Board[$y];
            for ($x = 0; $x < count($row); $x++)
            {
              echo $row[$x] == 1 ? "." : "&nbsp;";
            }
            echo "<br/>";
        }
    }

    private function initialize()
    {
        $this->Board = [
            [1, 1, 0, 1, 1],
            [1, 0, 1, 0, 1],
            [0, 1, 0, 1, 1]
          ];
    }

    private array $Board;
}

?>