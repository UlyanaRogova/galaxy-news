<?php
require_once 'resources/Repository.php';
class News
{
    private $repository;

    public function __construct()
    {
        $this->repository = new Repository();
    }

    public function getNews()
    {
        return $this->repository->fetchNews();
    }

    public function getBlockNews()
    {
        include 'main/views/block_news.php';
    }
}
?>