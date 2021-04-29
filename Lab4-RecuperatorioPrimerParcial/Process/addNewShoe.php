<?php 
    namespace Process;
    use Controllers\ShoeController as ShoeController;
    use Model\Shoe as Shoe;
    require_once("../Config/Autoload.php");
    $shoeController = new ShoeController();
    if (isset($_GET))
    {
        $newShoe = new Shoe("",$_GET["name"],$_GET["brand"],$_GET["category"],$_GET["price"]);
        $shoeController->add($newShoe);
    }
    header('location: ../list.php');
    

?>