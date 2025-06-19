<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                        <div class="brand-logo">
                            <img src="src/views/images/logo.svg" alt="logo" style="margin-left:5rem;">
                        </div>
                <h4 class="text-center">Bienvenido a Alert System</h4>
                <h6 class="font-weight-light text-center">Ingresa para continuar.</h6>
                <form class="pt-3" action="" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg" placeholder="Ingrese su nombre de usuario" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-lg" placeholder="Ingrese su contraseña" id="password" name="password" required>
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn" name="btnLogin" style="color: black; border:2px solid gray;background-color:lightblue;margin-left:6rem;">Iniciar Sesión</button>
                    </div>
                    <div class="my-2 d-flex justify-content-between align-items-center">
                        <div class="form-check">
                            <label class="form-check-label text-muted">
                            <input type="checkbox" class="form-check-input">
                            Mantenme registrado
                            </label>
                        </div>
                        <a href="#" class="auth-link text-black">Olvidaste tu contraseña?</a>
                    </div>
                    <?php
                        $authController = new AuthController();
                        $authController->login();
                    ?>                
                </form>
                    </div>
                </div>
            </div>
        </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller ends -->