<!-- Vista crear prestamos de suministro-->
<div class="upside">
    <a href="?c=detalleAllPrestamoSuministro" class="Inicio">« Regresar </a>
</div>
<div class="card" id="ListaCompleta">
    <div class="card-title">
        <h2> CREAR NUEVO PRESTAMO DE SUMINISTRO</h2>
    </div>
    <form method="POST" action="?c=crearPrestamoSuministro" class='formulario'>        
        <div class="form-group" align="center" >
            <div class="col-md-12 col-xl-12 col-sm-12" >
                <label for="idPrestamoSuministro" class='label_form'>ID de Préstamo de Suministro: </label>
                <input type="number" class="col-sm-2 col-form-label" id="input_form" name="idPrestamoSuministro" placeholder="ID P. de Suministro" required>
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
                <label for="idSuministro" class='label_form'>Suministro:  </label>
                <select class="col-sm-2 col-form-label" name="idSuministro" id="input_form" required>
                <?php foreach ($allSuministro as $suministro) {  foreach($allTipoSuministro as $tipo) { if ($suministro->idTipoSuministro == $tipo->idTipoSuministro) { ?>
                    <option value="<?php echo $suministro->idSuministro; ?>"><?php echo $tipo->nombreTipoSuministro; ?></option>
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
            </div>            <div class="dropdown-divider" id="dropdown-divider-form"></div>
        </div>
        <div class="form-button" align="center" >
            <button type="submit" class="btn btn-primary boton-form" id="submit-button">Agregar Préstamo de Suministro</button>
        </div>
    </form>
</div>