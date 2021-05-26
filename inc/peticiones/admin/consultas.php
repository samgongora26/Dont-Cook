<?php



function enviar(): array{

    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $des_corta = $_POST['desc_corta'];
    $des_larga = $_POST['desc_larga'];
    $estado = $_POST['estado'];
    $municipio = $_POST['municipio'];
    $localidad = $_POST['ciudad'];
    $cp = $_POST['cp'];

    try {
        require '../../../conexion.php';
        $stmt = $conn->prepare("INSERT INTO restaurantes (nombre, telefono, descripcion_corta, des_larga, codigo_postal, estado, municipio, localidad)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

        $stmt->bind_param('ssssssss', $nombre, $telefono, $des_corta, $des_larga, $cp, $estado, $municipio, $localidad);
        $stmt -> execute();

        $respuesta = array(
            'nombre' => $nombre,
            'telefono'=> $telefono,
            'corta' => $des_corta,
            'larga' => $des_larga,
            'estado' => $estado,
            'municipio' => $municipio,
            'CP' => $cp,
            'localidad' => $localidad 
        );

       $stmt->close();
        return $respuesta;

    } catch (\Throwable $th) {
        $respuesta = array(
            'respuesta' => $th
        );
        return $respuesta;
    }

    

}


?>