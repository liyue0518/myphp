<?php
$x = 5;
$y = 6;
$z = $x + $y;
echo $z;
?>

<?php
$x=5;
function myTest(){
    $y=10;
    global $x;
    echo "<p>测试函数内部变量:</p>";
    echo"变量x是:$x";
    echo"<br>";
    echo"变量y是:$y";
}
myTest();