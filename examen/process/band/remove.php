<?php 
    namespace process;
    use Controllers\BandController as BandController;
    use Model\Band as Band;
    require_once("../config/autoload.php");
    $bandController = new BandController();
    if (isset($_GET))
    {
        $bandController->delete($_GET["name"]);
    }
    header('location: ../index.php');
    

?>