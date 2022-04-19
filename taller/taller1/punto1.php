<?php


$NombreUsuario = $_POST['Nombre'];
$edadusuario = $_POST['Edad'];


if($edadusuario>=18)
{
    echo "el nombre Ingresado al formulario es:  ".$NombreUsuario.
"<br>"."<br>". "La edad ingresada es: ".$edadusuario."<br>"."<br>"
;
}