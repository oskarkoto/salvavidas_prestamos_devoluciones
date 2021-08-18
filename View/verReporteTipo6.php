<?php if ($msg != NULL){ ?>
    <div class="alert alert-info" role="alert">
        <h6 id = "alerta"><?php echo $msg; ?> </h6>
    </div>
<?php } ?>    
<!-- Vista de Reporte Tipo 6 -->
<div class="upside">
    <a href="index.php" class="Inicio">« Inicio</a>
</div>
<div class="card" id="ListaCompleta">
    <div class="card-title">
        <h2> EQUIPOS CON INVENTARIO BAJO </h2>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID del Tipo de Equipo</th>
                <th scope="col">Tipo de Equipo</th>
                <th scope="col">Descripción</th>
                <th scope="col">Marca</th>
                <th scope="col">Existencia Mínima</th>
                <th scope="col">Existencia Actual</th>
            </tr>
        </thead>
        <tbody>
        <?php
        foreach ($resultsReporte as $value) {    
        ?>
            <tr>
                <td ><?php echo $value->idTipoEquipo; ?></td>
                <td><?php echo $value->nombreTipoEquipo; ?></td>
                <td><?php echo $value->descripcionTipoEquipo; ?></td>
                <td><?php echo $value->marcaTipoEquipo; ?></td>
                <td><?php echo $value->existenciaMinima; ?></td>
                <td><?php echo $value->existenciaActual; ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>