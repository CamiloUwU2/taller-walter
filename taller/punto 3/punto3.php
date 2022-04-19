<?php


$NombreUsuario = $_POST['Nombre'];
$edadusuario = $_POST['Edad'];
$sexousuario = $_POST['sexo'];


if($sexousuario=="Numero1")
{
    if($edadusuario>=18)
    {
        echo "el nombre Ingresado al formulario es:  ".$NombreUsuario.
        "<br>"."<br>". "La edad ingresada es: ".$edadusuario."<br>"."<br>".$sexousuario."<br>"."Es masculino puede entrar";
    }
 
}
