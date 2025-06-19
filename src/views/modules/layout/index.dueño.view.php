<style>
  /* Estilos CSS para la clase main-panel y las tarjetas */
  body {
    margin: 0;
    /* Elimina el margen por defecto del body */
    display: flex;
    flex-direction: column;
    min-height: 100vh;
    /* Garantiza que el contenido ocupe al menos la altura completa de la ventana */
  }

  .main-panel {
    flex-grow: 1;
    /* Hace que el contenido crezca para ocupar todo el espacio disponible */
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    /* Distribuirá el espacio verticalmente */
    align-items: center;
    /* Centra horizontalmente el contenido */
    padding: 50px 0;
    /* Separación superior e inferior de 50px */
  }

  .card {
    width: 100%;
    /* Ocupa todo el ancho disponible */
    margin-bottom: 50px;
    /* Espacio inferior de 50px entre tarjetas */
  }

  /* Agrega estilos para tu footer según sea necesario */
  footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 10px;
  }
</style>
<div class="main-panel">
  <div class="row row-cols-1 row-cols-md-3">
    <div class="col">
      <div class="card ">
        <center><img src="src/views/images/dueño/Ganancias.png" class="card-img-top" alt="..." style="width: 200px"
            href="menu-tittle"></center>
        <div class="card-body">
          <h5 class="card-title">Ganacias al Momento</h5>
        </div>

      </div>
    </div>
    <div class="col">
      <div class="card">
        <center><img src="src/views/images/dueño/costo.png" class="card-img-top" alt="..." style="width: 200px">
        </center>
        <div class="card-body">
          <h5 class="card-title">Costo de Porduccion por unidad</h5>
        </div>

      </div>
    </div>
    <div class="col">
      <div class="card">
        <center><img src="src/views/images/dueño/Punto de equilibrio.png" class="card-img-top" alt="..."
            style="width: 200px"></center>
        <div class="card-body">
          <h5 class="card-title">Punto de Equilibrio</h5>
        </div>

      </div>
    </div>

    <div class="col">
      <div class="card">
        <center><img src="src/views/images/dueño/ventas.png" class="card-img-top" alt="..." style="width: 200px">
        </center>
        <div class="card-body">
          <h5 class="card-title">Precio de Venta</h5>
        </div>

      </div>
    </div>
    <div class="col">
      <div class="card">
        <center><img src="src/views/images/dueño/rendimiento.png" class="card-img-top" alt="..." style="width: 200px">
        </center>
        <div class="card-body">
          <h5 class="card-title">Porcentaje de Eficiencia</h5>
        </div>

      </div>
    </div>
    <div class="col">
      <div class="card">
        <center><img src="src/views/images/dueño/calidad (2).png" class="card-img-top" alt="..." style="width: 200px;">
        </center>
        <div class="card-body">
          <h5 class="card-title">Porcentaje de calidad</h5>
        </div>

      </div>
    </div>
    <div class="col">
      <div class="card">
        <center><img src="..." class="card-img-top" alt="..." style="width: 200px;"></center>
        <div class="card-body">
          <h5 class="card-title">Precio de Venta por Modelo</h5>
        </div>

      </div>
    </div>
    <div class="col">
      <div class="card">
        <center><img src="src/views/images/dueño/impuestos infonavit imss.png" class="card-img-top" alt="..."
            style="width: 200px"></center>
        <div class="card-body">
          <h5 class="card-title">Impuestos</h5>
        </div>

      </div>
    </div>
  </div>
</div>