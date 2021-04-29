<?php
    namespace Process;
    use Controllers\BookController as BookController;
    use Config\Autoload;
    require_once("./Config/Autoload.php");
    
    $bookController = new BookController();
    $bookList = $bookController->getAll();

?>