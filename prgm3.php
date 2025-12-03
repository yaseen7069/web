<html>
<head>
   <h2>Sum of two numbers</h2>
</head>
<body>
<form method="POST">
 Num1:<input type="number" name="n1" required><br><br>
 Num2:<input type="number" name="n2" required><br><br>
<button type="submit">Add Numbers</button>
</form>

<?php
if(isset($_POST['n1']) && isset($_POST['n2']))
{
 $a=$_POST['n1'];
 $b=$_POST['n2'];
 $sum = $a + $b;
 echo "The sum is: $sum";
}

?>

</body>
</html>