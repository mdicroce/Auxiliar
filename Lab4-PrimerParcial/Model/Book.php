<?php
    namespace Model;

    class Book
    {
        private $id;
        private $title;
        private $author;
        private $genre;
        private $format;

        public function __construct($id="",$title,$author,$genre,$format)
        {
            $this->id = $id;
            $this->title = $title;
            $this->author = $author;
            $this->genre = $genre;
            $this->format = $format;
        }

        public function getId(){return $this->id;}
        public function setId($id){$this->id=$id;}
        
        public function getTitle(){return $this->title;}
        public function setTitle($title){$this->title = $title;}
        
        public function getAuthor(){return $this->author;}
        public function setAuthor($author){$this->author = $author;}

        public function getGenre(){return $this->genre;}
        public function setGenre($genre){$this->genre = $genre;}

        public function getFormat(){return $this->format;}
        public function setFormat($format){$this->format = $format;}
    }
?>