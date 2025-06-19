<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre Completo</th>
                <th scope="col">Rol que Desempeña</th>
                <th scope="col">Apellido Materno</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $PersonaController = new PersonaController();
            $datos = $PersonaController->mostrarPersona();
            foreach ($datos as $PersonaController) {
                echo '<tr>
                            <td>' . $PersonaController['id_usuario'] . '</td>
                            <td>' . $PersonaController['nombre'] . ' ' . $PersonaController['apellido_paterno'] . ' ' . $PersonaController['apellido_materno'] . '</td> 
                            <td>
                            <a href=#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalEditar">Editar</a>
                            </td>
                            </tr>';
            }
            ?>
        </tbody>
    </table>
</div>