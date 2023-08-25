<?php

//variables: $nombrevariable;
//para la conexion necesitamos 4 parametros:
//servidor,usuario,contrtaseña,nombre de la bd:
$sertvidor="localhost";
$user="root";
$password="";
$basedatos="crudphp";

$configuracion=new mysqli($sertvidor,$user,$password,$basedatos);
//ya la con nexcion esta lista

//comparar si existe algun error de conexion
if($configuracion->connect_errno)//connect_errno verifica un error de conectividad
{
    echo"nuestra conexion presenta fallas";
    exit();
}


?>