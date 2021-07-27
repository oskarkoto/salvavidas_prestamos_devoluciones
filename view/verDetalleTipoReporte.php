<!-- Vista de Detalle de Tipo de Reporte -->
<div class="upside">
    <a href="index.php" class="Inicio">« Inicio</a>
</div>
<div class="card" id="ListaCompleta">
    <div class="card-title">
        <h2> DETALLES DE TIPO DE REPORTE </h2>
    </div>
    <?php
        foreach ($selectTipoReporte as $value) {    ?>
    <div class="card-body">      
        <p class="card-subtitle mb-2" id="card-subtitle">
            <strong>ID: </strong> <?php echo $value->idTipoReporte; ?></p>
                <div class="dropdown-divider"></div>
        <p class="card-subtitle mb-2" id="card-subtitle">
            <strong>Nombre: </strong> <?php echo $value->nombreTipoReporte; ?></p>
                    <div class="dropdown-divider"></div>
        <p class="card-subtitle mb-2" id="card-subtitle">
            <strong> Detalle: </strong><?php echo $value->detalleTipoReporte; ?></p>
                <div class="dropdown-divider"></div>    
        <p class="card-subtitle mb-2" id="card-subtitle">
            <strong>Query: </strong> <?php echo $value->queryTipoReporte; ?></p>
                <div class="dropdown-divider"></div>
    </div>    
    <div class="card-dfooter">        
        <a href="?c=eliminarTipoReporte&idTipoReporte=<?php echo $value->idTipoReporte; ?>" class="card-link">Eliminar</a>
        <a href="?c=detalleAllTipoReporte" class="card-link">Volver</a>
    </div>
    <?php   }  ?>
</div>