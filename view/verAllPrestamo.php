<!-- Vista de Todos los prestamos -->
<div class="upside">
    <a href="index.php" class="Inicio">« Inicio</a>
</div>
<div class="card" id="ListaCompleta">
    <div class="card-title">
        <h2> PRESTAMOS</h2>
    </div>
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tecnico</th>
                <th scope="col">Fecha Prestamo</th>
                <th scope="col">Fecha Devolucion</th>
                <th scope="col">Cliente</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
        <?php
        foreach ($allPrestamo as $value) {    
        ?>
            <tr>
                <td><?php echo $value->idPrestamo; ?></td>
                <td><?php echo $value->idTecnico; ?></td>
                <td><?php echo $value->fechaPrestamo; ?></td>
                <td><?php echo $value->fechaEsperadaDevolucion; ?></td>
                <td><?php echo $value->cliente; ?></td>
                <td>Ver</td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>