<?php

$num1 = $_GET['number1'];
$num2 = $_GET['number2'];
$num3 = $_GET['number3'];

if (($num1>=$num2) && ($num2>=$num3)) {
echo "Os três números na ordem crescente é $num3, $num2 e $num1.";
}
elseif (($num1>=$num3) && ($num3>=$num2)) {
echo "Os três números na ordem crescente é $num2, $num3 e $num1.";
}
elseif (($num2>=$num1) && ($num1>=$num3)) {
echo "Os três números na ordem crescente é $num3, $num1 e $num2.";
}
elseif (($num2>=$num3) && ($num3>=$num1)) {
echo "Os três números na ordem crescente é $num1, $num3 e $num2.";
}
elseif (($num3>=$num1) && ($num1>=$num2)) {
echo "Os três números na ordem crescente é $num1, $num3 e $num2.";
}
elseif (($num2>=$num1) && ($num3>=$num2)) {
echo "Os três números na ordem crescente é $num1, $num2 e $num3.";
}
elseif (($num1>=$num2) && ($num3>=$num2)) {
echo "Os três números na ordem crescente é $num2, $num1 e $num3.";
}
?>