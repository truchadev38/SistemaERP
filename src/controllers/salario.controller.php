<?php

class SalarioController
{

    function agregarSalario()
    {
        if (isset($_POST['btnAgregarSalario'])) {
            $usuarioId = isset($_POST['usuario_id']) ? $_POST['usuario_id'] : null; // Asegúrate de manejar el caso en que no se haya seleccionado ninguna categoría
            $salario = $_POST['salarioPorDia'];
            //echo "Datos ingresados:<br>";
            echo "id operacion: " . $usuarioId . "<br>";
            echo "id operario: " . $salario . "<br>";
            //$salarioModel = new SalarioModel();
            //$datos = $salarioModel->createSalario($usuarioId,$salario);

                    // Verificar si el usuario tiene algún dato en la tabla de salario
        $salarioModel = new SalarioModel();
        $datosExisten = $salarioModel->verificarExistenciaSalario($usuarioId);

        if ($datosExisten) {
            // Si hay datos, actualiza el salario
            $datos = $salarioModel->updateSalario($usuarioId, $salario);
            echo "Salario actualizado:<br>";
        } else {
            // Si no hay datos, crea un nuevo salario
            $datos = $salarioModel->createSalario($usuarioId, $salario);
            echo "Nuevo salario creado:<br>";
        }

        // Puedes realizar otras operaciones necesarias aquí
        echo "id operacion: " . $usuarioId . "<br>";
        echo "Salario: " . $salario . "<br>";
            // Aquí puedes realizar las operaciones necesarias para almacenar los datos en tu base de datos
        }
    }








    function mostrarSalario()
    {
        $salarioModel = new SalarioModel();
        $respuesta = $salarioModel->readSalario();

        if ($respuesta !== 'error') {
            return $respuesta;
        } else {
            return [];
        }
    }

    function mostrarSalarioPersonas()
    {
        $salarioModel = new SalarioModel();
        $respuesta = $salarioModel->salarioPersonas();

        if ($respuesta !== 'error') {
            return $respuesta;
        } else {
            return [];
        }
    }

    function mostrarSalarioActualUsuario()
    {
        $salarioModel = new SalarioModel();
        $respuesta = $salarioModel->readSalarioActualporUsuario();


        if ($respuesta !== 'error') {
            foreach ($respuesta as &$resultado) {
                if (empty($resultado['por_dia'])) {
                    $resultado['por_dia'] = 'Sin salario';
                }
            }
            return $respuesta;
        } else {
            return [];
        }
    }

    function modificarSalario()
    {
    }
    function eliminarSalario()
    {
    }
}
?>