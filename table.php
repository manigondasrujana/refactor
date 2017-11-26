<?php
class table
{
    static function createTable($td)
    {
        echo '<table>';
        foreach ($td as $tr)
        {
            echo "<tr>";
            foreach ($tr as $tc) {
                echo "<td>$tc</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
}
?>