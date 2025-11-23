<?php
require_once 'resources/Repository.php';
    class BlockNews extends Repository{
        public function getGridNews(){
            return $this->setGridNews();
        }
    }
?>