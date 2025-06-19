<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <h4 class="card-title">Agregar nueva categoria de materia prima</h4>
        <form action="" method="post">  
        <div class="form-group">
            <label>Nombre: </label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
        </div>
        <div class="form-group">
            <label>Ubicacion: </label>
            <input type="text" class="form-control" id="ubicacion" name="ubicacion" placeholder="Ubicación" required>
        </div>
        <input type="submit" id="btnGuardar" name="btnGuardar" value="Guardar" class="btn btn-primary">
        <?php
            $InventarioController = new InventarioController();
            $InventarioController-> agregarCategoriaMateprim();
        ?>
        <button id="btnCancelar" class="btn btn-primary">Cancelar</button>
        <script>
            document.getElementById('btnCancelar').addEventListener('click', function() {
                window.location.href = '/alert-system/nueva-materia-prima';
            });
        </script>
    </form>
        </div>
    </div>
</div>
</div>