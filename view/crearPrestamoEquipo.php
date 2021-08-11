<!-- Vista crear prestamos de equipo-->
<div class="upside">
    <a href="?c=detalleAllPrestamoEquipo" class="Inicio">« Regresar </a>
</div>
<div class="card" id="ListaCompleta">
    <div class="card-title">
        <h2> CREAR NUEVO PRESTAMO DE EQUIPO</h2>
    </div>
    <form method="POST" action="?c=crearPrestamoEquipo" class='formulario'>        
        <div class="form-group" align="center" >
            <div class="col-md-12 col-xl-12 col-sm-12" >
                <label for="idPrestamoEquipo" class='label_form'>ID de Préstamo de Equipo: </label>
                <input type="number" class="col-sm-2 col-form-label" id="input_form" name="idPrestamoEquipo" placeholder="ID P. de Equipo" required>
            </div>                
            <div class="dropdown-divider" id="dropdown-divider-form"></div>
            <div class="col-md-12 col-xl-12 col-sm-12" >
                <label for="idPrestamo" class='label_form'>ID del Préstamo:  </label>
                <select class="col-sm-2 col-form-label" name="idPrestamo" id="input_form" required>
                <?php foreach ($allPrestamo as $value) { ?>
                    <option value="<?php echo $value->idPrestamo; ?>"><?php echo $value->idPrestamo; ?></option>
                <?php } ?>
                </select>
            </div>
            <div class="dropdown-divider" id="dropdown-divider-form"></div>
            <div class="col-md-12 col-xl-12 col-sm-12" >
                <label for="idEquipo" class='label_form'>Equipo:  </label>
                <select class="col-sm-2 col-form-label" name="idEquipo" id="input_form" required>
                    <?php foreach ($allEquipo as $equipo) { foreach($allTipoEquipo as $tipo) { if ($equipo->idTipoEquipo == $tipo->idTipoEquipo && $equipo->idEstadoInventario == 1) { ?>
                        <option value="<?php echo $equipo->idEquipo; ?>"> <?php echo $tipo->nombreTipoEquipo; ?></option>
                    <?php } } } ?>
                </select>
            </div>
            <div class="dropdown-divider" id="dropdown-divider-form"></div>
            <div class="col-md-12 col-xl-12 col-sm-12" >
                <label for="idEstadoDevolucion" class='label_form'>Estado de Devolución:  </label>
                <select class="col-sm-2 col-form-label" name="idEstadoDevolucion" id="input_form" required>
                <?php foreach ($allEstadoDevolucion as $value) { ?>
                    <option value="<?php echo $value->idEstadoDevolucion; ?>"><?php echo $value->descripcionEstadoDevolucion; ?></option>
                <?php } ?>
                </select>
            </div>            
            <div class="dropdown-divider" id="dropdown-divider-form"></div>
        </div>
        <div class="form-button" align="center" >
            <button type="submit" class="btn btn-primary boton-form" id="submit-button">Agregar</button>
        </div>
    </form>
</div>