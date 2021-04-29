<?php
    namespace daos;
    use models\Category as Category;
    class Categories
    {
        private $List = array();
        private $fileName;
        private $id;
        
        public function __construct()
        {
            $this->fileName = dirname(__DIR__)."/data/categories.json";
        }
        public function Add($data)
        {
            $this->RetrieveData();
            $data->setID($this->id+1);
            array_push($this->List,$data);
            $this->SaveData();
        }
        public function getAll()
        {
            $this->RetrieveData();
            return $this->List;
        }
        public function Delete($dataToDelete)
        {
            $this->RetrieveData();
            $arrayAux = array();
            foreach($this->List as $category)
            {
                
                if ($dataToDelete->getId()==$category->getId())
                {
                    
                }
                else
                {
                    array_push($arrayAux,$category);
                }
            }
            $this->List = $arrayAux;
            $this->SaveData();
            
        }
        private function SaveData()
        {
            $arrayToEncode = array();
            $valuesArray = array();
            foreach($this->List as $category)
            {
                $valuesArray["id"] = $category->getId();
                $valuesArray["name"] = $category->getName();
                $valuesArray["isActive"]=$category->getIsActive();
                array_push($arrayToEncode,$valuesArray);
                
            }
            $jsonContent = json_encode($arrayToEncode,JSON_PRETTY_PRINT);
            file_put_contents($this->fileName,$jsonContent);
        }
        private function RetrieveData()
        {
            $this->List = array();

            if(file_exists($this->fileName))
            {
                $jsonContent = file_get_contents($this->fileName);
                $arrayToDecode = ($jsonContent) ? json_decode($jsonContent,true) : array();
                foreach($arrayToDecode as $valuesArray)
                {
                    if(!$this->id)
                    {
                        if(!$valuesArray["id"])
                        {
                            $this->id = 1;
                        }
                        else
                        {
                            $this->id = $valuesArray["id"];
                        }
                        
                    }
                    else if($this->id < $valuesArray["id"])
                    {
                        $this->id = $valuesArray["id"];
                    }
                    $category = new Category($valuesArray["id"],$valuesArray["name"],$valuesArray["isActive"]);
                    array_push($this->List,$category);
                }
            }
        }
    }
?> 