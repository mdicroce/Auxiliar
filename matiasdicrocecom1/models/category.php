<?php
    namespace models;

    class category
    {
        private $id;
        private $name;
        private $isActive;

        public function __construct($id="",$name,$isActive=true)
        {
            $this->id = $id;
            $this->name = $name;
            $this->isActive = $isActive;
        }
        public function getId(){return $this->id;}
        public function setId($id){$this->id=$id;}
        public function getName(){return $this->name;}
        public function setName($name){$this->name = $name;}
        public function getIsActive(){return $this->isActive;}
        public function setIsActive($isActive){$this->isActive = $isActive;}
    }
?>