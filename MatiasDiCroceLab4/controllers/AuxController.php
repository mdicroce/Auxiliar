<?php
namespace Controllers;

use Models\Auxiliar;
use DAO\AuxiliarDAO;

class AuxController{
    private $auxiliarDAO;
    public function __construct()
    {
        $this->auxiliarDAO = new AuxiliarDAO();
    }

    public function getAll()
    {
        return $this->AuxiliarDAO->getAll() ;
    }
    public function add($data1, $data2, $data3)
    {
        $newAux = new Auxiliar($data1,$data2,$data3);
        $this->auxiliarDAO->add($newAux);
    }
    public function modify($data1, $data2, $data3, $id)
    {
        $this->auxiliarDAO->modify($id,$data1,$data2,$data3);
    }
    public function remove($id)
    {
        $this->auxiliarDAO->remove($id);
    }

    public function showAuxiliarList()
    {
        $auxiliar = $this->getAll();
        require_once VIEWS_PATH."auxiliar_list.php";
    }
}