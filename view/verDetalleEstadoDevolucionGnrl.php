<!-- Vista de Detalle de Estado de Devolución General -->
<div class="upside">
    <a href="index.php" class="Inicio">« Inicio</a>
</div>
<div class="card" id="ListaCompleta">
    <div class="card-title">
        <h2> DETALLE DE ESTADO DE DEVOLUCION GENERAL</h2>
    </div>
    <?php
        foreach ($selectEstadoDevolucionGeneral as $value) {    ?>
    <div class="card-body">      
        <p class="card-subtitle mb-2" id="card-subtitle">
            <strong>ID: </strong> <?php echo $value->idEstadoDevolucionGeneral; ?></p>
                <div class="dropdown-divider"></div>
        <p class="card-subtitle mb-2" id="card-subtitle">
            <strong>Descripción: </strong> <?php echo $value->descripcionEstadoDevolucionGeneral; ?></p>
                    <div class="dropdown-divider"></div>
    </div>    
    <div class="card-dfooter">        
        <a href="?c=eliminarEstadoDevolucion&idEstadoDevolucionGeneral=<?php echo $value->idEstadoDevolucionGeneral; ?>" class="card-link">Eliminar</a>
        <a href="?c=detalleAllEstadoDevolucionGnrl" class="card-link">Volver</a>
    </div>
    <?php   }  ?>
</div>