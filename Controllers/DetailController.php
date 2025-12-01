<?php
require_once 'Model/Repository.php';

//use Repository;

class DetailController
{
    private $repository;
    private $title = 'Галактический вестник';

    public function __construct()
    {
        $this->repository = new Repository();
    }

    public function index($newsId)
    {
        $title = $this->title;
        $news = $this->repository->getNews($newsId);

        include 'Views/header.php';
        include 'Views/detail.php';
        include 'Views/footer.php';
    }
}
?>