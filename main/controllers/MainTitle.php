<?php
require_once 'resources/Repository.php';
class MainTitle extends Repository{
    private $main_title;

    public function setMainTitle($main_title) {
        $this->main_title = $main_title;
    }

    public function showMainTitle() {
        echo '<title>' . $this->main_title . '</title>';
    }
}






