<!-- Vista de actualizar de Unidades de Suministro -->
<div class="upside">
    <a href="index.php" class="Inicio">« Inicio</a>
</div>
<div class="card" id="ListaCompleta">
    <div class="card-title">
        <h2> ACTUALIZAR UNIDADES DE SUMINISTRO </h2>
    </div>
    <form method="POST" action="?c=actualizarUnidadesSuministro" class='formulario'>        
        <?php foreach ($selectUnidadesSum as $value) { ?>
            <div class="form-group" align="center" >
            <div class="col-md-12 col-xl-12 col-sm-12" style="margin-left: 5.5rem">
                <label for="idUnidades" class='label_form'>ID de Unidad: </label>
                <input type="text" class="col-sm-2 col-form-label" id="input_form" name="idUnidades" value="<?php echo $value->idUnidades; ?>" style="background-color:#f8f8f8; border-color: #d0d0d0" readonly>
            <strong>(No es posible cambiar)</strong>
        </div>                
        <div class="dropdown-divider" id="dropdown-divider-form"></div>
        <div class="col-md-12 col-xl-12 col-sm-12" >
                <label for="cantidad" class='label_form'>Cantidad: </label>
                <input type="number" class="col-sm-2 col-form-label" id="input_form" name="cantidad" value="<?php echo $value->cantidad; ?>" required>
        </div>                
        <div class="dropdown-divider" id="dropdown-divider-form"></div>
            </div>     
            <div class="form-button" align="center" style="margin-bottom: 5rem;">
                <button type="submit" class="btn btn-primary boton-form" id="submit-button">Actualizar</button>
            </div>
    </form>
    <?php } ?>
</div>

