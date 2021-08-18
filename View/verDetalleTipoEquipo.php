<?php if ($msg != NULL){ ?>
    <div class="alert alert-info" role="alert">
        <h6 id = "alerta"><?php echo $msg; ?> </h6>
    </div>
<?php   }  ?>
<!-- Vista de Detalle de Tipo de Equipo -->
<div class="upside">
    <a href="index.php" class="Inicio">« Inicio</a>
</div>
<div class="card" id="ListaCompleta">
    <div class="card-title">
        <h2> DETALLES DE TIPO DE EQUIPO </h2>
    </div>
    <?php
        foreach ($selectTipoEquipo as $value) {    ?>
    <div class="card-body">      
        <p class="card-subtitle mb-2" id="card-subtitle">
            <strong>Nombre: </strong> <?php echo $value->nombreTipoEquipo; ?></p>
                <div class="dropdown-divider"></div>
        <p class="card-subtitle mb-2" id="card-subtitle">
            <strong>Descripción: </strong> <?php echo $value->descripcionTipoEquipo; ?></p>
                    <div class="dropdown-divider"></div>
        <p class="card-subtitle mb-2" id="card-subtitle">
            <strong>Marca: </strong> <?php echo $value->marcaTipoEquipo; ?></p>
                <div class="dropdown-divider"></div>                    
        <p class="card-subtitle mb-2" id="card-subtitle">
            <strong> Existencia mínima en inventario: </strong><?php echo $value->existenciaMinima; ?></p>
                <div class="dropdown-divider"></div>    
    </div>    
    <div class="card-dfooter">        
        <a href="?c=eliminarTipoEquipo&idTipoEquipo=<?php echo $value->idTipoEquipo; ?>" class="card-link">Eliminar</a>
        <a href="?c=actualizarTipoEquipo&idTipoEquipo=<?php echo $value->idTipoEquipo; ?>" class="card-link">Editar</a>
        <a href="?c=detalleAllTipoEquipo" class="card-link">Volver</a>
    </div>
    <?php   }  ?>
</div>