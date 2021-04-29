<?php 
    namespace process;
    use Controllers\BandController as BandController;
    use Model\Band as Band;
    require_once("../Config/Autoload.php");
    $bandController = new BandController();
    if (isset($_GET))
    {
        $newBand = new Band("",$_GET["name"],$_GET["bio"]);
        $bandController->add($newBand);
    }
    header('location: ../index.php');
    

?>