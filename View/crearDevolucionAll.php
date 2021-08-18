<?php if ($msg != NULL){ ?>
    <div class="alert alert-info" role="alert">
        <h6 id = "alerta"><?php echo $msg; ?> </h6>
    </div>
<?php   }  ?>
<!-- Vista de Equipos de Prestamo. -->
<div class="upside">
    <a href="?c=detalleAllDevolucion" class="Inicio">« Regresar</a>
</div>
<div class="card" id="ListaCompleta">
    <div class="card-title">
    <h2> DETALLES DE DEVOLUCION </h2>
    </div>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Equipo/Suministro</th>
                <th scope="col">Condición en Inventario</th>
                <th scope="col">Editar</th>
            </tr>
        </thead>
        <tbody>
                <?php foreach ($allPrestamoEquipo as $prestamoE) { if($Prestamo == $prestamoE->idPrestamo)  {
                  foreach ($allEquipo as $equipo)  {  if ($prestamoE->idEquipo == $equipo->idEquipo ){
                  foreach($allTipoEquipo as $tipo) {  if($equipo->idTipoEquipo == $tipo->idTipoEquipo) { ?>
            <tr>
            
                   <td><?php echo $equipo->idEquipo; ?></td>
                   <td><?php echo $tipo->nombreTipoEquipo; ?></td>
                <?php  } }  ?> 
                <?php foreach ($allCondicionActual as $estado1) { if ($estado1->idCondicionActual == $equipo->idCondicionActual) {?>
                <td><?php echo $estado1->descripcionCondicionActual	; ?></td>
                <?php  } } ?>
                <td>
                <br>
                <a class="editar" id="editar" href="?c=actualizarCondEquipo&idEquipo=<?php echo $equipo->idEquipo; ?>">
                <!-- Icono Actualizar -->
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                </svg> Editar
                </a>
                <?php } } } }?>
                </td>
            </tr>

            <?php foreach ($allPrestamoSuministro as $prestamoS) { if($Prestamo == $prestamoS->idPrestamo)  {
                  foreach ($allSuministro as $suministro)  {  if ($prestamoS->idSuministro == $suministro->idSuministro ){
                  foreach($allTipoSuministro as $tipoS) {  if($suministro->idTipoSuministro == $tipoS->idTipoSuministro) { ?>
            <tr>
            
                   <td><?php echo $suministro->idSuministro  ?></td>
                   <td><?php echo $tipoS->nombreTipoSuministro; ?></td>
                <?php  } }  ?> 
                <?php foreach ($allCondicionActual as $estado1) { if ($estado1->idCondicionActual == $suministro->idCondicionActual) {?>
                <td><?php echo $estado1->descripcionCondicionActual	; ?></td>
                <?php  } } ?>
                <td>
                <br>
                <a class="editar" id="editar" href="?c=actualizarCondSuministro&idSuministro=<?php echo $suministro->idSuministro; ?>">
                <!-- Icono Actualizar -->
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                </svg> Editar
                </a>
                <?php } } } }?>
                </td>
            </tr>
        </tbody>
    </table>
</div>
