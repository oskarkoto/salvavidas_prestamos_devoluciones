<!-- Vista crear unidades de suministro -->
<div class="upside">
    <a href="?c=detalleAllUnidadesSuministro" class="Inicio">« Regresar </a>
</div>
<div class="card" id="ListaCompleta">
    <div class="card-title">
        <h2> CREAR NUEVA UNIDAD DE SUMINISTRO </h2>
    </div>
    <form method="POST" action="?c=crearUnidadesSuministro" class='formulario'>
        <div class="form-group" align="center" >        
                <div class="col-md-12 col-xl-12 col-sm-12" >
                    <label for="cantidad" class='label_form'>Cantidad: </label>
                    <input type="number" class="col-form-label" id="input_form" name="cantidad" placeholder="1" required>
                    <strong>(Puede ser por unidad, paquetes, conjuntos...)</strong>
                </div>        
                <div class="dropdown-divider" id="dropdown-divider-form"></div>
        </div>    
        <div class="form-button" align="center" style="margin-bottom: 5rem;">
            <button type="submit" class="btn btn-primary boton-form" id="submit-button">Agregar</button>
        </div>
    </form>
</div>