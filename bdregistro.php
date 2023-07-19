<?php
//variables de del formulario
error_reporting(E_ALL ^ E_DEPRECATED);
header('Content-Type: text/html; Charset=UTF-8');
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
$correo = isset($_POST['correo']) ? $_POST['correo'] : '';
$contraseña = isset($_POST['contraseña']) ? $_POST['contraseña'] : '';

// conexion a data 
$con = new sqliite3("../data/tuvsa.db") or die ("problemas para conectar")

//consultas a sql
$cs = $con -> query("insert into registro(nombre, correo, contraseña) values('$nombre','$correo','$contraseña')")
$con -> close();
echo '<scipt>alert '
?>