<!-- Vista crear devoluciones -->
<div class="upside">
    <a href="?c=detalleAllDevolucion" class="Inicio">« Regresar </a>
</div>
<div class="card" id="ListaCompleta">
    <div class="card-title">
        <h2> CREAR NUEVA DEVOLUCION </h2>
    </div>
    <form method="POST" action="?c=crearDevolucion" class='formulario'>        
        <div class="form-group" align="center" >
            <div class="col-md-12 col-xl-12 col-sm-12" >
                <label for="idDevolucion" class='label_form'>ID de Devolución: </label>
                <input type="number" class="col-sm-2 col-form-label" id="input_form" name="idDevolucion" placeholder="ID de Devolución">
            </div>                
            <div class="dropdown-divider" id="dropdown-divider-form"></div>
            <div class="col-md-12 col-xl-12 col-sm-12" >
                <label for="idPrestamo" class='label_form'>ID de Préstamo:  </label>
                <select class="col-sm-2 col-form-label" name="idPrestamo" id="input_form">
                <?php foreach ($allPrestamo as $value) { ?>
                    <option value="<?php echo $value->idPrestamo; ?>"><?php echo $value->idPrestamo; ?></option>
                <?php } ?>
                </select>
            </div>
            <div class="dropdown-divider" id="dropdown-divider-form"></div>
            <div class="col-md-12 col-xl-12 col-sm-12" >
                <label for="fechaRealDevolucion" class='label_form'>Fecha Real de Devolución: </label>
                <input type="date" class="col-sm-2 col-form-label" name="fechaRealDevolucion">
            </div>
            <div class="dropdown-divider" id="dropdown-divider-form"></div>
            <div class="col-md-12 col-xl-12 col-sm-12" >
                <label for="idEstadoDevolucionGeneral" class='label_form'>Estado de Devolución General:  </label>
                <select class="col-sm-2 col-form-label" name="idEstadoDevolucionGeneral" id="input_form">
                <?php foreach ($allEstadoDevGnrl as $value) { ?>
                    <option value="<?php echo $value->idEstadoDevolucionGeneral; ?>"><?php echo $value->descripcionEstadoDevolucionGeneral; ?></option>
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
