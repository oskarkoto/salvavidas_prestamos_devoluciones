<!-- Vista crear estados de devoluciones -->
<div class="upside">
    <a href="?c=detalleAllEstadoDevolucion" class="Inicio">« Regresar </a>
</div>
<div class="card" id="ListaCompleta">
    <div class="card-title">
        <h2> CREAR NUEVO ESTADO DE DEVOLUCION </h2>
    </div>
    <form method="POST" action="?c=crearEstadoDevolucion" class='formulario'>        
        <div class="form-group" align="center" >
            <div class="col-md-12 col-xl-12 col-sm-12" >
                <label for="idEstadoDevolucion" class='label_form'>ID de Estado de Devolución: </label>
                <input type="number" class="col-sm-2 col-form-label" id="input_form" name="idEstadoDevolucion" placeholder="ID de Estado de Devolución" required>
            </div>                
            <div class="dropdown-divider" id="dropdown-divider-form"></div>
            <div class="col-md-12 col-xl-12 col-sm-12" >
                <label for="descripcionEstadoDevolucion" class='label_form'>Descripción de Estado de Devolución: </label>
                <input type="text" class="col-sm-2 col-form-label" name="descripcionEstadoDevolucion" placeholder="Descripción"required>
            </div>
            <div class="dropdown-divider" id="dropdown-divider-form"></div>
        </div>
        <div class="form-button" align="center" >
            <button type="submit" class="btn btn-primary boton-form" id="submit-button">Agregar</button>
        </div>
    </form>
</div>