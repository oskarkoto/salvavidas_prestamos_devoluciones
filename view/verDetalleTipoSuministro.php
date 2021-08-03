<!-- Vista de Detalle de Tipo de Suministro -->
<div class="upside">
    <a href="index.php" class="Inicio">« Inicio</a>
</div>
<div class="card" id="ListaCompleta">
    <div class="card-title">
        <h2> DETALLES DE TIPO DE SUMINISTRO </h2>
    </div>
    <?php foreach ($selectTipoSuministro as $value) {    ?>
    <div class="card-body">      
        <p class="card-subtitle mb-2" id="card-subtitle">
            <strong>Nombre: </strong> <?php echo $value->nombreTipoSuministro; ?></p>
                <div class="dropdown-divider"></div>
        <p class="card-subtitle mb-2" id="card-subtitle">
            <strong>Descripción: </strong> <?php echo $value->descripcionTipoSuministro; ?></p>
                    <div class="dropdown-divider"></div>                   
        <p class="card-subtitle mb-2" id="card-subtitle">
            <?php foreach ($allCategoriaSuministro as $categoria) {  if ($categoria->idCategoria == $value->idCategoria) {  ?>
                <strong>Categoría: </strong> <?php echo $categoria->descripcionCategoria; ?></p>
            <?php } } ?>
                <div class="dropdown-divider"></div>
        <p class="card-subtitle mb-2" id="card-subtitle">
            <?php foreach ($allUnidadesSuministro as $unidades) {  if ($unidades->idUnidades == $value->idUnidades) {  ?>
                <strong>Cantidad de unidades: </strong> <?php echo $unidades->cantidad; ?></p>
            <?php } } ?>
                <div class="dropdown-divider"></div>                
        <p class="card-subtitle mb-2" id="card-subtitle">
            <strong>Marca: </strong> <?php echo $value->marcaTipoSuministro; ?></p>
                <div class="dropdown-divider"></div> 
        <p class="card-subtitle mb-2" id="card-subtitle">
            <strong> Existencia mínima en inventario: </strong><?php echo $value->existenciaMinima; ?></p>
                <div class="dropdown-divider"></div>    
    </div>    
    <div class="card-dfooter">        
        <a href="?c=eliminarTipoSuministro&idTipoSuministro=<?php echo $value->idTipoSuministro; ?>" class="card-link">Eliminar</a>
        <a href="?c=detalleAllTipoSuministro" class="card-link">Volver</a>
    </div>
    <?php   }  ?>
</div>