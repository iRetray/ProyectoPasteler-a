<?php
    include 'conexion.php';

    $correo = $_POST['correo'];
    $clave= $_POST['clave'];

    $correoEncontrado = false;
    $claveCorrecta = false;
    
    $consulta = "SELECT * FROM `usuario` WHERE 1";
    $resultado = mysqli_query($conexion, $consulta);
    while ($columna = mysqli_fetch_array( $resultado ))
    {
        if ($columna['correo']==$correo) {
            $correoEncontrado = true;
            if ($columna['clave']==$clave) {
                $claveCorrecta = true;
                session_start();
                $_SESSION['correo'] = $correo;
                $_SESSION['clave'] = $clave;
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
        header("Location:home.php");
    }
?>