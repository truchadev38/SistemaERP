<?php
header("Content-Type: application/vnd.ms-excel; charset=iso-8859-1");
header("Content-Disposition: inline; filename=reporte_operario.xls");
?>

<table  class="table table-striped">
    <caption>Reporte Operario</caption>
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Operacion</th>
                            <th>Costo</th>
                            <th>N.piezas</th>
                            <th>Salario Real</th>
                            <th>Inc.</th>
                            <th>Salario con insentivo</th>
                        </tr>
                        <?php
                       $operacionesController = new OperacionController();
                       $datos = $operacionesController->mostrarOperacion();
                       foreach ($datos as $operacionesController){
                        $costo = $operacionesController['costo'];
                            $piezas = $operacionesController['piezasprod'];
                            $salarioReal = $costo * $piezas;

                            $suledoconinsentivo=$operacionesController['porcentaje_incremento'];
                            $salarioFinal = ($salarioReal * $suledoconinsentivo / 100);

                        echo '<tr>
                                <td>'.$operacionesController['id'].'</td>
                                <td>'.$operacionesController['nombre'].'</td>
                                <td>'.'$ '.$operacionesController['costo'].'</td>
                                <td>'.$operacionesController['piezasprod'].'</td>
                                <td>'.$salarioReal.'</td>
                                <td>'.$operacionesController['porcentaje_incremento'].'%'.'</td>
                                <td>'.$salarioFinal.'</td>
                        </tr>';
                       }
                       ?>
                </table>