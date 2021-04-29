<?php 
    namespace process;
    use Controllers\BandController as BandController;
    use Model\Band as Band;
    require_once("../Config/Autoload.php");
    $bandController = new BandController();
    if (isset($_GET))
    {
        $bandController->update($_GET["oldName"],$_GET["name"],$_GET["bio"]);
    }
    header('location: ../index.php');
    

?>