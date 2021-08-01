<!-- Vista crear tipos de equipo -->
<div class="upside">
    <a href="?c=detalleAllTipoEquipo" class="Inicio">« Regresar </a>
</div>
<div class="card" id="ListaCompleta">
    <div class="card-title">
        <h2> CREAR NUEVO TIPO DE EQUIPO </h2>
    </div>
    <form method="POST" action="?c=crearTipoEquipo" class='formulario'>        
        <div class="form-group" align="center" >
            <div class="col-md-12 col-xl-12 col-sm-12" >
                <label for="idTipoEquipo" class='label_form'>ID del Tipo de Equipo: </label>
                <input type="text" class="col-sm-2 col-form-label" id="input_form" name="idTipoEquipo" placeholder="ID del Tipo Equipo" required>
            </div>                
            <div class="dropdown-divider" id="dropdown-divider-form"></div>
            <div class="col-md-12 col-xl-12 col-sm-12" >
                <label for="nombreTipoEquipo" class='label_form'>Nombre del Equipo: </label>
                <input type="text" class="col-sm-2 col-form-label" id="input_form" name="nombreTipoEquipo" placeholder="Nombre del Equipo" required>
            </div>                
            <div class="dropdown-divider" id="dropdown-divider-form"></div>
            <div class="col-md-12 col-xl-12 col-sm-12" >
                <label for="descripcionTipoEquipo" class='label_form'>Descripción del Equipo: </label>
                <textarea class="col-form-label" style="resize:none" name="descripcionTipoEquipo" id="input_form" rows="2" cols="31" placeholder="Descripción" required></textarea>
            </div>                
            <div class="dropdown-divider" id="dropdown-divider-form"></div>
            <div class="col-md-12 col-xl-12 col-sm-12" >
                <label for="marcaTipoEquipo" class='label_form'>Marca del Equipo: </label>
                <input type="text" class="col-sm-2 col-form-label" id="input_form" name="marcaTipoEquipo" placeholder="Marca del Equipo" required>
            </div>                
            <div class="dropdown-divider" id="dropdown-divider-form"></div>
            <div class="col-md-12 col-xl-12 col-sm-12" >
                <label for="existenciaMinima" class='label_form'>Existencia mínima en Stock: </label>
                <input type="number" class="col-sm-2 col-form-label" id="input_form" name="existenciaMinima" placeholder="1" required>
            </div>          
            <div class="dropdown-divider" id="dropdown-divider-form"></div>
        </div>     
        <div class="form-button" align="center" style="margin-bottom: 5rem;">
            <button type="submit" class="btn btn-primary boton-form" id="submit-button">Agregar Equipo</button>
        </div>
    </form>
</div>