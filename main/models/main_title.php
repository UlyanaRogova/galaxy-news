<?php
    error_reporting(E_ALL);
	ini_set('display_errors', 'on');
	mb_internal_encoding('UTF-8');

    require_once 'main/controllers/MainTitle.php';

    $main_title = new MainTitle();
    $main_title->setMainTitle('Галактический вестник');
    $main_title->showMainTitle();
?>