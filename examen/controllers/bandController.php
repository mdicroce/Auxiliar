<?php
    namespace Controllers;

    use daos\Bands as Bands;
    use models\Band as Band;
    use models\Member as Member;

    class BandController
    {
        private $bandDao;

        public function __construct()
        {
            $this->bandDao = new Bands();
        }
        public function getAll()
        {
            return $this->bandDao->getAll();
        }

        public function add($newband)
        {
            $this->bandDao->add($newband);
            $list = $this->bandDao->getAll();
            return $list;
        }
        public function delete($deleted)
        {
            $this->bandDao->delete($delete);
            return $this->bandDao->getAll();
        }
        public function update($name,$newName,$bio)
        {
            $this->bandDao->update($name,$newName,$bio);
            return $this->bandDao->getAll();
        }
    }
?>