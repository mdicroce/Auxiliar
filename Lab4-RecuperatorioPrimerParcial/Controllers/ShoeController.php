<?php
    namespace Controllers;

    use Data\ShoeDAO as ShoeDAO;
    use Model\Shoe as Shoe;

    class ShoeController
    {
        private $shoeDao;

        public function __construct()
        {
            $this->shoeDao = new ShoeDAO();
        }
        public function getAll()
        {
            $list = $this->shoeDao->getAll();
            usort($list,function($sA,$sB){return strcmp($sA->getName(),$sB->getName());});
            return $list;
        }
        public function add($newShoe)
        {
            $this->shoeDao->add($newShoe);
            $list = $this->shoeDao->getAll();
            return $list;
        }
        public function delete($deleted)
        {
            $this->shoeDao->delete($delete);
            return $this->shoeDao->getAll();
        }
        public function obtenerPromedio($list)
        {
            $suma = 0;
            foreach($list as $key => $value)
            {
                $suma += $value->getPrice();
            }
            return $suma / count($list);
        }
        public function obtenerCantidad($list)
        {
            $cantidad = array("deportivo" => 0, "formal" => 0, "urbano" => 0);
            foreach($list as $key => $value)
            {
                
                if(array_key_exists($value->getCategory(),$cantidad))
                {
                    $cantidad[$value->getCategory()] +=1;
                }
                else
                {
                    $cantidad += [$value->getCategory() => 1];
                }
            }
            return $cantidad;
        }
    }
?>