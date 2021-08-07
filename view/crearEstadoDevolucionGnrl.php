<!-- Vista crear estados de devoluciones generales -->
<div class="upside">
    <a href="?c=detalleAllEstadoDevolucionGnrl" class="Inicio">« Regresar </a>
</div>
<div class="card" id="ListaCompleta">
    <div class="card-title">
        <h2> CREAR NUEVO ESTADO DE DEVOLUCION GENERAL</h2>
    </div>
    <form method="POST" action="?c=crearEstadoDevolucionGnrl" class='formulario'>        
        <div class="form-group" align="center" >
            <div class="col-md-12 col-xl-12 col-sm-12" >
                <label for="idEstadoDevolucionGeneral" class='label_form'>ID de Estado de Devolución General: </label>
                <input type="number" class="col-sm-2 col-form-label" id="input_form" name="idEstadoDevolucionGeneral" placeholder="ID de Estado General" required>
            </div>                
            <div class="dropdown-divider" id="dropdown-divider-form"></div>
            <div class="col-md-12 col-xl-12 col-sm-12" >
                <label for="descripcionEstadoDevolucionGeneral" class='label_form'>Descripción de Estado de Devolución General: </label>
                <input type="text" class="col-sm-2 col-form-label" name="descripcionEstadoDevolucionGeneral" placeholder="Descripción"required>
            </div>
            <div class="dropdown-divider" id="dropdown-divider-form"></div>
        </div>
        <div class="form-button" align="center" >
            <button type="submit" class="btn btn-primary boton-form" id="submit-button">Agregar</button>
        </div>
    </form>
</div>
