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
</script>

<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">

<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="row">
                    <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                    <div class="card card-light-blue" style="display: flex; justify-content: center; align-items: center; height: 100%;">
                     <div class="card-body text-center">
                    <p class="mb-4" style="font-size: 15px;">Eficiencia al momento </p>
                    
                </div>
            </div>

                    </div>
                    <div class="col-md-6 stretch-card transparent d-flex justify-content-center align-items-center">
                        <div class="card card-light-danger">
                        <div class="card-body text-center">
                                <p class="mb-4">Salario al momento</p>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <h2 class="card-title text-center">Operarios Activos</h2>
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
                    <h2 class="card-title text-center">Operaciones disponibles :</h2>
                    <div class="card card-tale">
                        <div class="card-body">
                            <div>
                            <?php
                                $OperacionController = new OperacionController();
                                $operacionesDisponibles = $OperacionController->mostrarOperacionesDisponibles();
                                if (!empty($operacionesDisponibles)) {
                                    foreach ($operacionesDisponibles as $operacion) {
                                    echo '<p style="font-size: 24px; display: flex; align-items: center;"><span style="width: 10px; height: 10px; border-radius: 50%; background-color: lightgreen; margin-right: 10px;"></span>' . $operacion['nombre_operacion'] . '</p>';
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

</body>
</html>
