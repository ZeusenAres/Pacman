<?php

class Maze
{
    public function __construct()
    {
        $this->Board = array(array());
        $this->initialize();
    }

    private function Dot() : string
    {
        return "<td class='dot'>&nbsp;</td>";
    }

    private function Empty() : string
    {
       return "<td class='empty'/>";
    }

    private function Cell(int $content) : string
    {
        return $content == 1 ? $this->Dot() : $this->Empty();
    }

    public function Show()
    {
        echo "<table cellspacing='0'>";
        for ($y = 0; $y < count($this->Board); $y++)
        {
            $row = $this->Board[$y];
            echo "<tr>";
            for ($x = 0; $x < count($row); $x++)
            {
              echo $this->Cell($row[$x]);
            }
            echo "</tr>";
        }
        echo "</table>";
    }

    private function initialize()
    {
        $this->Board = [
            [1, 1, 1, 1, 1, 1],
            [1, 0, 0, 0, 0, 1],
            [1, 0, 0, 0, 0, 1],
            [1, 0, 0, 0, 0, 1],
            [1, 1, 1, 1, 1, 1],
          ];
    }

    private array $Board;
}

?>