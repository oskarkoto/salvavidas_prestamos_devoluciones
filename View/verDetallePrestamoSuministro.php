<?php if ($msg != NULL){ ?>
    <div class="alert alert-info" role="alert">
        <h6 id = "alerta"><?php echo $msg; ?> </h6>
    </div>
<?php   }  ?>
<!-- Vista de Detalle de Prestamo de Suministros -->
<div class="upside">
    <a href="index.php" class="Inicio">« Inicio</a>
</div>
<div class="card" id="ListaCompleta">
    <div class="card-title">
        <h2> DETALLES DE PRESTAMO DE SUMINISTRO</h2>
    </div>
    <?php
        foreach ($selectPrestamoSuministro as $value) {    ?>
    <div class="card-body">      
        <p class="card-subtitle mb-2" id="card-subtitle">
            <strong>ID: </strong> <?php echo $value->idPrestamoSuministro; ?></p>
                <div class="dropdown-divider"></div>
        <p class="card-subtitle mb-2" id="card-subtitle">
            <strong>ID del Préstamo: </strong> <?php echo $value->idPrestamo; ?></p>
                    <div class="dropdown-divider"></div>
        <p class="card-subtitle mb-2" id="card-subtitle">
            <strong> Suministro: </strong>
            <?php foreach ($allSuministro as $suministro) {  foreach($allTipoSuministro as $tipo) { if ($value->idSuministro == $suministro->idSuministro && $suministro->idTipoSuministro == $tipo->idTipoSuministro) { ?>
                <td scope="row"><?php echo $tipo->nombreTipoSuministro; ?></td>
            <?php } } } ?>
        </p>
                <div class="dropdown-divider"></div>    
        <p class="card-subtitle mb-2" id="card-subtitle">
            <strong>Estado de devolución: </strong> 
            <?php foreach ($allEstadoDevolucion as $estado) { if ($value->idEstadoDevolucion  == $estado->idEstadoDevolucion) {?>
                <?php echo $estado->descripcionEstadoDevolucion; ?>
            <?php } } ?>
        </p>
                <div class="dropdown-divider"></div>
    </div>    
    <div class="card-dfooter">
        <a href="?c=eliminarPrestamoEquipo&idPrestamoSuministro=<?php echo $value->idPrestamoSuministro; ?>" class="card-link">Eliminar</a>
        <a href="?c=detalleAllPrestamoSuministro" class="card-link">Volver</a>   
    </div>
    <?php   }  ?>
</div>