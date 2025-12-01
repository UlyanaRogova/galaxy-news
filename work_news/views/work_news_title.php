<?php
    error_reporting(E_ALL);
	ini_set('display_errors', 'on');
	mb_internal_encoding('UTF-8');

    require_once 'work_news/controllers/WorkNewsTitle.php';

    $work_news_title = new WorkNewsTitle();
    $work_news_title->showWNTitle();
?>