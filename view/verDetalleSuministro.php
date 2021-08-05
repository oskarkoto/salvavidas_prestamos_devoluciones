<!-- Vista de Detalle de Suministro -->
<div class="upside">
    <a href="index.php" class="Inicio">« Inicio</a>
</div>
<div class="card" id="ListaCompleta">
    <div class="card-title">
        <h2> DETALLES DE SUMINISTRO </h2>
    </div>
    <?php
        foreach ($selectSuministro as $value) {    ?>
    <div class="card-body">      
        <p class="card-subtitle mb-2" id="card-subtitle">
            <strong>Tipo de Suministro: </strong> <?php echo $value->idSuministro; ?></p>
                <div class="dropdown-divider"></div>
        <p class="card-subtitle mb-2" id="card-subtitle">
            <strong>Condición actual: </strong> <?php echo $value->idTipoSuministro; ?></p>
                    <div class="dropdown-divider"></div>        
        <p class="card-subtitle mb-2" id="card-subtitle">
            <strong>Condición actual: </strong> <?php echo $value->idCondicionActual; ?></p>
                    <div class="dropdown-divider"></div>
        <p class="card-subtitle mb-2" id="card-subtitle">
            <strong>Estado en inventario: </strong> <?php echo $value->idEstadoInventario; ?></p>
                <div class="dropdown-divider"></div>                    
        <p class="card-subtitle mb-2" id="card-subtitle">
            <strong> Fecha de Inclusión: </strong><?php echo $value->fechaInclusion; ?></p>
                <div class="dropdown-divider"></div>    
    </div>    
    <div class="card-dfooter">        
        <a href="?c=eliminarSuministro&idSuministro=<?php echo $value->idSuministro; ?>" class="card-link">Eliminar</a>
        <a href="?c=detalleAllSuministro" class="card-link">Volver</a>
    </div>
    <?php   }  ?>
</div>