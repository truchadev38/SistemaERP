<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Operaciones por Operario</title>
    <!-- Aquí puedes agregar tus enlaces a CSS, JavaScript, etc. -->
</head>
<body>

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <?php
                //$produccionController= new ProduccionRealController();
                //$produccionController->obtenerDatosOperario();
            ?>
            <h2 class="card-title text-center">PRODUCCIÓN</h2>
            <p class="card-description"></p>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Nombre de la operación</th>
                            <th scope="col">Código de operación</th>
                            <th scope="col">Producción real</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $OperacionController= new OperacionController();
                        $datos=$OperacionController->mostrarOperacionDeOperario();
                        foreach ($datos as $OperacionController) {
                            echo '<tr>
                                <td>' . $OperacionController['nombre'] . '</td>
                                <td>' . $OperacionController['codigo'] . '</td>
                                <td>-</td>
                                <td>
                                    <!--<form action="/ruta-para-agregar-produccion-real" method="post">
                                        <input type="hidden" name="id" value="' . $OperacionController['id'] . '">
                                        <button type="submit" class="btn btn-primary">Agregar Producción Real</button>
                                    </form>-->
                                    <form method="post" action="/alert-systemV2/produccion">
                                        <label for="produccion_por_hora">Nueva producción por hora:</label>
                                        <input type="number" name="produccion_por_hora" required>
                                        <button type="submit" name="btnActualizar" id="btnActualizar" class="btn btn-primary">Agregar Producción Real</button>
                                       
                                    </form>
                                </td>
                            </tr>';
                        }
                        ?>
                    </tbody>
                </table>
                <?php
                    $produccionController= new ProduccionRealController();
                    $produccionController->agregarProduccionReal();
                    
                ?>
                <button type="button">Haz clic</button>
            </div>
        </div>
    </div>
</div>

</body>
</html>