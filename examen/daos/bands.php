<?php
    namespace daos;
    use models\Band as Band;
    use models\Member as Member;
    class Bands
    {
        private $List = array();
        private $fileName;
        private $id;
        
        public function __construct()
        {
            $this->fileName = dirname(__DIR__)."/data/bands.json";
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
            foreach($this->List as $band)
            {
                
                if ($dataToDelete==$band->getName())
                {
                    
                }
                else
                {
                    array_push($arrayAux,$band);
                }
            }
            $this->List = $arrayAux;
            $this->SaveData();
            
        }
        public function update($name,$newName,$bio)
        {
            $this->RetrieveData();
            $arrayAux = array();
            foreach($this->List as $band)
            {
                
                if ($name==$band->getName())
                {
                    $band->setName($newName);
                    $band->setBio($bio);
                    array_push($arrayAux,$band);
                }
                else
                {
                    array_push($arrayAux,$band);
                }
            }
            $this->List = $arrayAux;
            $this->SaveData();
            
        }
        private function SaveData()
        {
            $arrayToEncode = array();
            $valuesArray = array();
            foreach($this->List as $band)
            {
                $valuesArray["id"] = $band->getId();
                $valuesArray["Name"] = $band->getName();
                $valuesArray["bio"]=$band->getBio();
                $valuesArray["members"]["name"]=$band->getMembers()->getName();
                $valuesArray["members"]["role"]=$band->getMembers()->getRole();
                $valuesArray["category"]=$band->getCategory();
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
                    $members = array();
                    for($i=0; $i<count($valuesArray["members"]);$i++)
                    {
                        $miembro = new Member($valuesArray["members"][$i]["name"],$valuesArray["members"][$i]["rol"]);
                        array_push($members,$miembro);
                    }
                    $band = new Band($valuesArray["id"],$valuesArray["Name"],$valuesArray["bio"],$members,$valuesArray["category"]);
                    array_push($this->List,$band);
                }
            }
        }
    }
?> 