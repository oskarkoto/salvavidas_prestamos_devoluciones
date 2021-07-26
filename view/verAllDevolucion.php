<!-- Vista de Todas las devoluciones -->
<div class="upside">
    <a href="index.php" class="Inicio">« Inicio</a>
</div>
<div class="card" id="ListaCompleta">
    <div class="card-title">
        <h2> DEVOLUCIONES</h2>
    </div>
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Prestamo</th>
                <th scope="col">Fecha Devolucion</th>
                <th scope="col">Estado General</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
        <?php
        foreach ($allDevolucion as $value) {    
        ?>
            <tr>
                <td><?php echo $value->idDevolucion; ?></td>
                <td><?php echo $value->idPrestamo; ?></td>
                <td><?php echo $value->fechaRealDevolucion; ?></td>
                <td><?php echo $value->idEstadoDevolucionGeneral; ?></td>
                <td>Ver</td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>