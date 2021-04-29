<?php
    namespace Controllers;

    use daos\Categories as Categories;
    use models\Category as Category;

    class CategoryController
    {
        private $categoryDao;

        public function __construct()
        {
            $this->categoryDao = new Category();
        }
        public function getAll()
        {
            return $this->categoryDao->getAll();
        }

        public function add($newcategory)
        {
            $this->bandDao->add($newcategory);
            $list = $this->categoryDao->getAll();
            return $list;
        }
        public function delete($deleted)
        {
            $this->categoryDao->delete($delete);
            return $this->categoryDao->getAll();
        }

    }
?>