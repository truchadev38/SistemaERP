<form action="" method="POST"> 
    <input type="submit" name="btnLogout" value="Cerrar sesión">
    <?php
        $authController = new AuthController();
        $authController->logout();
    ?>
</form>