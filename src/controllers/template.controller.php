<?php
class Template {
    function obtenerTemplate() {
        include 'src/views/template.php';
    }

    function cambiarVistas(){
        $ruta = isset($_GET['ruta']) ? $_GET['ruta']:'/';
        switch ($ruta) { 
            case 'usuarios':
                include 'src/views/modules/users/list.view.php';
            break; 
            case 'nombre-usuarios':
                if(isset($_SESSION['rol']) && $_SESSION['rol'] === 'tomador de horarios'){
                    include_once 'src/views/modules/users/listar.nombre.view.php';
                }
            break;
            case 'calculos-sistema':
                //if(isset($_SESSION['rol']) && $_SESSION['rol'] === 'analista'){
                    include_once 'src/views/modules/users/listar.calculados.view.php';
                //}
            break; 
            case 'crear-usuarios':
                if(isset($_SESSION['rol']) && $_SESSION['rol'] === 'gerente general'){
                    include_once 'src/views/modules/users/create.view.php';
                }
            break;
            case 'home';
                if(isset($_SESSION['rol']) && $_SESSION['rol'] === 'gerente general'){
                    include_once 'src/views/modules/layout/index.gerentegeneral.view.php';
                } else if(isset($_SESSION['rol']) && $_SESSION['rol'] === 'accionista'){
                    include_once 'src/views/modules/layout/index.dueño.view.php';
                } else if(isset($_SESSION['rol']) && $_SESSION['rol'] === 'operario'){
                    include_once 'src/views/modules/layout/index.operario.view.php';
                }else if(isset($_SESSION['rol']) && $_SESSION['rol'] === 'tomador de horarios'){
                    include_once 'src/views/modules/layout/index.tomadorhorarios.view.php';
                }else if(isset($_SESSION['rol']) && $_SESSION['rol'] === 'analista'){
                    include_once 'src/views/modules/layout/index.analista.view.php';
                }
            break;
            case '/':
                if(!isset($_SESSION['rol'])){
                    include_once 'src/views/modules/auth/login.view.php';
                }
            break;
            case 'maquinaria':
                if(isset($_SESSION['rol']) && $_SESSION['rol'] === 'gerente general'){
                    include 'src/views/modules/inventario/corte/listar.maquinaria.view.php';
                }
            break;

            case 'salarios':
                //if(isset($_SESSION['rol']) && $_SESSION['rol'] === 'gerente general'){
                    include 'src/views/modules/salario/listar.view.php';
                //}
            break;
            case 'asignar-salarios':
                //if(isset($_SESSION['rol']) && $_SESSION['rol'] === 'gerente general'){
                    include 'src/views/modules/salario/nuevo.salario.view.php';
                //}
            break;
            case 'materia-prima':
                if(isset($_SESSION['rol']) && $_SESSION['rol'] === 'gerente general'){
                    include 'src/views/modules/inventario/corte/listar.mateprim.view.php';
                }
            break;
            case 'nueva-categoria-maquinaria':
                if(isset($_SESSION['rol']) && $_SESSION['rol'] === 'gerente general'){
                    include 'src/views/modules/inventario/corte/nueva.categoria.maquinaria.view.php';
                }
            break;
            case 'nueva-categoria-mateprim':
                if(isset($_SESSION['rol']) && $_SESSION['rol'] === 'gerente general'){
                    include 'src/views/modules/inventario/corte/nueva.categoria.mateprim.view.php';
                }
            break;
            case 'nueva-maquinaria':
                if(isset($_SESSION['rol']) && $_SESSION['rol'] === 'gerente general'){
                    include 'src/views/modules/inventario/corte/nueva.maquinaria.view.php';
                }
            break;
            case 'nueva-materia-prima':
                if(isset($_SESSION['rol']) && $_SESSION['rol'] === 'gerente general'){
                    include 'src/views/modules/inventario/corte/nueva.mateprim.view.php';
                }
            break;
            case 'eliminar-maquinaria':
                if(isset($_SESSION['rol']) && $_SESSION['rol'] === 'gerente general'){
                    include 'src/views/modules/inventario/corte/eliminar.maquinaria.view.php';
                }
            break;
            case 'registro-empleados':
                if(isset($_SESSION['rol']) && $_SESSION['rol'] === 'gerente general'){
                    include 'src/views/modules/persona/nuevo.empleado.view.php';
                }
            break;
            case 'operaciones':
                //if(isset($_SESSION['rol']) && $_SESSION['rol'] === 'analista'){
                    include 'src/views/modules/operacion/listar.operacion.view.php';
                //}
            break;
            case 'nueva-operacion':
                //if(isset($_SESSION['rol']) && $_SESSION['rol'] === 'operario'){
                    include 'src/views/modules/operacion/nueva.operacion.view.php';
                //}
            break;
            case 'corte':
                //if(isset($_SESSION['rol']) && $_SESSION['rol'] === 'tomador de horarios'){
                    include 'src/views/modules/corte/listar.corte.view.php';
                //}
            break;
            case 'nuevo-corte':
                //if(isset($_SESSION['rol']) && $_SESSION['rol'] === 'operario'){
                    include 'src/views/modules/corte/nuevo.corte.view.php';
                //}
            break;
            case 'detalles-corte':
                //if(isset($_SESSION['rol']) && $_SESSION['rol'] === 'operario'){
                    include 'src/views/modules/corte/ver.detalles.corte.view.php';
                //}    
            case 'operario':
                if(isset($_SESSION['rol']) && $_SESSION['rol'] === 'operario'){
                    include 'src/views/modules/inventario/corte/listar.operario.view.php';
                }
            break;
            case 'eficiencia':
                if(isset($_SESSION['rol']) && $_SESSION['rol'] === 'operario'){
                    include'src/views/modules/inventario/corte/listar.eficiencia.view.php';
                }
            break; 
            case 'mantenimientoOpe':
                if(isset($_SESSION['rol']) && $_SESSION['rol'] === 'operario'){
                    include'src/views/modules/inventario/corte/operario.mantenimiento.view.php';
                }
            break; 
            case 'pnc':
                if(isset($_SESSION['rol']) && $_SESSION['rol'] === 'operario'){
                    include'src/views/modules/inventario/corte/operario.pnc.view.php';
                }
            break; 
            case 'ope-usu':
                if(isset($_SESSION['rol']) && $_SESSION['rol'] === 'analista'){
                    include 'src/views/modules/operacion/asignar.ope.usu.view.php';
                }
            break;
            case 'produccion':
                if(isset($_SESSION['rol']) && $_SESSION['rol'] === 'tomador de horarios'){
                    include 'src/views/modules/users/list.prod.view.php';
                }
            break;
            case 'asignar-usuarios':
                if(isset($_SESSION['rol']) && $_SESSION['rol'] === 'rescursos humanos'){
                    include 'src\views\modules\persona\listar.empleado.view.php';
                }
            break;
            case 'asignar-salario':
                if(isset($_SESSION['rol']) && $_SESSION['rol'] === 'recursos humanos'){
                    include 'src\views\modules\persona\nuevo.salario.view.php';
                }
            break;
           
            default:
                include_once 'src/views/modules/errors/404.view.php';
            break;
        }
    }
}