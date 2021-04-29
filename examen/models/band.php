<?php 
    namespace models;
    
    use models\Member as Member;
    class Band
    {
        private $id;
        private $name;
        private $bio;
        private $members;
        private $category;
        public function __construct($id="",$name,$bio,$members="",$category="")
        {
            $this->id = $id;
            $this->name = $name;
            $this->bio = $bio;
            $this->members = $members;
            $this->category = $category;
        }
        public function getId(){return $this->id;}
        public function setId($id){$this->id=$id;}
        public function getName(){return $this->name;}
        public function setName($name){$this->name = $name;}
        public function getBio(){return $this->bio;}
        public function setBio($bio){$this->bio = $bio;}
        public function getMembers(){return $this->members;}
        public function setMembers($members){$this->members = $members;}
        public function getCategory(){return $this->category;}
        public function setCategory($category){$this->category = $category;}
    }
?>