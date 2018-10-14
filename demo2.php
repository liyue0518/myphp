<!DOCTYPE html>
<html>
<body>

<?php
echo "hello world<br>";
echo "hello world<br>";
echo "hello world<br>";
?>

<?php
$color = "red";
echo"My car is" . $color ;
?>

<?php
$cars=array("Volve","BMW","SAAB");
sort($cars);
var_dump($cars);
?>

<?php
$number = array(3,5,1,22,11);
rsort($number);
var_dump($number);
?>

</body>
</html>