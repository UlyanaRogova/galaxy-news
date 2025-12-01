<?php

require_once 'Model/Repository.php';

//use Repository;

class DetailController
{
    private $repository;

    public function __construct()
    {
        $this->repository = new Repository();
    }

    public function index($newsId)
    {
        $news = $this->repository->getNews($newsId);
        $title = $news['title'];

        include 'Views/header.php';
        include 'Views/detail.php';
        include 'Views/footer.php';
    }
}
?>