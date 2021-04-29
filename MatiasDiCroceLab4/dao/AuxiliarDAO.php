<?php 

namespace DAO;
use Models\Auxiliar as Auxiliar;
use \Exception as Exception;

class AuxiliarDAO{

    private $List = array();
    private $fileName;
    private $tableName = "auxiliar";

    public function __construct()
    {
        $this->fileName = dirname(__DIR__) . "/Repository/Auxiliares.json";
    }
    public function add($data)
    {
        $this->retrieveData();
        array_push($this->List, $data);
        $this->SaveData();
    }
    public function getAll()
    {
        $this->retrieveData();
        return $this->List;
    }
    public function modify($id, $data1, $data2, $data3)
    {
        $this->retrieveData();
        $this->list = array_map(function($value, $aux){
            if($value->getId() == $aux["id"])
            {
                $value->setData1($aux["data1"]);
                $value->setData2($aux["data2"]);
                $value->setData3($aux["data3"]);
                return $value;
            }
                return $value;
        }, $this->List, array_fill(0, count($this->List), ["id" => $id, "data1" => $data1, "data2" => $data2, "data3" => $data3]));
        $this->saveData();
       
    }
    public function remove($dataToDelete)
    {
        $this->retrieveData();
        $arrayAux = array();
        foreach ($this->List as $auxiliar) {

            if ($dataToDelete->getId() == $auxiliar->getId()) {
            } 
            else {
                array_push($arrayAux, $auxiliar);
            }
        }
        $this->List = $arrayAux;
        $this->saveData();
    }
    private function saveData()
    {
        $arrayToEncode = array();
        $valuesArray = array();
        foreach ($this->List as $auxiliar) {
            $valuesArray["id"] = $auxiliar->getId();
            $valuesArray["dato1"] = $auxiliar->getDato1();
            $valuesArray["dato2"] = $auxiliar->getDato2();
            $valuesArray["dato3"] = $auxiliar->getDato3();
            array_push($arrayToEncode, $valuesArray);
        }
        $jsonContent = json_encode($arrayToEncode, JSON_PRETTY_PRINT);
        file_put_contents($this->fileName, $jsonContent);
    }
    private function retrieveData()
    {
        $this->List = array();

        if (file_exists($this->fileName)) {
            $jsonContent = file_get_contents($this->fileName);
            $arrayToDecode = ($jsonContent) ? json_decode($jsonContent, true) : array();
            foreach ($arrayToDecode as $valuesArray) {
                $auxiliar = new Auxiliar($valuesArray["id"],$valuesArray["dato1"], $valuesArray["dato2"], $valuesArray["dato3"]);
                array_push($this->List, $auxiliar);
            }
        }
    }
    public function addDB($aux)
    {
        $query = "INSERT INTO $this->tableName (id,dato1,dato2,dato3) 
                        VALUES (:id,:dato1,:dato2,:dato3)";
        $parameters["id"] = $aux->getId();
        $parameters["dato1"] = $aux->getDato1();
        $parameters["dato2"] = $aux->getDato2();
        $parameters["dato3"] = $aux->getDato3();
        try {
            $this->connection = Connection::getInstance();
            $this->connection->executeNonQuery($query, $parameters);
        } catch (Exception $ex) {
            throw $ex;
        }
    }
    public function getAllDB()
    {
        $query = "SELECT * from $this->tableName";
        try {
            $this->connection = Connection::getInstance();
            $results = $this->connection->execute($query);
        } catch (Exception $ex) {
            throw $ex;
        }
        $moviesList = array();
        foreach ($results as $row) {
            $newMovie = new Auxiliar($row["id"], $row["dato1"], $row["dato2"], $row["dato3"]);
            $moviesList[] = $newMovie;
        }
        return $moviesList;
    }
    public function removeDB($id)
    {
        $query = "DELETE FROM $this->tableName WHERE id=$id";
        try {
            $this->connection = Connection::getInstance();
            return $this->connection->executeNonQuery($query);
        } catch (Exception $ex) {
            throw $ex;
        }
    }
    public function modifyDB($auxiliar)
    {
        $query = "UPDATE $this->tableName set dato1=:dato1, dato2=:dato2, dato3=:dato3 where id=:id;";
        $params["dato1"] = $auxiliar->getDato1();
        $params["dato2"] = $auxiliar->getDato2();
        $params["dato3"] = $auxiliar->getDato3();
        try {
            $this->connection = Connection::getInstance();
            return $this->connection->executeNonQuery($query, $params);
        } catch (Exception $ex) {
            throw $ex;
        }
    }



}