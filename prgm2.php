<?php
$IndianPlayers = array("MS Dhoni", "Yuvaraj Singh", "Virat Kohli", "Ravindra Jadeja", "Rishab Pant");

echo "<table border='1'>
<tr>
    <th>SL NO</th>
    <th>Players Name</th>
</tr>";

$s1 = 1;
foreach ($IndianPlayers as $player) {
    echo "<tr>
        <td>$s1</td>
        <td>$player</td>
    </tr>";
    $s1++;
}

echo "</table>";
?>
