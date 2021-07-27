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
            <strong> ID del Suministro: </strong><?php echo $value->idSuministro; ?></p>
                <div class="dropdown-divider"></div>    
        <p class="card-subtitle mb-2" id="card-subtitle">
            <strong>Estado de devolución: </strong> <?php echo $value->idEstadoDevolucion; ?></p>
                <div class="dropdown-divider"></div>
    </div>    
    <div class="card-dfooter">
        <a href="?c=eliminarPrestamoEquipo&idPrestamoSuministro=<?php echo $value->idPrestamoSuministro; ?>" class="card-link">Eliminar</a>
        <a href="?c=detalleAllPrestamoSuministro" class="card-link">Volver</a>   
    </div>
    <?php   }  ?>
</div>