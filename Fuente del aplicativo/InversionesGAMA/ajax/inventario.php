<?php
    $accion = $_GET["accion"];
    switch ($accion) {
        case 'registrar':
            // Insertar los siguientes datos SQL en tabla Insumo
            /*$_GET["fecha"], $_GET["proveedor"], $_GET["tipo"], $_GET["nombreInsumo"], $_GET["cantidad"], $_GET["precio"]*/

            // El SP debe SOLA Y UNICAMENTE devolver codigo y mensaje
            $respuesta["codigo"] = 1;
            $respuesta["mensaje"] ='Insumo registrado correctamente';
            // Se suma a la respuesta el nombre del empleado que registro el insumo, obteniendolo de las variables de sesion -> $_SESSION["nombreEmpleado"]
            $respuesta["nombreEmpleado"] = "Juan José Pérez López";
            // RETORNAR RESPUESTA A JS
            echo json_encode($respuesta);
            break;

        case 'abrirModal':
            // Buscar información del elemento con el id = $_GET["id"]
            //$respuesta["mensaje"] = "Apertura ventana modal para editar insumo";
            
            $respuesta["cantidad"] = 1008;
            $respuesta["precio"] = 25.8;
            $respuesta["nombreInsumo"] ='Nombre insumo';
            echo json_encode($respuesta);
            break;
            
        case 'editar':
            // Editar el elemento con el id = $_GET["idInsumo"]
            // Insertar los siguientes datos SQL en la tabla Insumo: $_GET["cantidad"], $_GET["precio"], $_SESSION["idEmpleado"]
            
            //El SP debe SOLA Y UNICAMENTE devolver codigo y mensaje
            $respuesta["codigo"] = 1;
            $respuesta["mensaje"] ='Insumo editado correctamente';
            // Se suma a la respuesta el nombre del empleado que registro el insumo, obteniendolo de las variables de sesion -> $_SESSION["nombreEmpleado"]
            $respuesta["nombreEmpleado"] = "Lionel Andres Messi Cuccitini";
            echo json_encode($respuesta);
            break;
            
        case 'listaInsumos':
            # code...
            break;
    }
?>