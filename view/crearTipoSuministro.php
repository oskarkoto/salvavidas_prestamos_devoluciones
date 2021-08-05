<!-- Vista crear tipos de suministro -->
<div class="upside">
    <a href="?c=detalleAllTipoSuministro" class="Inicio">« Regresar </a>
</div>
<div class="card" id="ListaCompleta">
    <div class="card-title">
        <h2> CREAR NUEVO TIPO DE SUMINISTRO </h2>
    </div>
    <form method="POST" action="?c=crearTipoSuministro" class='formulario'>        
        <div class="form-group" align="center" >
            <div class="col-md-12 col-xl-12 col-sm-12" >
                <label for="idTipoSuministro" class='label_form'>ID del Tipo de Suministro: </label>
                <input type="text" class="col-sm-2 col-form-label" id="input_form" name="idTipoSuministro" placeholder="ID del Tipo Suministro" required>
            </div>                
            <div class="dropdown-divider" id="dropdown-divider-form"></div>
            <div class="col-md-12 col-xl-12 col-sm-12" >
                <label for="nombreTipoSuministro" class='label_form'>Nombre del Suministro: </label>
                <input type="text" class="col-sm-2 col-form-label" id="input_form" name="nombreTipoSuministro" placeholder="Nombre del Suministro" required>
            </div>                
            <div class="dropdown-divider" id="dropdown-divider-form"></div>
            <div class="col-md-12 col-xl-12 col-sm-12" >
                <label for="descripcionTipoSuministro" class='label_form'>Descripción del Suministro: </label>
                <textarea class="col-form-label" style="resize:none" name="descripcionTipoSuministro" id="input_form" rows="2" cols="31" placeholder="Descripción" required></textarea>
            </div>   
            <div class="dropdown-divider" id="dropdown-divider-form"></div>
            <div class="col-md-12 col-xl-12 col-sm-12" >
                <label for="idCategoria" class='label_form'>Categoría: </label>
                <select class="col-sm-2 col-form-label" name="idCategoria" id="input_form" required>
                    <?php foreach ($allCategoriaSuministro as $categoria) { ?>
                        <option value="<?php echo $categoria->idCategoria;?>"><?php echo $categoria->descripcionCategoria;?></option>
                    <?php } ?>
                </select>
            </div>   
            <div class="dropdown-divider" id="dropdown-divider-form"></div>
            <div class="col-md-12 col-xl-12 col-sm-12" >
                <label for="idUnidades" class='label_form'>Unidades: </label>
                <select class="col-sm-2 col-form-label" name="idUnidades" id="input_form" required>
                    <?php foreach ($allUnidadesSuministro as $unidades) { ?>
                        <option value="<?php echo $unidades->idUnidades;?>"><?php echo $unidades->cantidad;?></option>
                    <?php } ?>
                </select>
            </div>            
            <div class="dropdown-divider" id="dropdown-divider-form"></div>
            <div class="col-md-12 col-xl-12 col-sm-12" >
                <label for="marcaTipoSuministro" class='label_form'>Marca del Suministro: </label>
                <input type="text" class="col-sm-2 col-form-label" id="input_form" name="marcaTipoSuministro" placeholder="Marca del Suministro" required>
            </div>                
            <div class="dropdown-divider" id="dropdown-divider-form"></div>
            <div class="col-md-12 col-xl-12 col-sm-12" >
                <label for="existenciaMinima" class='label_form'>Existencia mínima en Stock: </label>
                <input type="number" class="col-sm-2 col-form-label" id="input_form" name="existenciaMinima" placeholder="1" required>
            </div>          
            <div class="dropdown-divider" id="dropdown-divider-form"></div>
        </div>     
        <div class="form-button" align="center" style="margin-bottom: 5rem;">
            <button type="submit" class="btn btn-primary boton-form" id="submit-button">Agregar Suministro</button>
        </div>
    </form>
</div>