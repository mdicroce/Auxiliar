<?php 
    namespace Process;
    use Controllers\BookController as BookController;
    use Model\Book as Book;
    require_once("../Config/Autoload.php");
    $bookController = new BookController();
    if (isset($_GET))
    {
        $newBook = new Book("",$_GET["title"],$_GET["author"],$_GET["genre"],$_GET["format"]);
        $bookController->add($newBook);
    }
    header('location: ../list.php');
    

?>