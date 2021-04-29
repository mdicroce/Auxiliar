<?php
    namespace Data;
    use Model\User as User;
    class UserDAO
    {
        private $List = array();
        private $fileName;
        
        public function __construct()
        {
            $this->fileName = dirname(__DIR__)."/Repository/Users.json";
        }
        public function Add($data)
        {
            $this->RetrieveData();
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
            foreach($this->List as $user)
            {
                
                if ($dataToDelete->getEmail()==$user->getEmail())
                {
                    
                }
                else
                {
                    array_push($arrayAux,$user);
                }
            }
            $this->List = $arrayAux;
            $this->SaveData();
            
        }
        private function SaveData()
        {
            $arrayToEncode = array();
            $valuesArray = array();
            foreach($this->List as $user)
            {
                $valuesArray["email"] = $user->getEmail();
                $valuesArray["password"] = $user->getPassword();
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
                    $user = new User($valuesArray["email"],$valuesArray["password"]);
                    array_push($this->List,$user);
                }
            }
        }
    }
?> 