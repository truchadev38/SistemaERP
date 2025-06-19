<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <h2>Crear Nuevo Usuario</h2>

<form action="procesar_formulario.php" method="post">
  <!-- Datos de Persona -->
  <label for="nombre">Nombre:</label>
  <input type="text" name="nombre" required><br>

  <label for="apellido_paterno">Apellido Paterno:</label>
  <input type="text" name="apellido_paterno" required><br>

  <label for="apellido_materno">Apellido Materno:</label>
  <input type="text" name="apellido_materno" required><br>

  <!-- Datos de Usuario -->
  <label for="usuario">Nombre de Usuario:</label>
  <input type="text" name="usuario" required><br>

  <label for="password">Contraseña:</label>
  <input type="password" name="password" required><br>

  <label for="correo">Correo Electrónico:</label>
  <input type="email" name="correo" required><br>

  <!-- Selección de Rol -->
  <label for="rol">Rol:</label>
  <select name="rol" required>
    <option value="admin">Administrador</option>
    <option value="usuario">Usuario</option>
    <!-- Agrega más opciones según tus roles -->
  </select><br>

  <!-- Botón de Enviar -->
  <input type="submit" value="Crear Usuario">
</form>
        </div>
    </div>
</div>