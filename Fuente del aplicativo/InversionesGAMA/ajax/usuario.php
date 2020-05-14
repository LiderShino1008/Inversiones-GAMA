<?php
    $accion = $_GET["accion"];
    switch ($accion) {
        case 'registrar':
            // Insertar los siguientes valores en la tabla SQL Persona
            //$_GET["id"], $_GET["pnombre"], $_GET["snombre"], $_GET["papellido"], $_GET["sapellido"], $_GET["telefono"], $_GET["direccion"], $_GET["genero"]
            
            // Insertar los siguientes valores en la tabla SQL Usuario
            //$_GET["username"], $_GET["password1"], $_GET["contrato"], $_GET["estado"], $_GET["id"], $_GET["tipo"], $_GET["area"]
            
            // El SP debe SOLA Y UNICAMENTE devolver codigo y mensaje
            $respuesta["codigo"] = 1;
            $respuesta["mensaje"] ='Usuario registrado correctamente';
            // RETORNAR RESPUESTA A JS
            echo json_encode($respuesta);
            break;

        case 'abrirModal':
            // Seleccionar información del elemento con el id = $_GET["idUsuario"]
            // Traer los siguientes valores de la tabla SQL Persona: pnombre, snombre, papellido, sapellido, telefono, direccion
            // Traer los siguientes valores de la tabla SQL Usuario: username, contrato, estado
            // Traer los siguientes valores de la tabla SQL TipoUsuario: tipoUsuario
            // Traer los siguientes valores de la tabla SQL AreaTrabajo: areaTrabajo
            
            // Guardar los resultados en la variable $respuesta ... EL CODIGO ABAJO ES UN EJEMPLO PERO NO ES ASI, SOLO BASTA CON GUARDAR DIRECTAMENTE LA CONSULTA EN LA VARIABLE NO UNO POR UNO LOS DATOS
            $respuesta["pnombre"] = "Juan";
            $respuesta["snombre"] = "Alberto";
            $respuesta["papellido"] = "Pérez";
            $respuesta["sapellido"] = "Lagos";
            $respuesta["tipo"] = "Empleado";
            $respuesta["telefono"] = "33008800";
            $respuesta["contrato"] = "123456";
            $respuesta["area"] = "Inventario";
            $respuesta["username"] = "JuanAPL";
            $respuesta["direccion"] = "Barrio La Playa, La Ceiba";
            $respuesta["estado"] = 0;
            // RETORNAR RESPUESTA A JS
            echo json_encode($respuesta);
            break;
            
        case 'editar':
            // Editar el elemento con el id = $_GET["idUsuario"]
            // Update los valores con los siguientes datos en las respectivas tablas: $_GET["tipo"], $_GET["telefono"], $_GET["contrato"], $_GET["area"], $_GET["username"}, $_GET["password"], $_GET["direccion"], $_GET["estado"];

            // Simulacion coincidencia de contraseña anterior del usuario
            $old = "contraseNIA#2020";
            if ($old == $_GET["oldPassword"]) {
                // El SP debe SOLA Y UNICAMENTE devolver codigo y mensaje
                $respuesta["codigo"] = 1;
                $respuesta["mensaje"] ='Usuario registrado correctamente';
                // RETORNAR RESPUESTA A JS
                echo json_encode($respuesta);
                break;
            }
            $respuesta["mensaje"] = "La contraseña anterior del usuario no es válida";
            $respuesta["codigo"] = 0;
            // RETORNAR LA RESPUESTA A JS
            echo json_encode($respuesta);
            break;
            
        case 'listaUsuarios':
            # code...
            break;
    }
?>