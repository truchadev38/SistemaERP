<?php
class PersonaController
{
    //Funciones para manipular los datos de PERSONA
    function agregarPersona()
    {
        if (isset($_POST['btnRegistrarNuevaPersona'])) {
            // Obtener datos del formulario
            $id_rol = $_POST['id_rol'];
            $fecha_actual = $_POST['fechaActual'];
            $sueldo_mensual_deseado = $_POST['sueldoMensDes'];
            $sueldo_mensual_autorizado = $_POST['sueldoMensAut'];
            $fecha_contrato = $_POST['fechaContrato'];
            $apePaterno = $_POST['apePat'];
            $apeMaterno = $_POST['apeMat'];
            $nombre = $_POST['nombre'];
            $edad = $_POST['edad'];
            $domicilio = $_POST['domicilio'];
            $nExt = $_POST['nExt'];
            $nInt = $_POST['nInt'];
            $colonia = $_POST['colonia'];
            $codPos = $_POST['codPos'];
            $telefono = $_POST['telefono'];
            $genero = isset($_POST['genero']) ? $_POST['genero'] : '';
            $estadoDomicilio = $_POST['estadoDomicilio'];
            $estadoNacimiento = $_POST['estadoNacimiento'];
            $fechaNacimiento = $_POST['fechaNacimiento'];
            $nacionalidad = $_POST['nacionalidad'];
            $viveConArray = isset($_POST['opcionesViveCon']) ? $_POST['opcionesViveCon'] : [];
            $viveCon = implode(', ', $viveConArray);            
            $dependeDeArray = isset($_POST['opcionesDependeDe']) ? $_POST['opcionesDependeDe'] : [];
            $dependeDe = implode(', ', $dependeDeArray);            
            $estadoCivil = $_POST['estadoCivil'];
            $curp = $_POST['curp'];
            $afore = $_POST['afore'];
            $correo = isset($_POST['correo']) ? $_POST['correo'] : '';
            $rfc = $_POST['rfc'];
            $statusYnoLicencia = isset($_POST['optionsRadiosLicencia']) ? $_POST['optionsRadiosLicencia'] : '';
            $numeroLicencia = isset($_POST['numeroLicencia']) ? $_POST['numeroLicencia'] : '';
            // Concatenar $statusYnoLicencia y $numeroLicencia
            $licenciaCompleta = ($statusYnoLicencia == 'Si') ? "Si - '$numeroLicencia'" : "No";            
            $opcionCartilla = isset($_POST['optionRadiosCartilla']) ? $_POST['optionRadiosCartilla'] : '';
            $opcionPasaporte = isset($_POST['optionsRadiosPasaporte']) ? $_POST['optionsRadiosPasaporte'] : '';
            
            $nss = $_POST['nss'];
            $docExtranjero = $_POST['docExtranjero'];

            // Obtener datos de familiares
            $padreNombre = isset($_POST['nomPadre']) ? $_POST['nomPadre'] : '';
            $statusPadre = isset($_POST['opcionVidaPadre']) ? $_POST['opcionVidaPadre'] : '';
            $padreDomicilio = isset($_POST['domicilioPadre']) ? $_POST['domicilioPadre'] : '';
            $padreOcupacion = isset($_POST['ocupacionPadre']) ? $_POST['ocupacionPadre'] : '';
            // Convierte los valores de $statusPadre a texto más descriptivo
            if ($statusPadre === 'Vive') {
                $padreStatusText = 'Vive';
            } elseif ($statusPadre === 'Finado') {
                $padreStatusText = 'Finado';
            } else {
                $padreStatusText = ''; // Puedes ajustar esto según tus necesidades
            }

            // Repite el mismo proceso para la madre y el conyuge
            $madreNombre = isset($_POST['nomMadre']) ? $_POST['nomMadre'] : '';
            $statusMadre = isset($_POST['opcionVidaMadre']) ? $_POST['opcionVidaMadre'] : '';
            $madreDomicilio = isset($_POST['domicilioMadre']) ? $_POST['domicilioMadre'] : '';
            $madreOcupacion = isset($_POST['ocupacionMadre']) ? $_POST['ocupacionMadre'] : '';
            if ($statusMadre === 'Vive') {
                $madreStatusText = 'Vive';
            } elseif ($statusMadre === 'Finado') {
                $madreStatusText = 'Finado';
            } else {
                $madreStatusText = ''; // Puedes ajustar esto según tus necesidades
            }

            $conyugeNombre = isset($_POST['nomConyuge']) ? $_POST['nomConyuge'] : '';
            $statusConyuge = isset($_POST['opcionVidaConyuge']) ? $_POST['opcionVidaConyuge'] : '';
            $conyugeDomicilio = isset($_POST['domicilioConyuge']) ? $_POST['domicilioConyuge'] : '';
            $conyugeOcupacion = isset($_POST['ocupacionConyuge']) ? $_POST['ocupacionConyuge'] : '';
            if ($statusConyuge === 'Vive') {
                $conyugeStatusText = 'Vive';
            } elseif ($statusConyuge === 'Finado') {
                $conyugeStatusText = 'Finado';
            } else {
                $conyugeStatusText = ''; // Puedes ajustar esto según tus necesidades
            }
            // Obtener datos de conocimientos generales
            $idiomasDominadosArray = isset($_POST['idiomasDominados']) ? $_POST['idiomasDominados'] : [];
            $idiomasDominados = implode(', ', $idiomasDominadosArray);
            $funcionesDominadas = isset($_POST['funciones_oficina']) ? $_POST['funciones_oficina'] : '';
            $maquinasDominadas = isset($_POST['maquinas_oficina']) ? $_POST['maquinas_oficina'] : '';
            $otrosDominios = isset($_POST['otros_dominios']) ? $_POST['otros_dominios'] : '';            
            // Obtener datos de empleo actual o anteriores
            $tiempoUltimo = $_POST['tiempo_ultimo'];
            $nombreUltimo = $_POST['nombre_ultimo'];
            $domicilioUltimo = $_POST['domicilio_ultimo'];
            $telefonoUltimo = $_POST['telefono_ultimo'];
            $puestoUltimo = $_POST['puesto_ultimo'];
            $sueldoUltimo = $_POST['sueldo_ultimo'];
            $motivosUltimo = $_POST['motivos_ultimo'];
            $jefeUltimo = $_POST['jefe_ultimo'];
            $actividadesActual = $_POST['actividades_actual'];

            // Instanciar el modelo y agregar la persona
            $personaModel = new PersonaModel();
            $resultado = $personaModel->createPersona(
                $id_rol,
                $fecha_actual,
                $sueldo_mensual_deseado,
                $sueldo_mensual_autorizado,
                $fecha_contrato,
                $apePaterno,
                $apeMaterno,
                $nombre,
                $edad,
                $domicilio,
                $nExt,
                $nInt,
                $colonia,
                $codPos,
                $telefono,
                $genero,
                $estadoDomicilio,
                $estadoNacimiento,
                $fechaNacimiento,
                $nacionalidad,
                $viveCon,
                $dependeDe,
                $estadoCivil,
                $curp,
                $afore,
                $correo,
                $rfc,
                $licenciaCompleta,
                $opcionCartilla,
                $opcionPasaporte,
                $nss,
                $docExtranjero,
                $padreNombre,
                $statusPadre,
                $padreDomicilio,
                $padreOcupacion,
                $madreNombre,
                $statusMadre,
                $madreDomicilio,
                $madreOcupacion,
                $conyugeNombre,
                $statusConyuge,
                $conyugeDomicilio,
                $conyugeOcupacion,
                $idiomasDominados,
                $funcionesDominadas,
                $maquinasDominadas,
                $otrosDominios,
                $tiempoUltimo,
                $nombreUltimo,
                $domicilioUltimo,
                $telefonoUltimo,
                $puestoUltimo,
                $sueldoUltimo,
                $motivosUltimo,
                $jefeUltimo,
                $actividadesActual
            );

            // Manejar el resultado (puedes personalizar esto según tus necesidades)
            if ($resultado === true) {
                echo "La persona se ha agregado correctamente.";
            } else {
                echo "Error al agregar la persona: " . $resultado;
            }
        }
    }

    function mostrarPersona() {
        $PersonaModel = new PersonaModel();
        $PersonaModel->readPersona();
        $respuesta = $PersonaModel->readPersona();

        if ($respuesta !== 'error') {
            return $respuesta;
        } else {
            return [];
        }
    }
    function modificarPersona() {

    }
    function eliminarPersona() {
        
    }
}
?>