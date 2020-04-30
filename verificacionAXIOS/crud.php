<?php
    include_once 'conexion.php';

    $objeto = new Conexion();
    $conexion = $objeto->Conectar();

    //PARA RECIBIR LOS PARAMETROS DE AXIOS
    $_POST = json_decode(file_get_contents("php://input"),true);

    $data = [];
    $consulta = "SELECT correo FROM usuario";
    $resultado = $conexion->prepare($consulta);
    $resultado->execute();
    $data = $resultado->fetchAll(PDO::FETCH_ASSOC);

    print  json_encode($data,JSON_UNESCAPED_UNICODE);
    $conexion = null;
?>