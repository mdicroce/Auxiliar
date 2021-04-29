<?php

namespace Models;

class Orden
{
    private $id;
    private $estado;
    private $nombreEquipo;
    private $idCliente;

    public function __construct( $id, $estado, $nombreEquipo, $idCliente)
    {
        $this->estado = $estado;
        $this->nombreEquipo = $nombreEquipo;
        $this->idCliente = $idCliente;
        $this->id = $id;
    }

    public function getEstado()
    {
        return $this->estado;
    }
    public function getNombreEquipo()
    {
        return $this->nombreEquipo;
    }
    public function getIdCliente()
    {
        return $this->idCliente;
    }
    public function setEstado($Estado)
    {
        $this->Estado = $Estado;
    }
    public function setNombreEquipo($NombreEquipo)
    {
        $this->NombreEquipo = $NombreEquipo;
    }
    public function setIdCliente($idCliente)
    {
        $this->idCliente = $idCliente;
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
}
