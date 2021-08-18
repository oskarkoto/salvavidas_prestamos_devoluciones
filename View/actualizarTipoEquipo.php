<!-- Vista actualizar tipos de equipo -->
<div class="upside">
    <a href="?c=detalleAllTipoEquipo" class="Inicio">« Regresar </a>
</div>
<div class="card" id="ListaCompleta">
    <div class="card-title">
        <h2> ACTUALIZAR TIPO DE EQUIPO </h2>
    </div>
    <form method="POST" action="?c=actualizarTipoEquipo" class='formulario'>        
        <?php foreach ($selectTipoEquipo as $value) { ?>
            <div class="form-group" align="center" >
                <div class="col-md-12 col-xl-12 col-sm-12" style="margin-left: 5.5rem">
                    <label for="idTipoEquipo" class='label_form'>ID del Tipo de Equipo: </label>
                    <input type="text" class="col-sm-2 col-form-label" id="input_form" name="idTipoEquipo" value="<?php echo $value->idTipoEquipo; ?>" style="background-color:#f8f8f8; border-color: #d0d0d0" readonly>
                    <strong>(No es posible cambiar)</strong>
                </div>                
                <div class="dropdown-divider" id="dropdown-divider-form"></div>
                <div class="col-md-12 col-xl-12 col-sm-12" >
                    <label for="nombreTipoEquipo" class='label_form'>Nombre del Equipo: </label>
                    <input type="text" class="col-sm-2 col-form-label" id="input_form" name="nombreTipoEquipo" value="<?php echo $value->nombreTipoEquipo; ?>" required>
                </div>                
                <div class="dropdown-divider" id="dropdown-divider-form"></div>
                <div class="col-md-12 col-xl-12 col-sm-12" >
                    <label for="descripcionTipoEquipo" class='label_form'>Descripción del Equipo: </label>
                    <textarea class="col-form-label" style="resize:none" name="descripcionTipoEquipo" id="input_form" rows="2" cols="31" required><?php echo $value->descripcionTipoEquipo; ?></textarea>
                </div>                
                <div class="dropdown-divider" id="dropdown-divider-form"></div>
                <div class="col-md-12 col-xl-12 col-sm-12" >
                    <label for="marcaTipoEquipo" class='label_form'>Marca del Equipo: </label>
                    <input type="text" class="col-sm-2 col-form-label" id="input_form" name="marcaTipoEquipo" value="<?php echo $value->marcaTipoEquipo; ?>" required>
                </div>                
                <div class="dropdown-divider" id="dropdown-divider-form"></div>
                <div class="col-md-12 col-xl-12 col-sm-12" >
                    <label for="existenciaMinima" class='label_form'>Existencia mínima en Stock: </label>
                    <input type="number" class="col-sm-2 col-form-label" id="input_form" name="existenciaMinima" value="<?php echo $value->existenciaMinima; ?>" required>
                </div>          
                <div class="dropdown-divider" id="dropdown-divider-form"></div>
            </div>     
            <div class="form-button" align="center" style="margin-bottom: 5rem;">
                <button type="submit" class="btn btn-primary boton-form" id="submit-button">Actualizar</button>
            </div>
    </form>
    <?php } ?>
</div>