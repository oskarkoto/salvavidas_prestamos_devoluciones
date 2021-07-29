<!-- Vista actualizar estados de devoluciones generales -->
<div class="upside">
    <a href="?c=detalleAllEstadoDevolucionGnrl" class="Inicio">« Regresar </a>
</div>
<div class="card" id="ListaCompleta">
    <div class="card-title">
        <h2> ACTUALIZAR ESTADO DE DEVOLUCION GENERAL </h2>
    </div>
    <form method="POST" action="?c=actualizarEstadoDevolucionGnrl" class='formulario'>     
    <?php 
            foreach ($selectEstadoDevolucionGeneral as $value) { 
                ?>      
        <div class="form-group" align="center" >
            <div class="col-md-12 col-xl-12 col-sm-12" >
                <label for="idEstadoDevolucionGeneral" class='label_form'>ID de Estado de Devolución General: </label>
                <input type="number" class="col-sm-2 col-form-label" id="input_form" name="idEstadoDevolucionGeneral" value="<?php echo $value->idEstadoDevolucionGeneral; ?>"  required>
            </div>                
            <div class="dropdown-divider" id="dropdown-divider-form"></div>
            <div class="col-md-12 col-xl-12 col-sm-12" >
                <label for="descripcionEstadoDevolucionGeneral" class='label_form'>Descripción: </label>
                <input type="text" class="col-sm-2 col-form-label" name="descripcionEstadoDevolucionGeneral" value="<?php echo $value->descripcionEstadoDevolucionGeneral; ?>" required>
            </div>
            <div class="dropdown-divider" id="dropdown-divider-form"></div>
        </div>
        <div class="form-button" align="center" >
            <button type="submit" class="btn btn-primary boton-form" id="submit-button">Actualizar</button>
            <a class="cancelar" id="cancelar" href="?c=detalleEstadoDevolucionGnrl&idEstadoDevolucionGeneral=<?php echo $value->idEstadoDevolucionGeneral; ?>">Cancelar</a>
        </div>
    </form>
    <?php } ?>
</div>