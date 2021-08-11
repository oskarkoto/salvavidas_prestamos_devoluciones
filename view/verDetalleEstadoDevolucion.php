<?php if ($msg != NULL){ ?>
    <div class="alert alert-info" role="alert">
        <h6 id = "alerta"><?php echo $msg; ?> </h6>
    </div>
<?php   }  ?>
<!-- Vista de Detalle de Estado de Devolución -->
<div class="upside">
    <a href="index.php" class="Inicio">« Inicio</a>
</div>
<div class="card" id="ListaCompleta">
    <div class="card-title">
        <h2> DETALLES DE ESTADO DE DEVOLUCION </h2>
    </div>
    <?php
        foreach ($selectEstadoDevolucion as $value) {    ?>
    <div class="card-body">      
        <p class="card-subtitle mb-2" id="card-subtitle">
            <strong>ID: </strong> <?php echo $value->idEstadoDevolucion; ?></p>
                <div class="dropdown-divider"></div>
        <p class="card-subtitle mb-2" id="card-subtitle">
            <strong>Detalle: </strong> <?php echo $value->descripcionEstadoDevolucion; ?></p>
                    <div class="dropdown-divider"></div>
    </div>    
    <div class="card-dfooter">        
        <a href="?c=eliminarEstadoDevolucion&idEstadoDevolucion=<?php echo $value->idEstadoDevolucion; ?>" class="card-link">Eliminar</a>
        <a href="?c=actualizarEstadoDevolucion&idEstadoDevolucion=<?php echo $value->idEstadoDevolucion; ?>" class="card-link">Editar</a>
        <a href="?c=detalleAllEstadoDevolucion" class="card-link">Volver</a>
    </div>
    <?php   }  ?>
</div>