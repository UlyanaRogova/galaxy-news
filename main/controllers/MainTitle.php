<?php
require_once 'resources/Repository.php';
class MainTitle
{
    private $main_title = "Галактический вестник";

    public function getMainTitle($main_title) 
    {
        $this->main_title = $main_title;
    }

    public function showTitle() 
    {
        echo '<title>' . $this->main_title . '</title>';
    }
}
?>





