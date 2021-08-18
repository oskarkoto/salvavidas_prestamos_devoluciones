<!-- Vista actualizar tipos de suministro -->
<div class="upside">
    <a href="?c=detalleAllTipoSuministro" class="Inicio">« Regresar </a>
</div>
<div class="card" id="ListaCompleta">
    <div class="card-title">
        <h2> ACTUALIZAR TIPO DE SUMINISTRO </h2>
    </div>
    <form method="POST" action="?c=actualizarTipoSuministro" class='formulario'>        
        <?php foreach ($selectTipoSuministro as $value) { ?>
            <div class="form-group" align="center" >
                <div class="col-md-12 col-xl-12 col-sm-12" style="margin-left: 5.5rem">
                    <label for="idTipoSuministro" class='label_form'>ID del Tipo de Suministro: </label>
                    <input type="text" class="col-sm-2 col-form-label" id="input_form" name="idTipoSuministro" value="<?php echo $value->idTipoSuministro; ?>" style="background-color:#f8f8f8; border-color: #d0d0d0" readonly>
                    <strong>(No es posible cambiar)</strong>
                </div>                
                <div class="dropdown-divider" id="dropdown-divider-form"></div>
                <div class="col-md-12 col-xl-12 col-sm-12" >
                    <label for="nombreTipoSuministro" class='label_form'>Nombre del Suministro: </label>
                    <input type="text" class="col-sm-2 col-form-label" id="input_form" name="nombreTipoSuministro" value="<?php echo $value->nombreTipoSuministro; ?>" required>
                </div>                
                <div class="dropdown-divider" id="dropdown-divider-form"></div>
                <div class="col-md-12 col-xl-12 col-sm-12" >
                    <label for="descripcionTipoSuministro" class='label_form'>Descripción del Suministro: </label>
                    <textarea class="col-form-label" style="resize:none" name="descripcionTipoSuministro" id="input_form" rows="2" cols="31" required><?php echo $value->descripcionTipoSuministro; ?></textarea>
                </div>                
                <div class="dropdown-divider" id="dropdown-divider-form"></div>
                <div class="col-md-12 col-xl-12 col-sm-12">
                    <label for="idCategoria" class='label_form'>Categoría: </label>
                    <select class="col-sm-2 col-form-label" name="idCategoria" id="input_form" required>
                        <?php foreach ($allCategoriaSuministro as $categoria) { if ($categoria->idCategoria == $value->idCategoria){ ?>
                            <option value="<?php echo $categoria->idCategoria;?>" selected><?php echo $categoria->descripcionCategoria;?></option>
                            <?php } else { ?>
                            <option value="<?php echo $categoria->idCategoria;?>" ><?php echo $categoria->descripcionCategoria;?></option>
                        <?php } } ?>
                    </select>
                </div>                
                <div class="dropdown-divider" id="dropdown-divider-form"></div>
                <div class="col-md-12 col-xl-12 col-sm-12">
                    <label for="idUnidades" class='label_form'>Unidades: </label>
                    <select class="col-sm-2 col-form-label" name="idUnidades" id="input_form" required>
                        <?php foreach ($allUnidadesSuministro as $unidades) { if ($unidades->idUnidades == $value->idUnidades){ ?>
                            <option value="<?php echo $unidades->idUnidades;?>" selected><?php echo $unidades->cantidad;?></option>
                            <?php } else { ?>
                            <option value="<?php echo $unidades->idUnidades;?>" ><?php echo $unidades->cantidad;?></option>
                        <?php } } ?>
                    </select>
                </div>                
                <div class="dropdown-divider" id="dropdown-divider-form"></div>
                <div class="col-md-12 col-xl-12 col-sm-12" >
                    <label for="marcaTipoSuministro" class='label_form'>Marca del Suministro: </label>
                    <input type="text" class="col-sm-2 col-form-label" id="input_form" name="marcaTipoSuministro" value="<?php echo $value->marcaTipoSuministro; ?>" required>
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