<?php
$servidor = "localhost";
$usuarioBD = "root";
$contraseña = "";
$baseDeDatos = "recetas";
$conexion = mysqli_connect($servidor, $usuarioBD, $contraseña, $baseDeDatos) or die ("La conexion al servidor no fue establecida");
$db = mysqli_select_db($conexion,$baseDeDatos) or die ("No se logro conectar a la base de datos");
?>