<?php
    class AuthController{
        function login() {
            if(isset($_POST['btnLogin'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];

                $authModel = new AuthModel();
                $user = $authModel->getUserByUsername($username);

                if($user === false) {
                    echo "<script>alert('no existe el usuario');</script>";
                } else {
                    if($user['password'] === $password){
                        echo "Bienvenido usuario";
                        // crear variable de session
                        $_SESSION['rol'] = $user['rol_nombre_activo'];
                        echo "Valor de variable de sesion: " . $_SESSION['rol'];
                        echo "<script> window.location.href = '/alert-systemV2/home';</script>";
                    } else {
                        echo "<script>alert('credenciales incorrectas');</script>";
                    }
                }
                //echo "datos del form al server";
                //echo $_POST['username']. $_POST['password'];
            }
        }

        function logout(){
            session_destroy();
            // echo "Sesión finalizada, vuelve pronto :)";
            // echo "<script> window.location.reload();</script>";
            $response = ["message" => 'Session finalizada', 'otro' =>'jejeje otro'];

            return $response;
        }
        
    }
?>
