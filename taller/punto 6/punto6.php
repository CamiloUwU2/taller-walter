<?php


$num1 = $_POST['Numero1'];
$num2 = $_POST['Numero2'];

if($num1> 0 or $num2>0)
{
    echo "son numero positivos".$num1 . "<br>". $num2;
}
else
{
   echo "son numeros negativos".$num1 .$num2;
}

