<?php
    namespace models;

    class Member
    {
        private $name;
        private $role;

        public function __construct($name="",$role="")
        {
            $this->name = $name;
            $this->role = $role;
        }
        public function getName(){return $this->name;}
        public function setName($name){$this->name = $name;}
        public function getRole(){return $this->role;}
        public function setRole($role){$this->role = $role;}
    }
?>