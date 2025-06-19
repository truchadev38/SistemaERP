<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title text-center">Salarios</h2>
            <p class="card-description"></p>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Salario por día</th>
                            <th scope="col">Salario por día con incentivos</th>
                            <th scope="col">Salario final</th>
                            <!-- <th scope="col">Fecha</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $SalarioController= new SalarioController();
                        $datos=$SalarioController->mostrarSalario();
                        foreach($datos as $SalarioController){
                            echo '<tr>
                            <td>'.$SalarioController['id'].'</td>
                            <td>'.$SalarioController['nombre_persona'].'</td> 
                            <td>'.$SalarioController['por_dia'].'</td>
                            <td>'.$SalarioController['con_incentivos'].'</td>
                            <td>'.$SalarioController['final'].'</td>
                            </tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

