<?php

namespace Models;

class Tecnico
{
    private $id;
    private $nombre;
    private $usuario;
    private $password;

    public function __construct($id, $nombre, $usuario, $password )
    {
        $this->nombre = $nombre;
        $this->usuario = $usuario;
        $this->password = $password;
        $this->id = $id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }
    public function getUsuario()
    {
        return $this->usuario;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }
    public function setPassword($password)
    {
        $this->password = $password;
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
