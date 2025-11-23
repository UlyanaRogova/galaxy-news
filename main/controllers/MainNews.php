<?php
require_once 'resources/Repository.php';
    class MainNews extends Repository{
        public function getMainNews() {
            $data = $this->setMainNews();
            foreach($data as $news){
                return $news;
            }
        }
    }
?>