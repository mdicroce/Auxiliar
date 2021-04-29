<?php

namespace Controllers;

use Models\Auxiliar;
use DAO\TecnicoDAO;

class TecnicoController
{
    private $TecnicoDAO;
    static public $tecnicoRegistrado;
    public function __construct()
    {
        $this->TecnicoDAO = new TecnicoDAO();
    }
    public function verifyLogin($username,$password)
    {
        $tecnicoBuscado = $this->TecnicoDAO->searchUser($username);
        if(!$tecnicoBuscado->is_null)
        {
            if($tecnicoBuscado->getpassword() == $password)
            {
                $this::$tecnicoRegistrado = $tecnicoBuscado;
                $clientes = $this->getAllClientes();
                require_once VIEWS_PATH . "home-tec.php";
            }
            else
            {
                $mensajeDeError = "Contraseña incorrecta";
                require_once VIEWS_PATH . "login.php"
            }
        }
        $mensajeDeError = "Usuario incorrecto";
        require_once VIEWS_PATH . "login.php";
    }
    public function addCliente($nombre, $telefono)
    {
        $this->TecnicoDAO->addCliente($nombre,$telefono, $this::$tecnicoRegistrado->getId());
        require_once VIEWS_PATH . "add-cliente-form.php";
    }
    public function getAllClientes()
    {
        return $this->TecnicoDAO->getAllClientes($this::$tecnicoRegistrado->getId());
    }
    public function addOrden($estado,$nombreEquipo,$idCliente)
    {
        $this->TecnicoDAO->addOrden($estado,$nombreEquipo,$idCliente);
        $ordenes = $this->TecnicoDAO->getAllOrdenes($idCliente);
        require_once VIEWS_PATH . "ordenes.php";
    }
    public function showOrdenes($idCliente)
    {
        $ordenes = $this->TecnicoDAO->getAllOrdenes($idCliente);
        require_once VIEWS_PATH . "ordenes.php";
    }
}
