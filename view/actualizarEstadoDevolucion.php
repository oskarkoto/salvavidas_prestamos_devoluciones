<!-- Vista actualizar estados de devoluciones -->
<div class="upside">
    <a href="?c=detalleAllEstadoDevolucion" class="Inicio">« Regresar </a>
</div>
<div class="card" id="ListaCompleta">
    <div class="card-title">
        <h2> ACTUALIZAR ESTADO DE DEVOLUCION </h2>
    </div>
    <form method="POST" action="?c=actualizarEstadoDevolucion" class='formulario'>     
    <?php 
        foreach ($selectEstadoDevolucion as $value) { 
        ?>      
        <div class="form-group" align="center" >
            <div class="col-md-12 col-xl-12 col-sm-12" >
                <label for="idEstadoDevolucion" class='label_form'>ID de Estado de Devolución: </label>
                <input type="number" class="col-sm-2 col-form-label" id="input_form" name="idEstadoDevolucion" value="<?php echo $value->idEstadoDevolucion; ?>" readonly>
            </div>                
            <div class="dropdown-divider" id="dropdown-divider-form"></div>
            <div class="col-md-12 col-xl-12 col-sm-12" >
                <label for="descripcionEstadoDevolucion" class='label_form'>Descripción: </label>
                <input type="text" class="col-sm-2 col-form-label" name="descripcionEstadoDevolucion" value="<?php echo $value->descripcionEstadoDevolucion; ?>" required>
            </div>
            <div class="dropdown-divider" id="dropdown-divider-form"></div>
        </div>
        <div class="form-button" align="center" >
            <button type="submit" class="btn btn-primary boton-form" id="submit-button">Actualizar</button>
            <a class="cancelar" id="cancelar" href="?c=detalleEstadoDevolucion&idEstadoDevolucion=<?php echo $value->idEstadoDevolucion; ?>">Cancelar</a>
        </div>
    </form>
    <?php } ?>
</div>