<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Registro de Nuevo Empleado</h4>
            <form action="" method="post" id="btnRegistrarNuevaPersona">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label">Puesto asignado:</label>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <select class="form-control" id="id_rol" name="id_rol">
                                            <option value="">Seleccione...</option>
                                            <?php
                                            $RolController = new RolController();
                                            $RolController->mostrarRol();
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label class="form-label">Fecha</label>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input type="date" class="form-control" id="fechaActual" name="fechaActual" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label class="form-label">Sueldo Mensual Deseado</label>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-primary text-white">$</span>
                                            </div>
                                            <input type="text" class="form-control" aria-label=" " id="sueldoMensDes"
                                                pattern="[0-9]+" name="sueldoMensDes">
                                            <div class="input-group-append">
                                                <span class="input-group-text">.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <label class="form-label">Sueldo Mensual Autorizado</label>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-primary text-white">$</span>
                                            </div>
                                            <input type="text" class="form-control" aria-label=" " id="sueldoMensAut"
                                                name="sueldoMensAut">
                                            <div class="input-group-append">
                                                <span class="input-group-text">.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label class="form-label">Fecha de Contrato</label>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input type="date" class="form-control" id="fechaContrato"
                                            name="fechaContrato" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <h4 class="card-title">Datos Personales</h4>

                        <div class="row">

                            <div class="col-md-2">
                                <label class="form-label">Apellido Paterno:</label>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="apePat" name="apePat" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <label class="form-label">Apellido Materno:</label>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="apeMat" name="apeMat" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Nombre (s):</label>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="nombre" name="nombre" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <label class="form-label">Edad:</label>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <select class="form-control" id="edad" name="edad">
                                                <option value="">Seleccione.....</option>
                                                <option value="18">18 años</option>
                                                <option value="19">19 años</option>
                                                <option value="20">20 años</option>
                                                <option value="21">21 años</option>
                                                <option value="22">22 años</option>
                                                <option value="23">23 años</option>
                                                <option value="24">24 años</option>
                                                <option value="25">25 años</option>
                                                <option value="26">26 años</option>
                                                <option value="27">27 años</option>
                                                <option value="28">28 años</option>
                                                <option value="29">29 años</option>
                                                <option value="30">30 años</option>
                                                <option value="31">31 años</option>
                                                <option value="32">32 años</option>
                                                <option value="33">33 años</option>
                                                <option value="34">34 años</option>
                                                <option value="35">35 años</option>
                                                <option value="36">36 años</option>
                                                <option value="37">37 años</option>
                                                <option value="38">38 años</option>
                                                <option value="39">39 años</option>
                                                <option value="40">40 años</option>
                                                <option value="41">41 años</option>
                                                <option value="42">42 años</option>
                                                <option value="43">43 años</option>
                                                <option value="44">44 años</option>
                                                <option value="45">45 años</option>
                                                <option value="46">46 años</option>
                                                <option value="47">47 años</option>
                                                <option value="48">48 años</option>
                                                <option value="49">49 años</option>
                                                <option value="50">50 años</option>
                                                <option value="51">51 años</option>
                                                <option value="52">52 años</option>
                                                <option value="53">53 años</option>
                                                <option value="54">54 años</option>
                                                <option value="55">55 años</option>
                                                <option value="56">56 años</option>
                                                <option value="57">57 años</option>
                                                <option value="58">58 años</option>
                                                <option value="59">59 años</option>
                                                <option value="60">60 años</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-2">
                                <label class="form-label">Domicilio:</label>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="domicilio" name="domicilio" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-1">
                                <label class="form-label">No. Ext:</label>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="nExt" name="nExt" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-1">
                                <label class="form-label">No. Int:</label>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="nInt" name="nInt" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <label class="form-label">Colonia:</label>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="colonia" name="colonia" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <label class="form-label">CP</label>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="codPos" name="codPos" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <label class="form-label">Telefono Celular</label>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input type="tel" class="form-control" id="telefono" name="telefono" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <label class="form-label">Genero</label>
                                <div class="form-check" id="opcionesGenero" name="opcionesGenero">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="genero" value="Masculino"
                                                id="masculino">
                                            Masculino
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="genero" value="Femenino"
                                                id="femenino">
                                            Femenino
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-label"> Ciudad o Alcaldía, Entidad Federativa del Domicilio: </label>
                                <div class="form-group">
                                    <select class="form-control" id="estadoDomicilio" name="estadoDomicilio">
                                        <option value="Aguascalientes">Aguascalientes</option>
                                        <option value="Bajacalifornia">Baja California</option>
                                        <option value="Bajacaliforniasur">Baja California Sur</option>
                                        <option value="Campeche">Campeche</option>
                                        <option value="Chiapas">Chiapas</option>
                                        <option value="Chihuahua">Chihuahua</option>
                                        <option value="Coahuila">Coahuila</option>
                                        <option value="Colima">Colima</option>
                                        <option value="Ciudaddemexico">Ciudad de México</option>
                                        <option value="Durango">Durango</option>
                                        <option value="Guanajuato">Guanajuato</option>
                                        <option value="Guerrero">Guerrero</option>
                                        <option value="Hidalgo">Hidalgo</option>
                                        <option value="Jalisco">Jalisco</option>
                                        <option value="Mexico">México</option>
                                        <option value="Michoacan">Michoacán</option>
                                        <option value="Morelos">Morelos</option>
                                        <option value="Nayarit">Nayarit</option>
                                        <option value="NuevoLeon">Nuevo León</option>
                                        <option value="Oaxaca">Oaxaca</option>
                                        <option value="Puebla">Puebla</option>
                                        <option value="Queretaro">Querétaro</option>
                                        <option value="QuintanaRoo">Quintana Roo</option>
                                        <option value="SanLuisPotosi">San Luis Potosí</option>
                                        <option value="Sinaloa">Sinaloa</option>
                                        <option value="Sonora">Sonora</option>
                                        <option value="Tabasco">Tabasco</option>
                                        <option value="Tamaulipas">Tamaulipas</option>
                                        <option value="Tlaxcala">Tlaxcala</option>
                                        <option value="Veracruz">Veracruz</option>
                                        <option value="Yucatan">Yucatán</option>
                                        <option value="Zacatecas">Zacatecas</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label"> Entidad Federativa de nacimiento: </label>
                                <div class="form-group">
                                    <select class="form-control" id="estadoNacimiento" name="estadoNacimiento">
                                        <option value="Aguascalientes">Aguascalientes</option>
                                        <option value="Bajacalifornia">Baja California</option>
                                        <option value="Bajacaliforniasur">Baja California Sur</option>
                                        <option value="Campeche">Campeche</option>
                                        <option value="Chiapas">Chiapas</option>
                                        <option value="Chihuahua">Chihuahua</option>
                                        <option value="Coahuila">Coahuila</option>
                                        <option value="Colima">Colima</option>
                                        <option value="Ciudaddemexico">Ciudad de México</option>
                                        <option value="Durango">Durango</option>
                                        <option value="Guanajuato">Guanajuato</option>
                                        <option value="Guerrero">Guerrero</option>
                                        <option value="Hidalgo">Hidalgo</option>
                                        <option value="Jalisco">Jalisco</option>
                                        <option value="Mexico">México</option>
                                        <option value="Michoacan">Michoacán</option>
                                        <option value="Morelos">Morelos</option>
                                        <option value="Nayarit">Nayarit</option>
                                        <option value="NuevoLeon">Nuevo León</option>
                                        <option value="Oaxaca">Oaxaca</option>
                                        <option value="Puebla">Puebla</option>
                                        <option value="Queretaro">Querétaro</option>
                                        <option value="QuintanaRoo">Quintana Roo</option>
                                        <option value="SanLuisPotosi">San Luis Potosí</option>
                                        <option value="Sinaloa">Sinaloa</option>
                                        <option value="Sonora">Sonora</option>
                                        <option value="Tabasco">Tabasco</option>
                                        <option value="Tamaulipas">Tamaulipas</option>
                                        <option value="Tlaxcala">Tlaxcala</option>
                                        <option value="Veracruz">Veracruz</option>
                                        <option value="Yucatan">Yucatán</option>
                                        <option value="Zacatecas">Zacatecas</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label for="" class="form-label">Fecha de Nacimiento</label>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input type="date" class="form-control" id="fechaNacimiento"
                                            name="fechaNacimiento" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Nacionalidad :</label>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" placeholder="Mexicana" id="nacionalidad"
                                            name="nacionalidad" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label"> Vive con: (Seleccione Padres, Familia, Parientes, Otros o
                                    Ninguno)</label>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" name="opcionesViveCon[]"
                                                    value="Padres">
                                                Padres
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" name="opcionesViveCon[]"
                                                    value="Familia">
                                                Familia
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" name="opcionesViveCon[]"
                                                    value="Parientes">
                                                Parientes
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input"
                                                    name="idiomasDominados[]" value="Otros">
                                                Otros
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input"
                                                    name="idiomasDominados[]" value="Ninguno">
                                                Ninguno
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label"> Personas que dependen de usted (Seleccione: Hijos, Conguye,
                                    Padres o Ninguno.)</label>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input"
                                                    name="opcionesDependeDe[]" value="Padres">
                                                Padres
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input"
                                                    name="opcionesDependeDe[]" value="Hijos">
                                                Hijos
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input"
                                                    name="opcionesDependeDe[]" value="Conyuge">
                                                Conyuge
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input"
                                                    name="opcionesDependeDe[]" value="Otros">
                                                Otros
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input"
                                                    name="opcionesDependeDe[]" value="Ninguno">
                                                Ninguno
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <label for="firstName" class="form-label">Estado Civil: </label>
                                <select class="form-control" id="estadoCivil" name="estadoCivil">
                                    <option value="">Seleccione.....</option>
                                    <option value="18">Soltero</option>
                                    <option value="19">Casado</option>
                                    <option value="20">Viudo</option>
                                    <option value="21">Divorciado</option>
                                    <option value="22">Union Libre</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <h4 class="card-title">Documentación</h4>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-label">Clave Unica de Registro de Población (CURP):</label>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="curp" name="curp" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">No de Afore:</label>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="afore" name="afore" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Correo Electronico:</label>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input type="email" class="form-control" id="correo" name="correo" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-label">¿Cuenta con Licencia de Manejo?</label>
                                <div class="form-check" id="statusYnoLicenciaDiv" name="statusYnoLicenciaDiv">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" onclick="mostrarCuadroTextoLicencia()"
                                                class="form-check-input" name="optionsRadiosLicencia"
                                                id="optionsRadiosLicenciaSi" value="Si">
                                            Si
                                        </label>
                                        <div class="col-md-12" id="cuadroTextoLicencia" style="display: none;">
                                            <label class="form-label">Numero de Licencia:</label>
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" id="numeroLicencia"
                                                        name="numeroLicencia" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" onclick="ocultarCuadroTextoLicencia()"
                                                class="form-check-input" name="optionsRadiosLicencia"
                                                id="optionsRadiosLicenciaNo" value="No">
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">¿Cuenta con Cartilla del Servicio Militar?</label>
                                <div class="form-check" name="opcionCartilla">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="optionRadiosCartilla"
                                                value="Si">
                                            Si
                                        </label>
                                    </div>
                                    <div class="form-check">

                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="optionRadiosCartilla"
                                                value="No">
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">¿Cuenta con Pasaporte?</label>
                                <div class="form-check">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="optionsRadiosPasaporte"
                                                value="Si">
                                            Si
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="optionsRadiosPasaporte"
                                                value="No">
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-label">Numero de Seguridad Social (NSS):</label>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="nss" name="nss" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Registro Federal de Contribuyentes (RFC):</label>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="rfc" name="rfc" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Si es extranjero que documentos le permite trabajar en el
                                    pais:</label>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="docExtranjero"
                                            name="docExtranjero" />
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!--<div class="card-body">
                        <h4 class="card-title">Estado de Salud y Habitos Personales</h4>
                        <div class="row">

                            <div class="col-md-5">
                                <label class="form-label">¿Cómo considera su estado de salud actual? (Bueno, Regular,
                                    Malo)</label>
                                <div class="form-check" id="estSalud" name="estSalud">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="optionsRadios"
                                                id="optionsRadios1" value="">
                                            Bueno
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="optionsRadios"
                                                id="optionsRadios1" value="">
                                            Regular
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="optionsRadios"
                                                id="optionsRadios1" value="">
                                            Malo
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-7">
                                <label for="firstName" class="form-label">¿Padece alguna enfermedad crónica? Seleccione
                                    abajo:
                                    Si y Explique o seleccione: No </label>
                                <div class="form-check" id="opcionEnfermedad" name="opcionEnfermedad">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="optionsRadios"
                                                id="optionsRadios1" onclick="mostrarCuadroTexto()" value="">
                                            Si
                                        </label>
                                        <div id="cuadroTexto" style="display: none;">
                                            <label for="texto">Explique:</label>
                                            <input type="text" id="texto" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="optionsRadios"
                                                id="optionsRadios2" onclick="ocultarCuadroTexto()" value="">
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label class="form-label">¿Cuál es su meta en la vida?</label>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <textarea class="form-control" name="" id="metaVida" name="metaVida" cols="30"
                                            rows="2"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->

                    <div class="card-body">
                        <h4 class="card-title">Datos Familiares</h4>
                        <div class="row">
                            <div class="table-responsive pt-3">
                                <table class="table table-bordered" id="tabla">
                                    <thead>
                                        <tr>
                                            <th>
                                                Nombre (s) <p class="card-description"> (sólo nombres sin apellidos)
                                                </p>
                                            </th>
                                            <th>
                                                Vive
                                            </th>
                                            <th>
                                                Finado
                                            </th>
                                            <th>
                                                Domicilio <p class="card-description"> (Sólo Entidad Federativa y
                                                    Colonia) </p>
                                            </th>
                                            <th>
                                                Ocupación
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <label class="form-label">Padre </label>
                                                <input type="text" id="nomPadre" name="nomPadre" class="form-control" />
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input"
                                                            name="opcionVidaPadre" value="Vive">
                                                        Vive
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input"
                                                            name="opcionVidaPadre" value="Finado">
                                                        Finado
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" id="domicilioPadre" name="domicilioPadre"
                                                    class="form-control" />
                                            </td>
                                            <td>
                                                <input type="text" id="ocupacionPadre" name="ocupacionPadre"
                                                    class="form-control" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="form-label">Madre </label>
                                                <input type="text" id="nomMadre" name="nomMadre" class="form-control" />
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input"
                                                            name="opcionVidaMadre" value="Vive">
                                                        Vive
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input"
                                                            name="opcionVidaMadre" value="Finado">
                                                        Finado
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" id="domicilioMadre" name="domicilioMadre"
                                                    class="form-control" />
                                            </td>
                                            <td>
                                                <input type="text" id="ocupacionMadre" name="ocupacionMadre"
                                                    class="form-control" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="form-label">Esposa (o)</label>
                                                <input type="text" id="nomConyuge" name="nomConyuge" class="form-control" />
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input"
                                                            name="opcionVidaConyuge" value="Vive">
                                                        Vive
                                                    </label>

                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input"
                                                            name="opcionVidaConyuge" value="Finado">
                                                        Finado
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" id="domicilioConyuge" name="domicilioConyuge"
                                                    class="form-control" />
                                            </td>
                                            <td>
                                                <input type="text" id="ocupacionConyuge" name="ocupacionConyuge"
                                                    class="form-control" />
                                            </td>
                                        </tr>
                                        <!--<tr>
                                            <td>
                                                <label class="form-label">Nombre y edades de los hijos</label>
                                            </td>
                                            <td colspan="3">
                                                <label class="form-label">Nombre (s) </label>
                                                <div class="form-group">
                                                    <input type="text" id="texto" class="form-control" />
                                                </div>
                                            </td>
                                            <td>
                                                <label class="form-label">Edad: </label>
                                                <div class="form-group">
                                                    <select class="form-control" id="exampleFormControlSelect1">
                                                        <option value="">Seleccione.....</option>
                                                        <option value="18">18 años</option>
                                                        <option value="19">19 años</option>
                                                        <option value="20">20 años</option>
                                                        <option value="21">21 años</option>
                                                        <option value="22">22 años</option>
                                                        <option value="23">23 años</option>
                                                        <option value="24">24 años</option>
                                                        <option value="25">25 años</option>
                                                        <option value="26">26 años</option>
                                                        <option value="27">27 años</option>
                                                        <option value="28">28 años</option>
                                                        <option value="29">29 años</option>
                                                        <option value="30">30 años</option>
                                                        <option value="31">31 años</option>
                                                        <option value="32">32 años</option>
                                                        <option value="33">33 años</option>
                                                        <option value="34">34 años</option>
                                                        <option value="35">35 años</option>
                                                        <option value="36">36 años</option>
                                                        <option value="37">37 años</option>
                                                        <option value="38">38 años</option>
                                                        <option value="39">39 años</option>
                                                        <option value="40">40 años</option>
                                                        <option value="41">41 años</option>
                                                        <option value="42">42 años</option>
                                                        <option value="43">43 años</option>
                                                        <option value="44">44 años</option>
                                                        <option value="45">45 años</option>
                                                        <option value="46">46 años</option>
                                                        <option value="47">47 años</option>
                                                        <option value="48">48 años</option>
                                                        <option value="49">49 años</option>
                                                        <option value="50">50 años</option>
                                                        <option value="51">51 años</option>
                                                        <option value="52">52 años</option>
                                                        <option value="53">53 años</option>
                                                        <option value="54">54 años</option>
                                                        <option value="55">55 años</option>
                                                        <option value="56">56 años</option>
                                                        <option value="57">57 años</option>
                                                        <option value="58">58 años</option>
                                                        <option value="59">59 años</option>
                                                        <option value="60">60 años</option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5">
                                                <button type="button" class="btn btn-primary col-md-12"
                                                    onclick="agregarFila()">Agregar Integrante</button>
                                            </td>
                                        </tr>-->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <h4 class="card-title">Conocimientos Generales</h4>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-label">Idioma que domina: </label>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input"
                                                    name="idiomasDominados[]" value="Español">
                                                Español
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input"
                                                    name="idiomasDominados[]" value="Ingles">
                                                Ingles
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input"
                                                    name="idiomasDominados[]" value="Aleman">
                                                Aleman
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input"
                                                    name="idiomasDominados[]" value="Otro">
                                                Otro
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="funciones_oficina" class="form-label">Funciones que domina:</label>
                                <input type="text" class="form-control" id="funciones_oficina" name="funciones_oficina">
                            </div>
                            <div class="col-md-4">
                                <label for="maquinas_oficina" class="form-label">Máquinas que domina:</label>
                                <input type="text" class="form-control" id="maquinas_oficina" name="maquinas_oficina">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="otros_dominios" class="form-label">Otros trabajos o funciones que
                                    domina:</label>
                                    <input type="text" class="form-control" id="otros_dominios" name="otros_dominios"
                                    cols="5" rows="3">
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <h4 class="card-title">Empleo Actual o Anteriores</h4>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Concepto</th>
                                    <th>Empleo actual o último</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiempo que prestó sus servicios</td>
                                    <td><input type="text" class="form-control" id="tiempo_ultimo" name="tiempo_ultimo"
                                            placeholder="Ingrese tiempo">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nombre de la empresa</td>
                                    <td><input type="text" class="form-control" id="nombre_ultimo" name="nombre_ultimo"
                                            placeholder="Ingrese nombre">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Domicilio</td>
                                    <td><input type="text" class="form-control" id="domicilio_ultimo"
                                            name="domicilio_ultimo" placeholder="Ingrese domicilio"></td>
                                </tr>
                                <tr>
                                    <td>Teléfono</td>
                                    <td><input type="text" class="form-control" id="telefono_ultimo"
                                            name="telefono_ultimo" placeholder="Ingrese teléfono"></td>
                                </tr>
                                <tr>
                                    <td>Puesto (Inicial)(Final)</td>
                                    <td><input type="text" class="form-control" id="puesto_ultimo" name="puesto_ultimo"
                                            placeholder="Ingrese puesto">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Sueldo (Inicial)(Final)</td>
                                    <td><input type="text" class="form-control" id="sueldo_ultimo" name="sueldo_ultimo"
                                            placeholder="Ingrese sueldo">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Motivos de su separación</td>
                                    <td><input type="text" class="form-control" id="motivos_ultimo"
                                            name="motivos_ultimo" placeholder="Ingrese motivos"></td>
                                </tr>
                                <tr>
                                    <td>Nombre de su jefe inmediato</td>
                                    <td><input type="text" class="form-control" id="jefe_ultimo" name="jefe_ultimo"
                                            placeholder="Ingrese nombre del jefe"></td>
                                </tr>
                                <tr>
                                    <td>Actividades desempeñadas</td>
                                    <td><input type="text" class="form-control" id="actividades_actual"
                                            name="actividades_actual" placeholder="Ingrese actividades"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
                <button class="btn btn-primary" type="submit" name="btnRegistrarNuevaPersona"
                    id="btnRegistrarNuevaPersona">Registrar Nueva Persona</button>
                <?php
                $PersonaController = new PersonaController();
                $PersonaController->agregarPersona();
                ?>
            </form>
        </div>
    </div>
    <script>
        function mostrarCuadroTexto() {
            document.getElementById("cuadroTexto").style.display = "block";
        }

        function ocultarCuadroTexto() {
            document.getElementById("cuadroTexto").style.display = "none";
        }

        function mostrarCuadroTextoLicencia() {
            document.getElementById("cuadroTextoLicencia").style.display = "block";
        }

        function ocultarCuadroTextoLicencia() {
            document.getElementById("cuadroTextoLicencia").style.display = "none";
        }

        /*function agregarFila() {
            // Obtener la referencia de la tabla
            var table = document.getElementById("tabla"); // Reemplaza "tuTabla" con el ID de tu tabla

            // Crear una nueva fila
            var newRow = table.insertRow(table.rows.length - 1);

            // Insertar celdas en la fila
            var cell1 = newRow.insertCell(0);
            var cell2 = newRow.insertCell(1);
            var cell3 = newRow.insertCell(2);

            // Configurar el contenido de las celdas
            cell1.innerHTML = '<label class="form-label">Nombre y edades de los hijos</label>';
            cell2.colSpan = 3;
            cell2.innerHTML = '<label class="form-label">Nombre (s)</label><div class="form-group"><input type="text" class="form-control" /></div>';
            cell3.innerHTML = '<label class="form-label">Edad:</label><div class="form-group"><select class="form-control" id="exampleFormControlSelect1"><option value="">Seleccione.....</option><option value="18">18 años</option><option value="19">19 años</option><option value="20">20 años</option><option value="21">21 años</option><option value="22">22 años</option><option value="23">23 años</option><option value="24">24 años</option><option value="25">25 años</option><option value="26">26 años</option><option value="27">27 años</option><option value="28">28 años</option><option value="29">29 años</option><option value="30">30 años</option><option value="31">31 años</option><option value="32">32 años</option><option value="33">33 años</option><option value="34">34 años</option><option value="35">35 años</option><option value="36">36 años</option><option value="37">37 años</option><option value="38">38 años</option><option value="39">39 años</option><option value="40">40 años</option><option value="41">41 años</option><option value="42">42 años</option><option value="43">43 años</option><option value="44">44 años</option><option value="45">45 años</option><option value="46">46 años</option><option value="47">47 años</option><option value="48">48 años</option><option value="49">49 años</option><option value="50">50 años</option><option value="51">51 años</option><option value="52">52 años</option><option value="53">53 años</option><option value="54">54 años</option><option value="55">55 años</option><option value="56">56 años</option><option value="57">57 años</option><option value="58">58 años</option><option value="59">59 años</option><option value="60">60 años</option></select></div>';
        }*/

    </script>
</div>