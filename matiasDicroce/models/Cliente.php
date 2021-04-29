<?php

namespace Models;

class Cliente
{
    private $id;
    private $nombre;
    private $telefono;
    private $idTecnico;

    public function __construct($id , $nombre, $telefono,  $idTecnico)
    {
        $this->nombre = $nombre;
        $this->telefono = $telefono;
        $this->id = $id;
        $this->idTecnico = $idTecnico;
    }

    public function getNombre()
    {
        return $this->nombre;
    }
    public function getTelefono()
    {
        return $this->telefono;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
    
    

    /**
     * Get the value of idTecnico
     */ 
    public function getIdTecnico()
    {
        return $this->idTecnico;
    }

    /**
     * Set the value of idTecnico
     *
     * @return  self
     */ 
    public function setIdTecnico($idTecnico)
    {
        $this->idTecnico = $idTecnico;

        return $this;
    }
}
