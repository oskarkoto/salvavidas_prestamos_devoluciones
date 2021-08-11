<?php if ($msg != NULL){ ?>
    <div class="alert alert-info" role="alert">
        <h6 id = "alerta"><?php echo $msg; ?> </h6>
    </div>
<?php   }  ?>
<!-- Vista de Detalle de Equipo -->
<div class="upside">
    <a href="index.php" class="Inicio">« Inicio</a>
</div>
<div class="card" id="ListaCompleta">
    <div class="card-title">
        <h2> DETALLES DE EQUIPO </h2>
    </div>
    <?php
        foreach ($selectEquipo as $value) {    ?>
    <div class="card-body">      
        <p class="card-subtitle mb-2" id="card-subtitle">
            <strong>Tipo de Equipo: </strong> 
            <?php foreach ($allTipoEquipo as $tipo) { if ($value->idTipoEquipo == $tipo->idTipoEquipo) {?>
                <?php echo $tipo->nombreTipoEquipo; ?>
            <?php } } ?>
        </p>
                <div class="dropdown-divider"></div>
        <p class="card-subtitle mb-2" id="card-subtitle">
            <strong>Condición actual: </strong>
            <?php foreach ($allCondicionActual as $condicion) { if ($value->idCondicionActual == $condicion->idCondicionActual) { ?>
                <?php echo $condicion->descripcionCondicionActual; ?>
            <?php } } ?>
        </p>
                    <div class="dropdown-divider"></div>
        <p class="card-subtitle mb-2" id="card-subtitle">
            <strong>Estado en inventario: </strong>
            <?php foreach ($allEstadoInventario as $estado) { if ($value->idEstadoInventario == $estado->idEstadoInventario) { ?>
                <td><?php echo $estado->descripcionEstadoInventario; ?></td>
            <?php } } ?>
        </p>
                <div class="dropdown-divider"></div>                    
        <p class="card-subtitle mb-2" id="card-subtitle">
            <strong> Fecha de Inclusión: </strong><?php echo $value->fechaInclusion; ?></p>
                <div class="dropdown-divider"></div>    
    </div>    
    <div class="card-dfooter">        
        <a href="?c=eliminarEquipo&idEquipo=<?php echo $value->idEquipo; ?>" class="card-link">Eliminar</a>
        <a href="?c=actualizarEquipo&idEquipo=<?php echo $value->idEquipo; ?>" class="card-link">Editar</a>
        <a href="?c=detalleAllEquipo" class="card-link">Volver</a>
    </div>
    <?php   }  ?>
</div>