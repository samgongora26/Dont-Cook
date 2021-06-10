<?php

function obtener_restaurantes(): array
{
    $ciudad = $_POST['ciudad'];
    if (isset($ciudad)) {
        $sql = "SELECT nombre,descripcion_corta,horario,ciudad FROM restaurantes WHERE ciudad = '$ciudad'";
    }else {
        $sql = "SELECT nombre,descripcion_corta,horario,ciudad FROM restaurantes";
    }
    try {
        require '../../../conexion.php';
        $stmt = $conn->prepare($sql);
        //$stmt->bind_param('s', $usuario);
        $stmt->execute();

        // Loguear el usuario
        $stmt->bind_result($nombre, $descripcion, $horario, $lugar);

        $respuesta = [];
        $i = 0;

        while ($stmt->fetch()) {
            $respuesta[$i]['nombre'] = $nombre;
            $respuesta[$i]['lugar'] = $lugar;
            $respuesta[$i]['horario'] = $horario;
            $respuesta[$i]['descripcion'] = $descripcion;
            $i++;
        }
        $stmt->close();
    } catch (\Throwable $th) {
    }
    return $respuesta;
}
