<!-- Vista crear equipos -->
<div class="upside">
    <a href="?c=detalleAllEquipo" class="Inicio">« Regresar </a>
</div>
<div class="card" id="ListaCompleta">
    <div class="card-title">
        <h2> ACTUALIZAR EQUIPO </h2>
    </div>
    <form method="POST" action="?c=actualizarEquipo" class='formulario'>       
        <?php foreach ($selectEquipo as $value) { ?> 
        <div class="form-group" align="center" >
            <div class="col-md-12 col-xl-12 col-sm-12" >
                <label for="idEquipo" class='label_form'>ID del Equipo: </label>
                <input type="text" class="col-sm-2 col-form-label" id="input_form" name="idEquipo" value="<?php echo $value->idEquipo; ?>" style="background-color:#f8f8f8; border-color: #d0d0d0" readonly>
            </div>                
            <div class="dropdown-divider" id="dropdown-divider-form"></div>
            <div class="col-md-12 col-xl-12 col-sm-12" >
                <label for="idTipoEquipo" class='label_form'>Tipo:  </label>
                <select class="col-sm-2 col-form-label" name="idTipoEquipo" id="input_form" required>
                <?php foreach ($allTipoEquipo as $tipo) { ?>
                    <option value="<?php echo $tipo->idTipoEquipo; ?>"><?php echo $tipo->nombreTipoEquipo; ?></option>
                <?php } ?>
                </select>
            </div>
            <div class="dropdown-divider" id="dropdown-divider-form"></div>
            <div class="col-md-12 col-xl-12 col-sm-12" >
                <label for="idCondicionActual" class='label_form'>Condición actual:  </label>
                <select class="col-sm-2 col-form-label" name="idCondicionActual" id="input_form" required>
                <?php foreach ($allCondicionActual as $condicion) { ?>
                    <option value="<?php echo $condicion->idCondicionActual; ?>"><?php echo $condicion->descripcionCondicionActual; ?></option>
                <?php } ?>
                </select>
            </div>
            <div class="dropdown-divider" id="dropdown-divider-form"></div>
            <div class="col-md-12 col-xl-12 col-sm-12" >
                <label for="idEstadoInventario" class='label_form'>Estado en inventario:  </label>
                <select class="col-sm-2 col-form-label" name="idEstadoInventario" id="input_form" required>
                <?php foreach ($allEstadoInventario as $valor) { ?>
                    <option value="<?php echo $valor->idEstadoInventario; ?>" selected><?php echo $valor->descripcionEstadoInventario; ?></option>    
                <?php } ?>
                </select>
            </div>
            <div class="dropdown-divider" id="dropdown-divider-form"></div>
            <div class="col-md-12 col-xl-12 col-sm-12" >
                <label for="fechaInclusion" class='label_form'>Fecha de inclusión: </label>
                <input type="date" class="col-sm-2 col-form-label" name="fechaInclusion" value="<?php echo $value->fechaInclusion; ?>" required>
            </div>            
            <div class="dropdown-divider" id="dropdown-divider-form"></div>
        </div>     
        <div class="form-button" align="center" style="margin-bottom: 5rem;">
            <button type="submit" class="btn btn-primary boton-form" id="submit-button">Agregar Equipo</button>
        </div>
    </form>
    <?php } ?>
</div>