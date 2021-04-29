<?php
    namespace Controllers;

    use Data\BookDAO as BookDAO;
    use Model\Book as Book;

    class BookController
    {
        private $bookDao;

        public function __construct()
        {
            $this->bookDao = new BookDAO();
        }
        public function getAll()
        {
            $list = $this->bookDao->getAll();
            return $list;
        }
        public function add($newBook)
        {
            $this->bookDao->add($newBook);
            $list = $this->bookDao->getAll();
            return $list;
        }
        public function delete($deleted)
        {
            $this->bookDao->delete($delete);
            return $this->bookDao->getAll();
        }
        
    }
?>