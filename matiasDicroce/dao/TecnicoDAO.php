<?php

namespace DAO;

use Models\Tecnico as Tecnico;
use Models\Cliente as Cliente;
use \Exception as Exception;
use DAO\Connection as Connection;

class TecnicoDAO
{


    private $tableName;
    private $tableCliente;
    private $tableOrden;
    public function __construct()
    {
        $this->tableName = "tecnicos";
        $this->tableCliente = "clientes";
        $this->tableOrden = "ordenes";
    }

    public function searchUser($username)
    {
        $query = "SELECT * from $this->tableName where $username = username";
        try {
            $this->connection = Connection::getInstance();
            $tecnico = $this->connection->executeNonQuery($query);
        } catch (Exception $ex) {
            throw $ex;
        }
        if ($tecnico != null) {
            return new Tecnico($tecnico["tecnicos_id"], $tecnico["nombre"], $tecnico["username"], $tecnico["password"]);
        }
    }
    public function addTecnico($tecnico)
    {
        $query = "INSERT INTO $this->tableName (id,nombre,username,password)
    VALUES (:id,:nombre,:username,:password)";
        $parameters["id"] = $tecnico->getId();
        $parameters["nombre"] = $tecnico->getNombre();
        $parameters["username"] = $tecnico->getUsername();
        $parameters["password"] = $tecnico->getPassword();
        try {
            $this->connection = Connection::getInstance();
            $this->connection->executeNonQuery($query, $parameters);
        } catch (Exception $ex) {
            throw $ex;
        }
    }
    public function addCliente($nombre, $telefono,$idTecnico)
    {
        $query = "INSERT INTO $this->tableCliente (nombre,telefono,id_tecnico)
    VALUES (:nombre,:telefono,:id_tecnico)";
        $parameters["nombre"] = $nombre;
        $parameters["username"] = $telefono;
        $parameters["id_tecnico"] = $idTecnico;
        try {
            $this->connection = Connection::getInstance();
            $this->connection->executeNonQuery($query, $parameters);
        } catch (Exception $ex) {
            throw $ex;
        }
    }
    public function getAllClientes($idTecnico)
    {
        $query = "SELECT * FROM $this->tableCliente where id_tecnico = $idTecnico";
        try
        {
            $this->connection = Connection::getInstance();
            $clientes = $this->connection->executeNonQuery($query);
        }
        catch (Exception $ex)
        {
            throw $ex;
        }
        $clientesArr = array();
        foreach($clientes as $row )
        {
            array_push($clientesArr,new Cliente($clientes["id"],$clientes["nombre"],$clientes["telefono"],$clientes["idTecnico"]));
        }
        return $clientesArr;

    }
    public function addOrden($estado, $nombreEquipo, $idCliente)
    {
        $query = "INSERT INTO $this->tableOrden (estado,nombre_equipo,clientes_id)
    VALUES (:estado,:nombre_equipo,:clientes_id)";
        $parameters["estado"] = $estado;
        $parameters["nombre_equipo"] = $nombreEquipo;
        $parameters["clientes_id"] = $idCliente;
        try {
            $this->connection = Connection::getInstance();
            $this->connection->executeNonQuery($query, $parameters);
        } catch (Exception $ex) {
            throw $ex;
        }
    }
    public function getAllOrdenes($idCliente)
    {
        $query = "SELECT * FROM $this->tableCliente where clientes_id = $idCliente";
        try
        {
            $this->connection = Connection::getInstance();
            $result = $this->connection->executeNonQuery($query);
        }
        catch(Exception $ex)
        {
            throw $ex;
        }
        $ordArr = array();
        foreach($result as $row )
        {
            array_push($ordArr,new Cliente($result["id"],$result["estado"],$result["nombre_equipo"],$result["clientes_id"]));
        }
        return $ordArr;

    }
}
