<?php
    $accion = $_GET["accion"];
    switch ($accion) {
        case 'registrar':
            $respuesta["codigo"] = 1;
            $respuesta["mensaje"] ='Jornada registrada correctamente';
            echo json_encode($respuesta);
            break;

        case 'abrirModal':
            // Buscar información del elemento con el id = $_GET["id"]
            $respuesta["mensaje"] = "Apertura ventana modal para editar insumo";
            
            $respuesta["cantidad"] = 1008;
            $respuesta["precio"] = 25.8;
            $respuesta["nombre"] ='Nombre insumo';
            echo json_encode($respuesta);
            break;
            
        case 'editar':
            // Editar el elemento con el id = $_GET["id"]
            $respuesta["mensaje"] = "Se ha completado la edición de un insumo";
            
            $respuesta["cantidad"] = $_GET["cantidad"];
            $respuesta["precio"] = $_GET["precio"];
            echo json_encode($respuesta);
            break;
            
        case 'listaJornadas':
            # code...
            break;
    }
?>