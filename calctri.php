<?php

$num1 = $_GET['number1'];
$num2 = $_GET['number2'];
$num3 = $_GET['number3'];

if (($num1>$num2) && ($num2>$num3)) 
{
    echo "<img src='escaleno.jpg'/>";
}
elseif (($num1<$num2) && ($num2>$num3)) 
{
echo "<img src='escaleno.jpg'/>";
}
elseif (($num1=$num2) && ($num2=$num3)) 
{
    echo "<img src='equilatero.png'/>";
}
elseif (($num1=$num2) && ($num2<=$num3)) 
{
    echo "<img src='isoceles.png'/>";
}
elseif (($num1<=$num2) && ($num2=$num3)) 
{
    echo "<img src='isoceles.png'/>";
}
elseif (($num1>$num2) && ($num2<$num3)) 
{
    echo "<img src='escaleno.jpg'/>";
}
"<img src='escaleno.jpg'/>";
?>


