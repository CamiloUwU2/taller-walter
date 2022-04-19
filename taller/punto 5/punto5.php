<?php


$raizcuadrada = $_POST['Numero'];

if($raizcuadrada< 0)
{
    echo "Es una Raiz imaginaria: ". sqrt($raizcuadrada);
}
else
{
    echo sqrt($raizcuadrada);
}

    

