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
        <a href="index.php" class="add">+ Añadir</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Título</th>
                <th scope="col">Tipo de Reporte</th>
                <th scope="col">Fecha</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
        <?php
        foreach ($allReporte as $value) {    
        ?>
            <tr>
                <td><?php echo $value->idReporte; ?></td>
                <td><?php echo $value->tituloReporte; ?></td>
                <td><?php echo $value->idTipoReporte; ?></td>
                <td><?php echo $value->fechaReporte; ?></td>
                <td>Ver</td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>