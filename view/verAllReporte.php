<?php if ($msg != NULL){ ?>
    <div class="alert alert-info" role="alert">
        <h6 id = "alerta"><?php echo $msg; ?> </h6>
    </div>
<?php   }  ?>
<!-- Vista de todos los reportes -->
<div class="upside">
    <a href="index.php" class="Inicio">« Inicio</a>
</div>
<div class="card" id="ListaCompleta">
    <div class="card-title">
        <h2> REPORTES</h2>
    </div>
    <div class="card-subtitle" id="Add">
        <label for="search">Buscar: </label>
        <select class="form-select-sm" name="forma" onchange="location = this.value;">
            <option value="?c=detalleAllReporte"selected>Reporte</option>
            <option value="?c=detalleAllTipoReporte">Tipo Reporte</option>
        </select>
        <!-- Icono filtro -->
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-funnel-fill" viewBox="0 0 16 16">
        <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2z"/>
        </svg>
        <a href="?c=crearReporte" class="add">
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
                <th scope="col">Título</th>
                <th scope="col">Tipo de Reporte</th>
                <th scope="col">Fecha</th>
            </tr>
        </thead>
        <tbody>
        <?php
        foreach ($allReporte as $value) {    
        ?>
            <tr>
                <td><?php echo $value->idReporte; ?></td>
                <td><?php echo $value->tituloReporte; ?></td>
                <?php foreach ($allTipoReporte as $tiporeporte) { if ($value->idTipoReporte  == $tiporeporte->idTipoReporte) {?>
                <td><?php echo $tiporeporte->nombreTipoReporte; ?></td>
                <?php } }  ?>
                <td><?php echo $value->fechaReporte; ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>