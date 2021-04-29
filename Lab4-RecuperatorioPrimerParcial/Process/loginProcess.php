<?php 
    namespace Process;
    use Model\User as User;
    use Controllers\UserController as UserController;
    session_start();
    require_once("../Config/Autoload.php");

    if(!isset($_SESSION["loggedUser"]))
    {
        $email;
        $password;
        if (!empty($_POST))
        {
            $email = $_POST["email"];
            $password = $_POST["password"];
        }
        $userController = new UserController();
        $mensaje = $userController->login($email,$password);
        if(isset($_SESSION["loggedUser"]))
        {
            header("location: ../list.php");
        }
        else
        {
            header("location: ../index.php?mensaje=$mensaje");
        }
        
    }
?>