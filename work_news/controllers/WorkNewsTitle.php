<?php
require_once 'resources/Repository.php';
class WorkNewsTitle extends Repository{
    public function showWNTitle(){
        $titleItem = $this->getTitles();
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            if(isset($titleItem[$id])){
                $title = $titleItem[$id];
            }
            echo '<title>' . $title . '</title>';
        }
    }
}






