<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre de operario</th>
                <th scope="col">Apellido Paterno</th>
                <th scope="col">Apellido Materno</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $UsuarioController = new UsuarioController();
            $datos = $UsuarioController->mostrarUsuarioNombre();
            foreach ($datos as $UsuarioController) {
                echo '<tr>
                            <td>' . $UsuarioController['id_usuario'] . '</td>
                            <td>' . $UsuarioController['nombre'] . '</td>
                            <td>' . $UsuarioController['apellido_paterno'] . '</td>
                            <td>' . $UsuarioController['apellido_materno'] . '</td> 
                            <td>
                            <a href=#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalEditar">Editar</a>
                            </td>
                            </tr>';
            }
            ?>
        </tbody>
    </table>
</div>