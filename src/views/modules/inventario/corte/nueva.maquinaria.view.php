<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <h4 class="card-title">Agregar nueva maquinaria</h4>
        <form action="" method="post">  
        <div class="form-group">
            <label>Folio: </label>
            <input type="text" class="form-control" id="folio" name="folio" placeholder="Folio" required>
        </div>
        <div class="form-group">
            <label>Modelo: </label>
            <input type="text" class="form-control" id="modelo" name="modelo" placeholder="Folio" required>
        </div>
        <div class="form-group">
            <label>Status: </label>
            <div class="form-check">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input" id="status" name="status" value="1">
                Activo
            </label>
            </div> 
        </div>    

        <div class="col-md-6">
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Categoria</label>
                <div class="col-sm-9">
                <select class="form-control" id="categoria_id" name="categoria_id">
                <option value="">Seleccione...</option>
                <?php
                    $InventarioController = new InventarioController();
                    $categorias = $InventarioController->mostrarCategoriaMaquinaria();
                ?>
                </select>
                <button id="btnIrNuevCate" class="btn btn-primary">Agregar Nueva Categoria</button>
                <script>
                    document.getElementById('btnIrNuevCate').addEventListener('click', function() {
                        window.location.reload();
                    });
                </script>
                
            </div>
        </div>
        
        <input class="btn btn-primary" type="submit" id="btnGuardarMaq" name="btnGuardarMaq" value="Guardar">
        <?php
            $InventarioController = new InventarioController();
            $InventarioController-> agregarMaquinaria();
        ?>
        <button id="btnCancelar" class="btn btn-primary">Cancelar</button>
        <script>
            document.getElementById('btnCancelar').addEventListener('click', function() {
                window.location.href = '/alert-system/maquinaria';
            });
        </script>
    </form>
        </div>
    </div>
</div>
</div>