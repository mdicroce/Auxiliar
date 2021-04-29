<?php
include_once("header.php");
?>

<form action="<?php echo FRONT_ROOT ?>Tecnico/addCliente" method="get">
    <label for="nombre">Nombre del cliente: </label>
    <input type="text" name="nombre" id="nombrecliente">
    <label for="telefono">Telefono</label>
    <input type="tel" name="telefono" id="telefono">
    <button type="submit"></button>
<a href="./home-tec.php">Volver</a>
</form>

