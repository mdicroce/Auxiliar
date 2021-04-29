<?php 
namespace Models;

class Auxiliar{
    private $id;
    private $dato1;
    private $dato2;
    private $dato3;

    public function __construct($dato1,$dato2,$dato3, $id)
    {
        $this->dato1 = $dato1;
        $this->dato2 = $dato2;
        $this->dato3 = $dato3;
        $this->id = $id;
    }

    public function getDato1()
    {
        return $this->dato1;
    }
    public function getDato2()
    {
        return $this->dato2;
    }
    public function getDato3()
    {
        return $this->dato3;
    }
    public function setDato1($dato1)
    {
        $this->dato1 = $dato1;
    }
    public function setDato2($dato2)
    {
        $this->dato2 = $dato2;
    }
    public function setDato3($dato3)
    {
        $this->dato3 = $dato3;
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