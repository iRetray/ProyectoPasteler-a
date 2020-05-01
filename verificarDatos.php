<?php
    include_once 'conexion.php';
    $objeto = new Conexion();
    $conexion = $objeto->Conectar();
    $consulta = "SELECT * FROM usuario";
    $resultado = $conexion->prepare($consulta);
    $resultado->execute();

    $correo = $_POST['correo'];
    $clave= $_POST['clave'];

    $correoEncontrado = false;
    $claveCorrecta = false;
    while ($columna = mysqli_fetch_array( $resultado ))
    {
        if ($columna['correo']==$correo) {
            if ($columna['clave']==$clave) {
                $correoEncontrado = true;
                $claveCorrecta = true;
                }
            }
    }

    if (!$correoEncontrado) {
        header("Location:errorCorreoNoRegistrado.php");
    }
    if ($correoEncontrado && !$claveCorrecta) {
        header("Location:claveIncorrecta.php");
    }
    if ($correoEncontrado && $claveCorrecta) {
        session_start();
        $_SESSION['correo'] = $correo;
        $_SESSION['clave'] = $clave;
        header("Location:home.php");
    }
?>