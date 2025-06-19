<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Transición de Bienvenida</title>
<style>
    @keyframes animacionBienvenida {
        0% {
            opacity: 0;
            transform: translateY(-50px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .bienvenidos {
        font-size: 36px;
        font-weight: bold;
        color: #333;
        text-align: center;
        opacity: 0;
        animation: animacionBienvenida 1s ease forwards;
    }

    .sol {
        display: inline-block;
        width: 40px;
        height: 40px;
        background-color: orange;
        border-radius: 50%;
        margin-right: 10px;
    }

    .fecha {
        font-size: 24px;
        color: #333;
    }
</style>
</head>
<body>

<div>
    <div class="sol"></div>
    <div class="bienvenidos">Bienvenido <?php echo isset($_SESSION['rol']) ? $_SESSION['rol'] : ''; ?></div>
    <div class="fecha" id="fecha"></div>
</div>


<script>
    function actualizarFecha() {
        const fechaActual = new Date();
        const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        const fechaFormateada = fechaActual.toLocaleDateString('es-ES', options);
        document.getElementById('fecha').textContent = fechaFormateada;
    }

    setInterval(actualizarFecha, 1000); 
    actualizarFecha(); 

    function actualizarHora() {
        const horaActual = new Date().toLocaleTimeString();
        document.getElementById('hora-actual').textContent = horaActual;
    }

    setInterval(actualizarHora, 1000); // Actualizar cada segundo
    actualizarHora(); // Actualizar inmediatamente al cargar la página
</script>

<div class="content-wrapper">
    
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="row">
                    <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                    <div class="card card-tale" style="display: flex; justify-content: center; align-items: center; height: 100%;">
                     <div class="card-body text-center">
                    <p class="mb-4" style="font-size: 15px;">Número de cortes actuales</p>
                    <p class="mb-4" style="font-size: 30px; font-weight: bold;"><?php $CorteController = new CorteController(); echo $CorteController->contadorDeCortes(); ?></p>
                </div>
            </div>

                    </div>
                    <div class="col-md-6 stretch-card transparent d-flex justify-content-center align-items-center">
                        <div class="card card-light-danger">
                        <div class="card-body text-center">
                                <p class="mb-4">Hora actual</p>
                                <p class="fs-30 mb-2" id="hora-actual">00:00:00</p>
                                <p>Formato de 24 hrs.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                <div class="card-body">
                    <br>
                <h4 class="card-title" style="color: darkblue; font-size: 32px; text-align: center;">Salarios </h4>
                  <p class="card-description" style="font-size: 16px; text-align: center;">
                    TOP 3 (TODAS LAS PERSONAS)
                  </p>
                  <div class="table-responsive">
                    <table class="table table-hover">
                    <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Rol</th>
                    <th>Salario</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($salarios as $salario): ?>
                    <tr>
                        <td><?php echo $salario['nombre']; ?></td>
                        <td><?php echo $salario['rol_nombre_activo']; ?></td>
                        <td><?php echo $salario['salario']; ?></td>
                        <td><label class="badge badge-info">Fixed</label></td> <!-- Aquí se puede cambiar según el estado real -->
                    </tr>
                <?php endforeach; ?>
            </tbody>
                    </table>
                  </div>
                </div>
              </div>
                <div class="card-body">
                    <h2 class="card-title text-center">Operarios Activos: </h2>
                    <div class="card card-tale">
                        <div class="card-body">
                            <?php
                                $OperarioController = new OperarioController();
                                $datos = $OperarioController->mostrarOperario();
                                foreach ($datos as $operario) {
                                    echo '<p style="text-align: center; font-size: 30px; color: white; display: flex; align-items: center;"><span style="width: 10px; height: 10px; border-radius: 50%; background-color: lightgreen; margin-right: 10px;"></span>'
                                    . $operario['nombre'] . '</p>';
                                }
                            ?>
                        </div>
                    </div>
                    <p class="card-description"></p>
                    <div class="table-responsive">
                       
                    </div>
                    
                    <br>
                    <div class="row">
    <div class="col-md-6">
    <h2 class="card-title text-center"; font-size: 24px;">Operaciones en función :</h2>
        <div class="card card-tale">
            <div class="card-body">
                <?php
                    $OperacionController = new OperacionController();
                    $operacionesAsignadas = $OperacionController->mostrarOperacionesAsignadas();
                    if (!empty($operacionesAsignadas)) {
                        foreach ($operacionesAsignadas as $operacion) {
                            echo '<p style="text-align: center; font-size: 30px; color: white; display: flex; align-items: center;"><span style="width: 10px; height: 10px; border-radius: 50%; background-color: lightgreen; margin-right: 10px;"></span>'
                            . $operacion . '</p>';
                        }
                    } else {
                        echo 'No hay operaciones asignadas a los operarios.';
                    }
                ?>
            </div>
        </div>
    </div>
    <div class="col-md-6">
    <h2 class="card-title text-center" style="color: orange; font-size: 24px;">Operaciones disponibles :</h2>


        <div class="card card-dark-blue">
            <div class="card-body">
                <?php
                    $OperacionController = new OperacionController();
                    $operacionesDisponibles = $OperacionController->mostrarOperacionesDisponibles();
                    if (!empty($operacionesDisponibles)) {
                        foreach ($operacionesDisponibles as $operacion) {
                            echo '<p style="font-size: 24px; display: flex; align-items: center;"><span style="width: 10px; height: 10px; border-radius: 50%; background-color: yellow; margin-right: 10px;"></span>' . $operacion['nombre_operacion'] . '</p>';
                        }
                    } else {
                        echo "<p style='font-size: 24px;'>No hay operaciones disponibles.</p>";
                    }
                ?>
                 
            </div>
        </div>
    </div>
</div>

                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
