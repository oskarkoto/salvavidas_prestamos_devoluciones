<?php if ($msg != NULL){ ?>
    <div class="alert alert-info" role="alert">
        <h6 id = "alerta"><?php echo $msg; ?> </h6>
    </div>
<?php   }  ?>
<!-- Vista de TODOS los Suministros. -->
<div class="upside">
    <a href="index.php" class="Inicio">« Inicio</a>
</div>
<div class="card" id="ListaCompleta">
    <div class="card-title">
        <h2> SUMINISTROS </h2>
    </div>
    <div class="card-subtitle" id="Add">
        <label for="search">Buscar: </label>
        <select name="forma" onchange="location = this.value;">
            <option value="?c=detalleAllSuministro" selected>Suministro</option>
            <option value="?c=detalleAllTipoSuministro">Tipo de Suministro</option>
            <option value="?c=detalleAllUnidadesSuministro">Unidades de Suministro</option>
            <option value="?c=detalleAllEquipo">Equipo</option>
        </select>
        <!-- Icono filtro -->
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-funnel-fill" viewBox="0 0 16 16">
        <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2z"/>
        </svg>
        <a href="?c=crearSuministro" class="add">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
        </svg> Añadir
        </a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tipo</th>
                <th scope="col">Condición</th>
                <th scope="col">Estado</th>
                <th scope="col">Fecha Inclusión</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
        <?php
        foreach ($allSuministro as $value) {    
        ?>
            <tr>
                <td><?php echo $value->idSuministro; ?></td>
                <?php foreach ($allTipoSuministro as $valor1) {  
                    if ($value->idTipoSuministro == $valor1->idTipoSuministro) { ?>
                    <td><?php echo $valor1->nombreTipoSuministro; ?></td>
                <?php } } ?>
                <?php foreach ($allCondicionActual as $valor2) {  
                    if ($value->idCondicionActual == $valor2->idCondicionActual) { ?>
                    <td><?php echo $valor2->descripcionCondicionActual; ?></td>
                <?php } } ?>
                <?php foreach ($allEstadoInventario as $valor3) {  
                    if ($value->idEstadoInventario == $valor3->idEstadoInventario) { ?>
                    <td><?php echo $valor3->descripcionEstadoInventario; ?></td>
                <?php } } ?>
                <td><?php echo $value->fechaInclusion; ?></td>
                <td>
                <a class="ver" id="ver" href="?c=detalleSuministro&idSuministro=<?php echo $value->idSuministro; ?>">
                <!-- Icono Ver -->
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-text" viewBox="0 0 16 16">
                <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                <path d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
                </svg> Ver
                </a>
                <br>
                <a class="editar" id="editar" href="?c=actualizarSuministro&idSuministro=<?php echo $value->idSuministro; ?>">
                <!-- Icono Actualizar -->
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                </svg> Editar
                </a>
                <br>
                <a class="eliminar" id="eliminar" href="?c=eliminarSuministro&idSuministro=<?php echo $value->idSuministro; ?>">
                <!-- Icono Eliminar -->
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                </svg> Eliminar
                </a>  
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>