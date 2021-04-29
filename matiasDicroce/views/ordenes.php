<?php
include_once("header.php");
?>
<ul>
    <?php
    foreach ($ordenes as $orden) {
        echo "<li>" . $orden.getId() . "/" . $orden.getEstado() . "/" . $orden.getNombreEquipo() . "</li>";
    }
    ?>
</ul>

<form action="<?php echo FRONT_ROOT ?>Tecnico/addOrden" method="get">
    <h4>Agregar Orden Nueva</h4>
    <label for="nombre_equipo">Nombre del equipo</label>
    <input type="text" name="nombre_equipo" id="nombreEquipo">
    <label for="estado">Estado de Orden</label>
    <select name="estado" id="estado">
        <option value="pendiente">Pendiente</option>
        <option value="En reparacion">En Reparacion</option>
        <option value="Finalizado">Finalizado</option>
    </select>
    <button type="submit">Enviar Orden Nueva</button>
</form>

