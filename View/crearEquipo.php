<!-- Vista crear equipos -->
<div class="upside">
    <a href="?c=detalleAllEquipo" class="Inicio">« Regresar </a>
</div>
<div class="card" id="ListaCompleta">
    <div class="card-title">
        <h2> CREAR NUEVO EQUIPO </h2>
    </div>
    <form method="POST" action="?c=crearEquipo" class='formulario'>        
        <div class="form-group" align="center" >
            <div class="col-md-12 col-xl-12 col-sm-12" >
                <label for="idEquipo" class='label_form'>ID del Equipo: </label>
                <input type="text" class="col-sm-2 col-form-label" id="input_form" name="idEquipo" placeholder="ID de Equipo" required>
            </div>                
            <div class="dropdown-divider" id="dropdown-divider-form"></div>
            <div class="col-md-12 col-xl-12 col-sm-12" >
                <label for="idTipoEquipo" class='label_form'>Tipo:  </label>
                <select class="col-sm-2 col-form-label" name="idTipoEquipo" id="input_form" required>
                <?php foreach ($allTipoEquipo as $value) { ?>
                    <option value="<?php echo $value->idTipoEquipo; ?>"><?php echo $value->nombreTipoEquipo; ?></option>
                <?php } ?>
                </select>
            </div>
            <div class="dropdown-divider" id="dropdown-divider-form"></div>
            <div class="col-md-12 col-xl-12 col-sm-12" >
                <label for="idCondicionActual" class='label_form'>Condición actual:  </label>
                <select class="col-sm-2 col-form-label" name="idCondicionActual" id="input_form" required>
                <?php foreach ($allCondicionActual as $value) { ?>
                    <option value="<?php echo $value->idCondicionActual; ?>"><?php echo $value->descripcionCondicionActual; ?></option>
                <?php } ?>
                </select>
            </div>
            <div class="dropdown-divider" id="dropdown-divider-form"></div>
            <div class="col-md-12 col-xl-12 col-sm-12" >
                <label for="idEstadoInventario" class='label_form'>Estado en inventario:  </label>
                <select class="col-sm-2 col-form-label" name="idEstadoInventario" id="input_form" required>
                <?php foreach ($allEstadoInventario as $value) { ?>
                    <option value="<?php echo $value->idEstadoInventario; ?>"><?php echo $value->descripcionEstadoInventario; ?></option>
                <?php } ?>
                </select>
            </div>
            <div class="dropdown-divider" id="dropdown-divider-form"></div>
            <div class="col-md-12 col-xl-12 col-sm-12" >
                <label for="fechaInclusion" class='label_form'>Fecha de inclusión: </label>
                <input type="date" class="col-sm-2 col-form-label" name="fechaInclusion" required>
            </div>            
            <div class="dropdown-divider" id="dropdown-divider-form"></div>
        </div>     
        <div class="form-button" align="center" style="margin-bottom: 5rem;">
            <button type="submit" class="btn btn-primary boton-form" id="submit-button">Agregar</button>
        </div>
    </form>
</div>