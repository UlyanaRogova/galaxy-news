<?php
require_once 'resources/Repository.php';
class WorkNews
{
    private $repository;

    public function __construct()
    {
        $this->repository = new Repository();
    }
    public function getWorkNewsByIndex()
    {
        $data = [];

        $news = $this->repository->getNewsId();

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            if (isset($news[$id])) {
                $data = $news[$id];
            }
        }
        return $data;
    }

    public function getWorkNews()
    {
        include "work_news/views/news_index.php";
    }
}
?>