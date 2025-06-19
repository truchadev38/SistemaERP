<?php
 class OperarioController
 {
    public function mostrarOperario(){
        $operarioModel = new OperarioModel();
        $operarioModel->readOperario();
        $respuesta = $operarioModel->readOperario();

         // Obtener el ID de la persona desde la sesión
         $personaId = $_SESSION['persona_id'];

         // Imprimir el ID del operario
         echo "ID del operario: " . $personaId;

        if($respuesta !== 'error'){
            return $respuesta;
        }else{
            return [];
        }
    }

    public function mostrarOperacionesEficiencia(){
        $operarioModel = new operarioModel();
        $operarioModel->readOperacionesEficiencia();
        $respuesta = $operarioModel->readOperacionesEficiencia();

        if($respuesta !== 'error'){
            return $respuesta;
        }else{
            return [];
        }
    }
   
 }

 ?>