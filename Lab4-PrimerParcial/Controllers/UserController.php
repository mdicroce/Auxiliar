<?php
    namespace Controllers;

    use Data\UserDAO as UserDAO;
    use Model\User as User;

    class UserController
    {
        private $userDao;
        public function __construct()
        {
            $this->userDao = new UserDAO();
        }
        public function logout()
        {
            session_start();
            if (isset($_SESSION['loggedUser']))
            {
                session_destroy();
                header('location: index.php');
            }
            
        }
        public function login($email, $password)
        {
            $usuario = new User($email,$password);
            $listaUsuarios = $this->userDao->getAll();
            foreach($listaUsuarios as $key => $user)
            {
                if($user->getEmail()==$usuario->getEmail())
                {
                    if($user->getPassword()==$usuario->getPassword())
                    {
                        if(!isset($_SESSION['loggedUser']))
                        {
                            $_SESSION['loggedUser'] = $usuario->getEmail();
                            return "Se inicio correctamente sesión";    
                        }
                        
                    }
                    else
                    {
                        return "Contraseña incorrecta";
                    }
                }
            }
            return "usuario no encontrado";
        }
    }

?>