<?php 
    namespace Process;

    session_start();
    if(!isset($_SESSION['loggedUser']))
    {
        header('location: index.php');
    }

?>