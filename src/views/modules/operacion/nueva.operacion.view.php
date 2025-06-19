<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Agregar nueva operación</h4>
            <form action="" method="post">
                <div class="form-group">
                    <label>Nombre de la operacion: </label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
                </div>

        <div class="form-group">    
            <label>Código: </label>
            <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Codigo" required>
        </div>

        <div class="form-group">
            <label>Tiempo estándar: </label>
            <input type="number" class="form-control" id="tiempo_estandar" name="tiempo_estandar"  step="0.01" min="0" placeholder="tiempo estandar" required>
        </div>
    
        <div class="form-group">
            <label>Costo: </label>
            <input type="number" class="form-control" id="costo" name="costo" step="0.01" min="0" placeholder="0.00" required>
        </div>
        <!--
        <div class="form-group">
            <label>Jornada laboral (En Hrs.)</label>
            <input type="number" class="form-control" id="costo" name="costo" step="0.01" min="0" placeholder="0.00" required>
        </div>-->

        <!--<div class="form-group">
            <label>Producción real: ????</label>
            <input type="number" class="form-control" id="produccion_real" name="produccion_real" placeholder="Producción real" required>
        </div>
        <div class="form-group">
            <label>Producción planeada por operación:</label>
            <input type="number" class="form-control" id="produccion_planeada" name="produccion_planeada" placeholder="Producción planeada" required>
        </div>-->
		<button type="submit" class="btn btn-primary" name="btnGuardar">Guardar</button>
        
        <button id="btnCancelar" class="btn btn-primary">Cancelar</button>
        <script>
            document.getElementById('btnCancelar').addEventListener('click', function() {
                window.location.href = '/alert-systemV2/operaciones';
            });
        </script>
        <?php
            $OperacionController = new OperacionController();
            $OperacionController->agregarOperacion();
        ?>
	</form>
        </div>
    </div>
</div>