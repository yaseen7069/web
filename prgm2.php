<?php
$students=array("Prithik","Shanu","Safwan","Albin","Yaseen");
echo "<h2>Array Before Sorting:</h2>";
print_r($students);
echo"<br><br>";
asort($students);
echo"<h2>Array After Ascending Sorting (asort):</h2>";
print_r($students);
echo"<br><br>";
arsort($students);
echo"<h2>Array After Descending Sorting(asort):</h2>";
print_r($students);
?>
