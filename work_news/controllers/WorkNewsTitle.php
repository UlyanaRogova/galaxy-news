<?php
require_once 'resources/Repository.php';
class WorkNewsTitle
{
    private $title;

    public function __construct()
    {
        $this->title = new Repository();
    }
    public function showTitle()
    {
        $title = $this->title->getTitles();
        
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            if(isset($title[$id])){
                $title = $title[$id];
            }
            echo '<title>' . $title . '</title>';
        }
    }
}
?>