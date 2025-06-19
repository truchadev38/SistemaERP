<div class="theme-setting-wrapper">
  <div id="settings-trigger"><i class="ti-settings"></i></div>
  <div id="theme-settings" class="settings-panel">
    <i class="settings-close ti-close"></i>
    <p class="settings-heading">SIDEBAR SKINS</p>
    <div class="sidebar-bg-options selected" id="sidebar-light-theme">
      <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
    </div>
    <div class="sidebar-bg-options" id="sidebar-dark-theme">
      <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
    </div>
    <p class="settings-heading mt-2">HEADER SKINS</p>
    <div class="color-tiles mx-0 px-4">
      <div class="tiles success"></div>
      <div class="tiles warning"></div>
      <div class="tiles danger"></div>
      <div class="tiles info"></div>
      <div class="tiles dark"></div>
      <div class="tiles default"></div>
    </div>
  </div>
</div>
<div id="right-sidebar" class="settings-panel">
  <i class="settings-close ti-close"></i>
  <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab"
        aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab"
        aria-controls="chats-section">CHATS</a>
    </li>
  </ul>
  <div class="tab-content" id="setting-content">
    <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel"
      aria-labelledby="todo-section">
      <div class="add-items d-flex px-3 mb-0">
        <form class="form w-100">
          <div class="form-group d-flex">
            <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
            <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
          </div>
        </form>
      </div>
      <div class="list-wrapper px-3">
        <ul class="d-flex flex-column-reverse todo-list">
          <li>
            <div class="form-check">
              <label class="form-check-label">
                <input class="checkbox" type="checkbox">
                Team review meeting at 3.00 PM
              </label>
            </div>
            <i class="remove ti-close"></i>
          </li>
          <li>
            <div class="form-check">
              <label class="form-check-label">
                <input class="checkbox" type="checkbox">
                Prepare for presentation
              </label>
            </div>
            <i class="remove ti-close"></i>
          </li>
          <li>
            <div class="form-check">
              <label class="form-check-label">
                <input class="checkbox" type="checkbox">
                Resolve all the low priority tickets due today
              </label>
            </div>
            <i class="remove ti-close"></i>
          </li>
          <li class="completed">
            <div class="form-check">
              <label class="form-check-label">
                <input class="checkbox" type="checkbox" checked>
                Schedule meeting for next week
              </label>
            </div>
            <i class="remove ti-close"></i>
          </li>
          <li class="completed">
            <div class="form-check">
              <label class="form-check-label">
                <input class="checkbox" type="checkbox" checked>
                Project review
              </label>
            </div>
            <i class="remove ti-close"></i>
          </li>
        </ul>
      </div>
      <h4 class="px-3 text-muted mt-5 font-weight-light mb-0">Events</h4>
      <div class="events pt-4 px-3">
        <div class="wrapper d-flex mb-2">
          <i class="ti-control-record text-primary mr-2"></i>
          <span>Feb 11 2018</span>
        </div>
        <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
        <p class="text-gray mb-0">The total number of sessions</p>
      </div>
      <div class="events pt-4 px-3">
        <div class="wrapper d-flex mb-2">
          <i class="ti-control-record text-primary mr-2"></i>
          <span>Feb 7 2018</span>
        </div>
        <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
        <p class="text-gray mb-0 ">Call Sarah Graves</p>
      </div>
    </div>
    <!-- To do section tab ends -->
    <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
      <div class="d-flex align-items-center justify-content-between border-bottom">
        <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
        <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See
          All</small>
      </div>
      <ul class="chat-list">
        <li class="list active">
          <div class="profile"><img src="src/views/images/faces/face1.jpg" alt="image"><span class="online"></span>
          </div>
          <div class="info">
            <p>Thomas Douglas</p>
            <p>Available</p>
          </div>
          <small class="text-muted my-auto">19 min</small>
        </li>
        <li class="list">
          <div class="profile"><img src="src/views/images/faces/face2.jpg" alt="image"><span class="offline"></span>
          </div>
          <div class="info">
            <div class="wrapper d-flex">
              <p>Catherine</p>
            </div>
            <p>Away</p>
          </div>
          <div class="badge badge-success badge-pill my-auto mx-2">4</div>
          <small class="text-muted my-auto">23 min</small>
        </li>
        <li class="list">
          <div class="profile"><img src="src/views/images/faces/face3.jpg" alt="image"><span class="online"></span>
          </div>
          <div class="info">
            <p>Daniel Russell</p>
            <p>Available</p>
          </div>
          <small class="text-muted my-auto">14 min</small>
        </li>
        <li class="list">
          <div class="profile"><img src="src/views/images/faces/face4.jpg" alt="image"><span class="offline"></span>
          </div>
          <div class="info">
            <p>James Richardson</p>
            <p>Away</p>
          </div>
          <small class="text-muted my-auto">2 min</small>
        </li>
        <li class="list">
          <div class="profile"><img src="src/views/images/faces/face5.jpg" alt="image"><span class="online"></span>
          </div>
          <div class="info">
            <p>Madeline Kennedy</p>
            <p>Available</p>
          </div>
          <small class="text-muted my-auto">5 min</small>
        </li>
        <li class="list">
          <div class="profile"><img src="src/views/images/faces/face6.jpg" alt="image"><span class="online"></span>
          </div>
          <div class="info">
            <p>Sarah Graves</p>
            <p>Available</p>
          </div>
          <small class="text-muted my-auto">47 min</small>
        </li>
      </ul>
    </div>
    <!-- chat tab ends -->
  </div>
</div>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <?php
    //VISTA PARA TODOS LOS USUARIOS
    if (isset($_SESSION['rol'])) {
      echo '
        <li class="nav-item">
          <a class="nav-link" href= "/alert-systemV2/home">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Inicio</span>
          </a>
        </li>';
    }
    if (isset($_SESSION['rol']) && $_SESSION['rol'] === 'gerente general') {
      echo '
          <li class="nav-item">
            <a class="nav-link" href= "/alert-systemV2/usuarios">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Usuarios</span>
            </a>
          </li>';
    }
    if (isset($_SESSION['rol']) && $_SESSION['rol'] === 'gerente general') {
      echo '
            <li class="nav-item">
              <a class="nav-link" href= "/alert-systemV2/registro-empleados">
                  <i class="icon-grid menu-icon"></i>
                  <span class="menu-title">Registro de empleados</span>
              </a>
            </li>';
    }

    if (isset($_SESSION['rol']) && $_SESSION['rol'] === 'gerente general') {
      echo '
          <li class="nav-item">
          <a class="nav-link" href= "/alert-systemV2/pendiente">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Programación</span>
              <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
              </ul>
          </div>
        </li>';
    }
    // if(isset($_SESSION['rol']) && $_SESSION['rol'] === 'gerente general'){
    //   echo '
    //   <li class="nav-item">
    //     <a class="nav-link" href= "/alert-systemV2/home">
    //         <i class="icon-grid menu-icon"></i>
    //         <span class="menu-title">Salario</span>
    //     </a>
    //   </li>';
    if (isset($_SESSION['rol']) && ($_SESSION['rol'] === 'gerente general' || $_SESSION['rol'] === 'operario' || $_SESSION['rol'] === 'dueño')) {
      echo '
          <li class="nav-item">
              <a class="nav-link" href="/alert-systemV2/salarios">
                  <i class="icon-grid menu-icon"></i>
                  <span class="menu-title">Salario</span>
              </a>
              
          </li>';
    } //   }
   
    if (isset($_SESSION['rol']) && ($_SESSION['rol'] === 'recursos humanos')) {
      echo '
                  <li class="nav-item">
                      <a class="nav-link" href="/alert-systemV2/asignar-usuarios">
                          <i class="icon-grid menu-icon"></i>
                          <span class="menu-title">Asignar Usuarios</span>
                      </a> 
                  </li>';
    }

    if (isset($_SESSION['rol']) && ($_SESSION['rol'] === 'recursos humanos')) {
      echo '
          <li class="nav-item">
              <a class="nav-link" href="/alert-systemV2/asignar-salarios">
                  <i class="icon-grid menu-icon"></i>
                  <span class="menu-title">Salario</span>
              </a>
              
          </li>';
    }



    /*        
    if(isset($_SESSION['rol']) && $_SESSION['rol'] === 'dul'){
        echo '
    }
    if (isset($_SESSION['rol']) && $_SESSION['rol'] === 'gerente general general') {
      echo '
          <li class="nav-item">
            <a class="nav-link" href= "/alert-systemV2/home">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Salario</span>
            </a>
          </li>';
    }

    if (isset($_SESSION['rol']) && $_SESSION['rol'] === 'dul') {
      echo '
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="icon-columns menu-icon"></i>
              <span class="menu-title">Salario</span>
              <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
              <li class="nav-item"><a class="nav-link" href="/alert-systemV2/salario">Basic Elements</a></li>
              </ul>
          </div>
        </li>';
      }
      */
    if (isset($_SESSION['rol']) && $_SESSION['rol'] === 'operario') {
      echo '<li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
          <i class="icon-bar-graph menu-icon"></i>
          <span class="menu-title">Inventario</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="charts">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="/alert-systemV2/materia-prima">Materia Prima</a></li>
            <li class="nav-item"> <a class="nav-link" href="/alert-systemV2/maquinaria">Maquinaria</a></li>
            <li class="nav-item"> <a class="nav-link" href="/alert-systemV2/operario">Operario</a></li>
            <li class="nav-item"> <a class="nav-link" href="/alert-systemV2/eficiencia">Eficiencia</a></li>
            <li class="nav-item"> <a class="nav-link" href="/alert-systemV2/mantenimientoOpe">Mantenimiento</a></li>
            <li class="nav-item"> <a class="nav-link" href="/alert-systemV2/pnc">PNC</a></li>

          </ul>
        </div>
      </li>';
    }

    if (isset($_SESSION['rol']) && $_SESSION['rol'] === 'dul') {
      echo '
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="icon-grid-2 menu-icon"></i>
              <span class="menu-title">Tables</span>
              <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Basic table</a></li>
              </ul>
          </div>
        </li>';
    }
    if (isset($_SESSION['rol']) && $_SESSION['rol'] === 'dul') {
      echo '
        <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
            <i class="icon-contract menu-icon"></i>
            <span class="menu-title">Icons</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="icons">
            <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/icons/mdi.html">Mdi icons</a></li>
            </ul>
        </div>
        </li>';
    }
    if (isset($_SESSION['rol']) && $_SESSION['rol'] === 'dul') {
      echo '
        <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
            <i class="icon-head menu-icon"></i>
            <span class="menu-title">User Pages</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="auth">
            <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
            </ul>
        </div>
        </li>';
    }
    if (isset($_SESSION['rol']) && $_SESSION['rol'] === 'dul') {
      echo '
        <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
            <i class="icon-ban menu-icon"></i>
            <span class="menu-title">Error pages</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="error">
            <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
            </ul>
        </div>
        </li>';
    }
    /*if (isset($_SESSION['rol']) && $_SESSION['rol'] === 'accionista') {
      echo '
        <li class="nav-item">
          <a class="nav-link" href= "/alert-systemV2/administrador">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Inicio</span>
          </a>
        </li>';
    }*/
    if (isset($_SESSION['rol']) && $_SESSION['rol'] === 'accionista') {
      echo '
              <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#contUsuarios" aria-expanded="false" aria-controls="contUsuarios">
                  <i class=" menu-icon"></i>
                  <span class="menu-title">Control de uusuarios</span>
                  <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="contUsuarios">
                  <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
                  </ul>
              </div>
              </li>';
    }
    if (isset($_SESSION['rol']) && $_SESSION['rol'] === 'accionista') {
      echo '
              <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ganancias" aria-expanded="false" aria-controls="ganancias">
                  <i class=" menu-icon"></i>
                  <span class="menu-title">Ganancias al Momento</span>
                  <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ganancias">
                  <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
                  </ul>
              </div>
              </li>';
    }
    if (isset($_SESSION['rol']) && $_SESSION['rol'] === 'accionista') {
      echo '
      <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#produccion" aria-expanded="false" aria-controls="produccion">
          <i class=" menu-icon"></i>
          <span class="menu-title">Costo de Producción</span>
          <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="produccion">
          <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
          </ul>
      </div>
      </li>';
    }

    if (isset($_SESSION['rol']) && $_SESSION['rol'] === 'accionista') {
      echo '
        <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#equilibrio" aria-expanded="false" aria-controls="equilibrio">
            <i class=" menu-icon"></i>
            <span class="menu-title">Punto de Equilibrio</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="equilibrio">
            <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
            </ul>
        </div>
        </li>';
    }

    if (isset($_SESSION['rol']) && $_SESSION['rol'] === 'accionista') {
      echo '
          <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#venta" aria-expanded="false" aria-controls="venta">
              <i class=" menu-icon"></i>
              <span class="menu-title">Precio de Venta</span>
              <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="venta">
              <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
              </ul>
          </div>
          </li>';
    }
    if (isset($_SESSION['rol']) && $_SESSION['rol'] === 'accionista' || $_SESSION['rol'] === 'operario' || $_SESSION['rol'] === 'gerente general') {
      echo '
            <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#eficiencia" aria-expanded="false" aria-controls="eficiencia">
                <i class=" menu-icon"></i>
                <span class="menu-title">% de Eficiencia</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="eficiencia">
                <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
                </ul>
            </div>
            </li>';
    }

    if (isset($_SESSION['rol']) && $_SESSION['rol'] === 'accionista') {
      echo ' 
              <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#calidad" aria-expanded="false" aria-controls="calidad">
                  <i class=" menu-icon"></i>
                  <span class="menu-title">% de Calidad</span>
                  <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="calidad">
                  <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
                  </ul>
              </div>
              </li>';
    }

    if (isset($_SESSION['rol']) && $_SESSION['rol'] === 'accionista') {
      echo '
                <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ventaxmodelo" aria-expanded="false" aria-controls="ventaxmodelo">
                    <i class=" menu-icon"></i>
                    <span class="menu-title">$ de Venta por modelo</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ventaxmodelo">
                    <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
                    </ul>
                </div>
                </li> ';
    }

    if (isset($_SESSION['rol']) && $_SESSION['rol'] === 'accionista') {
      echo '
                  <li class="nav-item">
                  <a class="nav-link" data-toggle="collapse" href="#impuestos" aria-expanded="false" aria-controls="impuestos">
                      <i class=" menu-icon"></i>
                      <span class="menu-title">Impuestos</span>
                      <i class="menu-arrow"></i>
                  </a>
                  <div class="collapse" id="impuestos">
                      <ul class="nav flex-column sub-menu">
                      <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                      <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
                      </ul>
                  </div>
                  </li> 

        <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
            <i class="icon-ban menu-icon"></i>
            <span class="menu-title">Error pages</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="error">
            <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
            </ul>
        </div>
        </li>';
    }
    if (isset($_SESSION['rol']) && $_SESSION['rol'] === 'operario') {
      echo '
      <li class="nav-item">
      <a class="nav-link" href="pages/documentation/documentation.html">
        <i class="icon-paper menu-icon"></i>
        <span class="menu-title">Produccion al momento</span>
      </a>
    </li>';
    }
    if (isset($_SESSION['rol']) && $_SESSION['rol'] === 'analista') {
      echo '
      <li class="nav-item">
      <a class="nav-link" href="/alert-systemV2/ope-usu">
        <i class="icon-paper menu-icon"></i>
        <span class="menu-title">Asigar operaciones</span>
      </a>
    </li>';
    }
    if (isset($_SESSION['rol']) && $_SESSION['rol'] === 'tomador de horarios') {
      echo '
          <li class="nav-item">
          <a class="nav-link" href="/alert-systemV2/nombre-usuarios">
            <i class="icon-paper menu-icon"></i>
            <span class="menu-title">Anotar horario</span>
          </a>
        </li>';
    }
    if (isset($_SESSION['rol']) && $_SESSION['rol'] === 'analista') {
      echo '
          <li class="nav-item">
          <a class="nav-link" href="/alert-systemV2/calculos-sistema">
            <i class="icon-paper menu-icon"></i>
            <span class="menu-title">Registro de horas</span>
          </a>
        </li>';
    }
    if (isset($_SESSION['rol']) && ($_SESSION['rol'] === 'x' || $_SESSION['rol'] === 'z' || $_SESSION['rol'] === 'y')) {
      echo '
          <li class="nav-item">
          <a class="nav-link" href="/alert-systemV2/corte">
            <i class="icon-paper menu-icon"></i>
            <span class="menu-title">Cortes</span>
          </a>
        </li>';
    }
    if (isset($_SESSION['rol']) && ($_SESSION['rol'] === 'analista' || $_SESSION['rol'] === 'gerente general' || $_SESSION['rol'] === 'tomador de horarios')) {
      echo '
          <li class="nav-item">
          <a class="nav-link" href="/alert-systemV2/operaciones">
            <i class="icon-paper menu-icon"></i>
            <span class="menu-title">Operaciones</span>
          </a>
        </li>';
    }
    if (isset($_SESSION['rol']) && $_SESSION['rol'] === 'recursos humanos') {
      echo '
          <li class="nav-item">
          <a class="nav-link" href="/alert-systemV2/crear-usuarios">
            <i class="icon-paper menu-icon"></i>
            <span class="menu-title">Usuarios</span>
          </a>
        </li>';
    }
    if (isset($_SESSION['rol']) && $_SESSION['rol'] === 'r') {
      echo '
          <li class="nav-item">
          <a class="nav-link" href="/alert-systemV2/asignar-salarios">
            <i class="icon-paper menu-icon"></i>
            <span class="menu-title">Asignar Salarios</span>
          </a>
        </li>';
    }
    /*if (isset($_SESSION['rol']) && ($_SESSION['rol'] === 'analista' || $_SESSION['rol'] === 'gerente general' || $_SESSION['rol'] === 'tomador de horarios')) {
      echo '
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#cortesyoperaciones" aria-expanded="false" aria-controls="cortesyoperaciones">
                  <i class="icon-layout menu-icon"></i>
                  <span class="menu-title">Cortes y operaciones</span>
                  <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="cortesyoperaciones">
                  <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="/alert-systemV2/corte">Ver cortes</a></li>
                  <li class="nav-item"> <a class="nav-link" href="/alert-systemV2/operaciones">Ver operaciones</a></li>
                  </ul>
              </div>
            </li>';
    }*/
    ?>

  </ul>
</nav>