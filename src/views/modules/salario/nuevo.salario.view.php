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
                            <th scope="col">Nombre Completo</th>
                            <th scope="col">Rol que Desempeña</th>
                            <th scope="col">Salario Actual</th>
                            <th scope="col">Salario Nuevo</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $salarioController = new SalarioController();
                        $datosSalarios = $salarioController->mostrarSalarioActualUsuario();
                        foreach ($datosSalarios as $salario) {
                            echo '<tr>
                            <td>' . $salario['id'] . '</td>
                            <td>' . $salario['nombre'] . ' ' . $salario['apellido_paterno'] . ' ' . $salario['apellido_materno'] . '</td>
                            <td>' . $salario['rol_nombre_activo'] . '</td>
                            <td>' . $salario['por_dia'] . '</td>
                            <form action="" method="post"> 
                                <td>
                                    <input type="text" class="form-control" id="salarioPorDia" name="salarioPorDia" />
                                </td>  
                                
                                <td>
                                    <input type="hidden" id="usuario_id" name="usuario_id" value="' . $salario['id'] . '">
                                    <button type="submit" id="btnAgregarSalario" name="btnAgregarSalario" class="btn btn-success">Agregar Salario</button>
                                </td>';
                            /*$salarioController = new SalarioController();
                            $salarioController->agregarSalario();*/
                            echo '
                            </form>
                        </tr>';
                        }
                        ?>
                    </tbody>
                </table>
                <?php
                $salarioController = new SalarioController();
                $salarioController->agregarSalario();
                ?>
            </div>
        </div>
    </div>
</div>