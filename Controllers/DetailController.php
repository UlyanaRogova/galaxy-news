<?php

require_once 'Model/News.php';

class DetailController
{
    private $news;

    public function __construct()
    {
        $this->news = new News();
    }

    public function index($newsId)
    {
        $news = $this->news->getAll($newsId);
        $title = $news['title'];
        $dateDb = date_create($news['date']);
		$date = date_format($dateDb, 'd.m.Y', );
        $news['date'] = $date;

        include 'Views/header.php';
        include 'Views/detail.php';
        include 'Views/footer.php';
    }
}
?>