<?php
include_once("header.php");
?>

<a href="./add-cliente-form.php">Agregar nuevo Cliente</a>
<form action="<?php echo FRONT_ROOT ?>Tecnico/showOrdenes" method="get">
    <select name="cliente" id="clientes">

        <?php
        foreach ($clientes as $cliente) {
            echo "<option value=" . $cliente->getId() . ">" . $cliente->getNombre() . " / " . $cliente->getTelefono()  . "</option>";
        }
        ?>
    </select>

    <button type="submit">Seleccionar Cliente</button>

</form>