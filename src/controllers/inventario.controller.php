<?php
class InventarioController
{
    //Funciones para manipular los datos de CATEGORIA MAQUINARIA
    
    function agregarCategoriaMaquinaria() {
        if(isset($_POST['btnGuardar'])){
            $nombre = $_POST['nombre'];
            $ubicacion = $_POST['ubicacion'];

            echo "Se han agreado los siguientes datos correctamente: " . $nombre . $ubicacion ;
            $inventarioModel = new inventarioModel();
            $datos = $inventarioModel->createCategoriaMaquinaria($nombre, $ubicacion);
        }
    }
    function mostrarCategoriaMaquinaria() {
        $inventarioModel = new inventarioModel();
        $result = $inventarioModel->readCategoriaMaquinaria();
    
        if (!empty($result)) {
            foreach ($result as $row) {
                echo "<option value='" . $row['id'] . "'>" . $row['nombre'] . "</option>";
            }
        } else {
            echo "<option value=''>No hay categorías disponibles</option>";
        }
    }
    function modificarCategoriaMaquinaria() {}
    function eliminarCategoriaMaquinaria() {}

    //Funcion para manipular los datos de CATEGORIA MATERIA PRIMA
    
    function agregarCategoriaMateprim() {
        if(isset($_POST['btnGuardar'])){
            $nombre = $_POST['nombre'];
            $ubicacion = $_POST['ubicacion'];

            echo "Se han agreado los siguientes datos correctamente: " . $nombre . $ubicacion ;
            $inventarioModel = new inventarioModel();
            $datos = $inventarioModel->createCategoriaMateprim($nombre, $ubicacion);
        }
    }
    function mostrarCategoriaMateprim() {
        $inventarioModel = new inventarioModel();
        $result = $inventarioModel->readCategoriaMateprim();
    
        if (!empty($result)) {
            foreach ($result as $row) {
                echo "<option value='" . $row['id'] . "'>" . $row['nombre'] . "</option>";
            }
        } else {
            echo "<option value=''>No hay categorías disponibles</option>";
        }
    }
    function modificarCategoriaMateprim() {}
    function eliminarCategoriaMateprim() {}

    //Funcion para manipular los datos de MAQUINARIA
    
    function agregarMaquinaria() {
        if(isset($_POST['btnGuardarMaq'])){
            $folio = $_POST['folio'];
            $modelo = $_POST['modelo'];
            $status = isset($_POST['status']) ? $_POST['status'] : 0; // Verifica si se marcó el checkbox
            $categoria_id = isset($_POST['categoria_id']) ? $_POST['categoria_id'] : null; // Asegúrate de manejar el caso en que no se haya seleccionado ninguna categoría

            echo "Datos ingresados:<br>";
            echo "Folio: " . $folio . "<br>";
            echo "Modelo: " . $modelo . "<br>";
            echo "Status: " . ($status ? 1 : 0) . "<br>";
            echo "Categoría ID: " . $categoria_id . "<br>";
            $inventarioModel = new inventarioModel();
            $datos = $inventarioModel->createMaquinaria($folio, $modelo, $status, $categoria_id);

            // Aquí puedes realizar las operaciones necesarias para almacenar los datos en tu base de datos
        }
    }
    function mostrarMaquinaria() {
        $inventarioModel = new InventarioModel();
        $inventarioModel->readMaquinaria();
        $respuesta = $inventarioModel->readMaquinaria();

        if ($respuesta !== 'error') {
            return $respuesta;
        } else {
            return [];
        }
    }
    function modificarMaquinaria() {}
    function eliminarMaquinaria() {}
    
    //Funcion para manipular los datos de MATERIA PRIMA
    
    function agregarMateriaPrima() {
        if(isset($_POST['btnGuardar'])){
            $folio = $_POST['folio'];
            $nombre = $_POST['nombre'];
            $cantidad = $_POST['cantidad'];
            $unidad = $_POST['unidad'];
            $categoria_id = $_POST['categoria_id'];
            $caducidad = $_POST['caducidad'];
            $tiempo_entrega =$_POST ['tiempo_entrega'];



            echo "Datos ingresados:<br>";
            echo "Folio: " . $folio . "<br>";
            echo "nombre: " . $nombre . "<br>";
            echo "cantidad: " . $cantidad. "<br>";
            echo "unidad" . $unidad. "<br>";
            echo "categoria_id" . $categoria_id. "<br>";
            $caducidad = date('Y-m-d', strtotime($caducidad));
            $tiempo_entrega = date('Y-m-d', strtotime($tiempo_entrega));
            echo "caducidad " . $caducidad. "<br>";
            echo "tiempo_entrega " . $tiempo_entrega. "<br>";
            $inventarioModel = new inventarioModel();
            $datos = $inventarioModel->createMateriaPrima($folio,$nombre,$cantidad,$unidad,$categoria_id,$caducidad,$tiempo_entrega);

            // Aquí puedes realizar las operaciones necesarias para almacenar los datos en tu base de datos
        }
    }
    public function mostrarMateriaPrima() {
        $inventarioModel = new InventarioModel();
        $inventarioModel->readMateriaPrima();
        $respuesta = $inventarioModel->readMateriaPrima();

        if ($respuesta !== 'error') {
            return $respuesta;
        } else {
            return [];
        }
    }
    
    
   
    function modificarMateriaPrima() {}
    function eliminarMateriaPrima() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['eliminarmateprim']) && isset($_POST['id_a_eliminar'])) {
                $idAEliminar = $_POST['id_a_eliminar'];
                
                $inventarioModel = new InventarioModel();
                $eliminado = $inventarioModel->deleteMateriaPrima($idAEliminar);

                if ($eliminado) {
                    // Si se elimina correctamente, puedes redirigir o refrescar la página
                    header("Location: nombre_de_tu_pagina.php");
                    exit();
                } else {
                    echo "Error al eliminar el registro.";
                }
            } else {
                echo "Datos de eliminación no recibidos correctamente.";
            }
        }
    }
}
?>