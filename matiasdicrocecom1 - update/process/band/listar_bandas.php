<?php
    namespace Process;
    use Controllers\BandController as BandController;
    use Config\Autoload;
    require_once("./Config/Autoload.php");
    
    $bandController = new BandController();
    $bandList = $bandController->getAll();

?>