<?php
class htmlTable
{
    static function createTable($data)
    {
        echo '<table border=1>';
        echo '<tr><th>id</th><th>email</th><th>fname</th><th>lname</th><th>phone</th><th>birthday</th><th>gender</th><th>password</th></tr>';

        foreach ($data as $row)
        {
            echo "<tr>";
            foreach ($row as $column) {
                echo "<td>$column</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
  static function createTable1($data)
    {
        echo '<table border=1>';
                    echo '<tr><th>ID</th><th>OwnerEmail</th><th>OwnerId</th><th>createddate</th><th>duedate</th><th>message</th><th>isdone</th></tr>';


        foreach ($data as $row)
        {
            echo "<tr>";
            foreach ($row as $column) {
                echo "<td>$column</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
}
?>: