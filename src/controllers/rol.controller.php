<?php

class RolController
{
    //Funciones para manipular los datos de rol
    function agregarRol()
    {
    }
    function mostrarRol()
    {
        $rolModel = new RolModel();
        $result = $rolModel->readRol();

        if (!empty($result)) {
            foreach ($result as $row) {
                echo "<option value='" . $row['id'] . "'>" . $row['nombre'] . "</option>";
            }
        } else {
            echo "<option value=''>No existe un rol disponible.</option>";
        }
        // Devuelve los datos
        return $result;
    }
    function modificarRol()
    {
    }
    function eliminarRol()
    {
    }
}
?>