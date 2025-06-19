<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eficiencia</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!---SCRIPT PARA GRAFICA--->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Tiempo estandar',     11],
          ['piezas producidas',      2],
          ['porcemtaje incremento',  2],
          ['produccion real', 2],
          ['produccion planeada',    7]
        ]);

        var options = {
          title: 'Eficiencia de produccion'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
    <!--FIN SCCRIPT PARA GRAFICA-->
</head>

<body>
<script>
        // Función para reproducir el audio al cargar la página
        window.onload = function() {
            var audio = new Audio("alerta.mp3");
            audio.play();
        };

    </script>
    

<div class="container">
    
    <h1 class="text-center">Eficiencia de operaciones</h1>

    <!-- Primera tarjeta -->
    <div class="row">
        <div class="produccioneficiencia" style="margin-top:5%; float: right; background: lightgrey;
                 box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 50px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 26px -18px inset; width:300px; border-radius:10px; text-align: center; width:auto;height:15rem;">
            <p style="font-size:2rem; margin-top:5%"><b>Producción</b></p>
            <table class="table">
                <thead>
                    <tr>
                        <th>Piezas producidas</th>
                        <th>Producción planeada</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $operarioController = new OperarioController();
                    $datos = $operarioController->mostrarOperacionesEficiencia();

                    if (!empty($datos)) {
                        $dato = $datos[0];
                        $porcentaje = ($dato['piezasprod'] / $dato['produccion_planeada']) * 100;


                       // Imprimir el valor del porcentaje
                            echo '<script>';
                            echo 'var porcentaje = ' . $porcentaje . ';';
                            echo '</script>';

                            // Aquí agregamos el script para reproducir el sonido
                            echo '<script>';
                            echo 'window.onload = function() {';
                            echo '    var audio = new Audio();';
                            echo '    if (porcentaje < 70) {';
                            echo '        audio.src = "alerta.mp3";';
                            echo '    } else {';
                            echo '        audio.src = "good.mp3";';
                            echo '    }';
                            echo '    if (audio.src !== "") {';
                            echo '        audio.play();';
                            echo '    }';
                            echo '};';
                            echo '</script>';


                        echo '<tr>
                                <td>' . $dato['piezasprod'] . '</td>
                                <td>' . $dato['produccion_planeada'] . '</td>
                            </tr>
                            <tr>
                                <td colspan="2" style="font-size:30px;color: ' . ($porcentaje < 70 ? 'red' : 'green') . ';">' . number_format($porcentaje, 2) . '%';

                        if ($porcentaje < 70) {
                            echo ' <i class="fa-solid fa-triangle-exclamation fa-beat" style="color: #e82626;"></i></i>';
                            echo '<p style="font-size:1.5rem;">Bajo nivel de producción</p>';
                            
                            
                        } else {
                            echo '<i class="fa-solid fa-circle-check fa-bounce" style="color: #558a15;"></i>';
                            echo '<p style="font-size:1.5rem;">¡Excelente trabajo! Vas muy bien</p>';
                           
                        }

                        echo '</td>
                            </tr>';
                    } else {
                        echo '<tr><td colspan="2">No hay datos disponibles</td></tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>


    <!-- Segunda tarjeta -->
    <div class="row">
        <div class="produccioneficiencia" style="margin-top:5%;border-radius:10px; text-align: center; width:40rem;height:30rem;margin-left:400px;margin-top:-240px;">
                     <div id="piechart" style="width: 700px; height: 500px;border-radius:20px;"></div>
        </div>
    </div>
</div>

<!--FIN DE SECCIOND DE GRAFICAS-->




<!---
</div>
    <script>
        // Crear una solicitud XMLHttpRequest
        var xhr = new XMLHttpRequest();

        // Abrir la solicitud
        xhr.open('GET', 'src/controllers/eficiencia.controller.php'); // Asegúrate de poner la ruta correcta

        // Establecer el tipo de respuesta
        xhr.responseType = 'json';

        // Enviar la solicitud
        xhr.send();

        // Función para manejar la respuesta
        xhr.onload = function() {
            try {
                // Verificar si la respuesta es válida y no es nula
                if (xhr.response !== null) {
                    // Verificar si la respuesta tiene la propiedad 'success'
                    if (xhr.response.hasOwnProperty('success')) {
                        if (xhr.response.success) {
                            // Verificar si la respuesta tiene la propiedad 'data'
                            if (xhr.response.hasOwnProperty('data')) {
                                var dataFromPHP = xhr.response.data;

                                // Validar data
                                if (!Array.isArray(dataFromPHP) && typeof dataFromPHP !== 'object') {
                                    // Mostrar mensaje de error
                                    console.log('La data no es un array o un objeto');
                                    return;
                                }

                                if (dataFromPHP.length === 0) {
                                    // Mostrar mensaje de error
                                    console.log('No hay data disponible');
                                    return;
                                }

                                // Extraer etiquetas y valores
                                let labels = dataFromPHP.map(row => row['etiqueta']);
                                let values = dataFromPHP.map(row => row['valor']);

                                // Crear gráfico
                                var ctx = document.getElementById('myChart').getContext('2d');
                                var myChart = new Chart(ctx, {
                                    type: 'bar',
                                    data: {
                                        labels: labels,
                                        datasets: [{
                                            label: 'Tiempo estándar',
                                            data: values,
                                            backgroundColor: [
                                                'rgba(255, 99, 132, 0.2)',
                                                'rgba(54, 162, 235, 0.2)',
                                                'rgba(255, 206, 86, 0.2)',
                                                'rgba(75, 192, 192, 0.2)',
                                                'rgba(153, 102, 255, 0.2)',
                                            ],
                                            borderColor: [
                                                'rgba(255, 99, 132, 1)',
                                                'rgba(54, 162, 235, 1)',
                                                'rgba(255, 206, 86, 1)',
                                                'rgba(75, 192, 192, 1)',
                                                'rgba(153, 102, 255, 1)',
                                            ],
                                            borderWidth: 1,
                                        }]
                                    },
                                    options: {
                                        title: {
                                            display: true,
                                            text: 'Eficiencia de operaciones'
                                        },
                                        scales: {
                                            yAxes: [{
                                                ticks: {
                                                    beginAtZero: true
                                                }
                                            }]
                                        }
                                    }
                                });
                            } else {
                                console.log('Error en la respuesta del servidor: La propiedad "data" no está presente');
                            }
                        } else {
                            console.log('Error en la respuesta del servidor: ' + xhr.response.error);
                        }
                    } else {
                        console.log('Error en la respuesta del servidor: La propiedad "success" no está presente');
                    }
                } else {
                    console.log('Error en la respuesta del servidor: La respuesta es nula');
                }
            } catch (error) {
                // Mostrar mensaje de error si hay algún problema durante el manejo de la respuesta
                console.log('Error durante el manejo de la respuesta: ' + error);
            }
        };
    </script>-->
    
</body>

</html>


