<?php
require_once 'resources/Repository.php';
    class WorkNews extends Repository{
        public function getWorkNewsByIndex() {
            $data = [];
            $content = $this->getNews();
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                if(isset($content[$id])){
                    $data = $content[$id]; 
                }
                return $data;
            }
        }
    }
?>