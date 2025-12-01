<?php
    require_once 'main/controllers/MainTitle.php';

    $main_title = new MainTitle();
    $main_title->setMainTitle('Галактический вестник');
    $main_title->showMainTitle();
?>