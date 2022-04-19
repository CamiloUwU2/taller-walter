<?php


$NombreUsuario = $_POST['Nombre'];
$edadusuario = $_POST['Edad'];


if($edadusuario>=18)
{
    echo "el nombre Ingresado al formulario es:  ".$NombreUsuario.
"<br>"."<br>". "La edad ingresada es: ".$edadusuario."<br>"."<br>"."Puede ingresar a esta APP"
;
}
else{
    echo "el nombre Ingresado al formulario es:  ".$NombreUsuario.
    "<br>"."<br>". "La edad ingresada es: ".$edadusuario."<br>"."<br>"."Es menor de edad no puede ingresar esta edad";
}