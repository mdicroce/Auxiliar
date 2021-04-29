<?php
    namespace Process;
    use Controllers\CategoryController as CategoryController;
    use Config\Autoload;
    require_once("./Config/Autoload.php");
    
    $categoryController = new CategoryController();
    $categoryList = $categoryController->getAll();

?>