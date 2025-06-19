<?php
class PersonaModel
{
    function createPersona(
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
    ) {

        $conexionModel = new ConexionModel();
        $conexion = $conexionModel->connect();
    
        try {
            // Inicia una transacción
            $conexion->beginTransaction();

            // Primero inserta en la tabla domicilio
            $query1 = "insert into domicilio (calle, no_ext, no_int, colonia, cod_Pos) values (:domicilio, :nExt, :nInt, :colonia, :codPos)";
            $stmt1 = $conexion->prepare($query1);
            $stmt1->bindParam(':domicilio', $domicilio);
            $stmt1->bindParam(':nExt', $nExt);
            $stmt1->bindParam(':nInt', $nInt);
            $stmt1->bindParam(':colonia', $colonia);
            $stmt1->bindParam(':codPos', $codPos);
            $stmt1->execute();

            // Obtiene el ID autoincrementable generado
            $idDomicilio = $conexion->lastInsertId();

            // Luego inserta en la tabla empleados
            $query2 = "insert into trabajador (
                id_rol, fecha_actual, sueldo_mensual_deseado, sueldo_mensual_autorizado,
                 fechaContrato, apePaterno, apeMaterno, nombre, 
                edad, idDomicilio, telefono, genero, estadoDomicilio, estadoNacimiento,
                 fechaNacimiento, nacionalidad, viveCon, 
                dependeDe, estadoCivil, curp, afore, rfc, correo, licenciaCompleta, 
                opcionCartilla, opcionPasaporte, nss, docExtranjero, 
                padreNombre, statusPadre, padreDomicilio, padreOcupacion, madreNombre, statusMadre, madreDomicilio, madreOcupacion, conyugeNombre, 
                statusConyuge, conyugeDomicilio, conyugeOcupacion, idiomasDominados, funcionesDominadas, maquinasDominadas, otrosDominios, 
                tiempoUltimo, nombreUltimo, domicilioUltimo, telefonoUltimo, puestoUltimo, sueldoUltimo, motivosUltimo, jefeUltimo, 
                actividadesActual, status
            ) values (
                :id_rol, :fecha_actual, :sueldo_mensual_deseado, :sueldo_mensual_autorizado, :fecha_contrato, :apePaterno, :apeMaterno, :nombre, :edad, 
                :idDomicilio, :telefono, :genero, :estadoDomicilio, :estadoNacimiento, :fechaNacimiento, :nacionalidad, :viveCon, :dependeDe, :estadoCivil, 
                :curp, :afore, :rfc, :correo, :licenciaCompleta, :opcionCartilla, :opcionPasaporte, :nss, :docExtranjero, :padreNombre, 
                :statusPadre, :padreDomicilio, :padreOcupacion, :madreNombre, :statusMadre, :madreDomicilio, :madreOcupacion, :conyugeNombre, 
                :statusConyuge, :conyugeDomicilio, :conyugeOcupacion, :idiomasDominados, :funcionesDominadas, :maquinasDominadas, :otrosDominios, 
                :tiempoUltimo, :nombreUltimo, :domicilioUltimo, :telefonoUltimo, :puestoUltimo, :sueldoUltimo, :motivosUltimo, :jefeUltimo, 
                :actividadesActual, 1 )";


            $stmt2 = $conexion->prepare($query2);
            $stmt2->bindParam(':id_rol', $id_rol, PDO::PARAM_INT);
            $stmt2->bindParam(':fecha_actual', $fecha_actual);
            $stmt2->bindParam(':sueldo_mensual_deseado', $sueldo_mensual_deseado);
            $stmt2->bindParam(':sueldo_mensual_autorizado', $sueldo_mensual_autorizado);
            $stmt2->bindParam(':fecha_contrato', $fecha_contrato);
            $stmt2->bindParam(':apePaterno', $apePaterno);
            $stmt2->bindParam(':apeMaterno', $apeMaterno);
            $stmt2->bindParam(':nombre', $nombre);
            $stmt2->bindParam(':edad', $edad);
            $stmt2->bindParam(':idDomicilio', $idDomicilio);
            $stmt2->bindParam(':telefono', $telefono);
            $stmt2->bindParam(':genero', $genero);
            $stmt2->bindParam(':estadoDomicilio', $estadoDomicilio);
            $stmt2->bindParam(':estadoNacimiento', $estadoNacimiento);
            $stmt2->bindParam(':fechaNacimiento', $fechaNacimiento);
            $stmt2->bindParam(':nacionalidad', $nacionalidad);
            $stmt2->bindParam(':viveCon', $viveCon);
            $stmt2->bindParam(':dependeDe', $dependeDe);
            $stmt2->bindParam(':estadoCivil', $estadoCivil);
            $stmt2->bindParam(':curp', $curp);
            $stmt2->bindParam(':afore', $afore);
            $stmt2->bindParam(':correo', $correo);
            $stmt2->bindParam(':rfc', $rfc);
            $stmt2->bindParam(':licenciaCompleta', $licenciaCompleta);
            $stmt2->bindParam(':opcionCartilla', $opcionCartilla);
            $stmt2->bindParam(':opcionPasaporte', $opcionPasaporte);
            $stmt2->bindParam(':nss', $nss);
            $stmt2->bindParam(':docExtranjero', $docExtranjero);
            $stmt2->bindParam(':padreNombre', $padreNombre);
            $stmt2->bindParam(':statusPadre', $statusPadre);
            $stmt2->bindParam(':padreDomicilio', $padreDomicilio);
            $stmt2->bindParam(':padreOcupacion', $padreOcupacion);
            $stmt2->bindParam(':madreNombre', $madreNombre);
            $stmt2->bindParam(':statusMadre', $statusMadre);
            $stmt2->bindParam(':madreDomicilio', $madreDomicilio);
            $stmt2->bindParam(':madreOcupacion', $madreOcupacion);
            $stmt2->bindParam(':conyugeNombre', $conyugeNombre);
            $stmt2->bindParam(':statusConyuge', $statusConyuge);
            $stmt2->bindParam(':conyugeDomicilio', $conyugeDomicilio);
            $stmt2->bindParam(':conyugeOcupacion', $conyugeOcupacion);
            $stmt2->bindParam(':idiomasDominados', $idiomasDominados);
            $stmt2->bindParam(':funcionesDominadas', $funcionesDominadas);
            $stmt2->bindParam(':maquinasDominadas', $maquinasDominadas);
            $stmt2->bindParam(':otrosDominios', $otrosDominios);
            $stmt2->bindParam(':tiempoUltimo', $tiempoUltimo);
            $stmt2->bindParam(':nombreUltimo', $nombreUltimo);
            $stmt2->bindParam(':domicilioUltimo', $domicilioUltimo);
            $stmt2->bindParam(':telefonoUltimo', $telefonoUltimo);
            $stmt2->bindParam(':puestoUltimo', $puestoUltimo);
            $stmt2->bindParam(':sueldoUltimo', $sueldoUltimo);
            $stmt2->bindParam(':motivosUltimo', $motivosUltimo);
            $stmt2->bindParam(':jefeUltimo', $jefeUltimo);
            $stmt2->bindParam(':actividadesActual', $actividadesActual);

            // Antes de $stmt2->execute();
            echo "<pre>";
            print_r($stmt2);
            echo "</pre>";


            // Ejecutar la consulta preparada
            $stmt2->execute();
    
            // Confirma la transacción
            $conexion->commit();

            return "Transacción completada con éxito.";

        } catch (PDOException $e) {
            // En caso de error, revierte la transacción
            $conexion->rollBack();
            return "Error: " . $e->getMessage();
        } finally {
            // Cerrar la conexión
            $conexion = null;
        }
    }
    

    function readPersona() {
        try {
            $conexionModel = new ConexionModel();
            $conexion = $conexionModel->connect();
    
            $query = "select id, nombre, apellido_paterno, apellido_materno from persona";
            $stmt = $conexion->prepare($query);
            $stmt->execute();
    
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
            // Cerrar la conexión (opcional, PDO lo cerrará automáticamente al finalizar el script)
            $conexion = null;
    
            return $result;
        } catch (PDOException $e) {
            die("Error en la consulta: " . $e->getMessage());
        }
    }
    function updatePersona()
    {
    }
    function deletePersona()
    {
    }
}
     
?>