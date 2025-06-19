<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title text-center">Asignación de Operaciones
            </h2>
            <p class="card-description"></p>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Folio</th>
                            <th scope="col">Nombres de operarios</th>
                            <th scope="col">Operación asignada</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $OperarioController= new OperarioController();
                        $datos=$OperarioController->mostrarOperario();
                        foreach($datos as $OperarioController){
                            echo '<tr>
                            <td>'.$OperarioController['id'].'</td>
                            <td>'.$OperarioController['folio'].'</td>
                            <td>'.$OperarioController['nombre'].' '.$OperarioController['apellido_paterno'].' '.$OperarioController['apellido_materno'].'</td>
                            <td>'.$OperarioController['asignar_operacion'].'
                            
                            <form id="formQuitarOperacion" class="formQuitarOperacion" method="post">
                                <input type="hidden" name="id" value="' . $OperarioController['id'] . '">
                                <button type="submit" name="quitar" class="btn btn-success btnQuitarOperacion">Quitar</button>
                                </form>
                            </td>  
                            <td>
                            <form action="" method="post"> 
                            <label class="form-label">Asignar operación:</label>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <select class="form-control" id="id_operacion" name="id_operacion">
                                        <option value="">Seleccione...</option>
                                        ';
                                        $OperacionController = new OperacionController(); 
                                        $OperacionController->mostrarNombreOperacion();
                                        echo'
                                    </select>
                                </div>
                                
                            </div>
                            </td>
                            <td>
                            <input type="hidden" id="id_operario" name="id_operario" value="' . $OperarioController['id'] . '">
                            <button type="submit" id="btnActualizar" name="btnActualizar" class="btn btn-primary">Actualizar</button>';                            
                            $OperacionController = new OperacionController(); 
                            $OperacionController->actualizarAsignacionOperacion();
                            echo '</div>
                            </form>
                            </tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div> 
        </div>
    </div>
</div>
<?php
    //lleva a la funcion que se usa para el boton quitar
   $OperacionController = new OperacionController();
   $OperacionController-> obtenerIdOperario(); 
?>
<script>
    //actualizar cuando se quita el boton quitar
$(document).ready(function() {
    $(".btnQuitarOperacion").click(function() {
        var form = $(this).closest('form');
        var idOperario = form.find('input[name="id"]').val();

        $.ajax({
            type: "POST",
            url: "tu_pagina.php",  // Reemplaza con la ruta correcta a tu script PHP
            data: form.serialize(),
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    // Actualizar la página o realizar acciones necesarias
                    location.reload();
                } else {
                    // Manejar errores o mostrar un mensaje de error
                    console.error("Error: " + response.message);
                }
            },
            error: function(error) {
                // Manejar errores de la solicitud AJAX
                console.error("Error en la solicitud AJAX: ", error);
            }
        });
    });
});
</script>