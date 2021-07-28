<!-- Vista crear reportes-->
<div class="upside">
    <a href="?c=detalleAllReporte" class="Inicio">« Regresar </a>
</div>
<div class="card" id="ListaCompleta">
    <div class="card-title">
        <h2> CREAR NUEVO REPORTE</h2>
    </div>
    <form method="POST" action="?c=crearReporte" class='formulario'>        
        <div class="form-group" align="center" >
            <div class="col-md-12 col-xl-12 col-sm-12" >
                <label for="tituloReporte" class='label_form'>Título del Reporte: </label>
                <input type="text" class="col-sm-2 col-form-label" id="input_form" name="tituloReporte" placeholder="Título" required>
            </div>                
            <div class="dropdown-divider" id="dropdown-divider-form"></div>
            <div class="col-md-12 col-xl-12 col-sm-12" >
                <label for="idTipoReporte" class='label_form'>Tipo:  </label>
                <select class="col-sm-2 col-form-label" name="idTipoReporte" id="input_form" required>
                <?php foreach ($allTipoReporte as $value) { ?>
                    <option value="<?php echo $value->idTipoReporte; ?>"><?php echo $value->nombreTipoReporte; ?></option>
                <?php } ?>
                </select>
            </div>
            <div class="dropdown-divider" id="dropdown-divider-form"></div>
            <div class="col-md-12 col-xl-12 col-sm-12" >
                <label for="fechaReporte" class='label_form'>Fecha: </label>
                <input type="date" class="col-sm-2 col-form-label" name="fechaReporte" required>
            </div>            
            <div class="dropdown-divider" id="dropdown-divider-form"></div>
        </div>
        <div class="form-button" align="center" >
            <button type="submit" class="btn btn-primary boton-form" id="submit-button">Agregar</button>
        </div>
    </form>
</div>