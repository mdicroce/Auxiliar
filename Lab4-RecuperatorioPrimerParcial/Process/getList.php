<?php
    namespace Process;
    use Controllers\ShoeController as ShoeController;
    use Config\Autoload;
    require_once("./Config/Autoload.php");
    
    $shoeController = new ShoeController();
    $shoeList = $shoeController->getAll();
    $promedio = $shoeController->obtenerPromedio($shoeList);
    $cantidad = $shoeController->obtenerCantidad($shoeList);

?>