<!-- Vista de Todos los prestamos de equipo-->
<div class="upside">
    <a href="index.php" class="Inicio">« Inicio</a>
</div>
<div class="card" id="ListaCompleta">
    <div class="card-title">
        <h2>PRESTAMOS DE EQUIPO</h2>
    </div>
    <div class="card-subtitle" id="Add">
        <label for="search">Buscar: </label>
        <select name="forma" onchange="location = this.value;">
            <option value="?c=detalleAllPrestamo" >Préstamo</option>
            <option value="?c=detalleAllPrestamoEquipo" selected>Préstamo de Equipo</option>
            <option value="?c=detalleAllPrestamoSuministro">Préstamo de Suministro</option>
        </select>
        <a href="index.php" class="add">+ Añadir</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Prestamo</th>
                <th scope="col">Equipo</th>
                <th scope="col">Estado Devolución</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
        <?php
        foreach ($allPrestamoEquipo as $value) {    
        ?>
            <tr>
                <td><?php echo $value->idPrestamoEquipo; ?></td>
                <td><?php echo $value->idPrestamo; ?></td>
                <td><?php echo $value->idEquipo; ?></td>
                <td><?php echo $value->idEstadoDevolucion; ?></td>
                <td>
                <a class="ver" id="ver" href="?c=detallePrestamoEquipo&idPrestamoEquipo=<?php echo $value->idPrestamoEquipo; ?>">
                <!-- Icono Info -->
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-text" viewBox="0 0 16 16">
                <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                <path d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
                </svg> Ver
                </a>
                <a class="eliminar" id="eliminar" href="?c=eliminarPrestamoEquipo&idPrestamoEquipo=<?php echo $value->idPrestamoEquipo; ?>">
                <!-- Icono Eliminar -->
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                </svg> Eliminar
                </a>    
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>