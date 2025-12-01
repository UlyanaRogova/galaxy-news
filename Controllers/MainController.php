<?php

require_once 'Model/Repository.php';

class MainController
{
    private $repository;
    private $title = 'Галактический вестник';
    private $count_news = 4;
    private $items_on_page = 1;

    public function __construct()
    {
        $this->repository = new Repository();
    }

    public function index()
    {
        $title = $this->title;
        $news = $this->repository->fetchNews();
        $bannerNews = $this->repository->fetchBanner();

        $pages = $this->getPages();

        include 'Views/header.php';
        include 'Views/main.php';
        include 'Views/footer.php';
    }

    public function getPages()
    {
        $count = $this->repository->fetchCountPage();
        
        $id_page = $this->repository->getPageId(); // уточнить про this

        //$id_page = (int) $id_page;
        
        $count_pages = ceil($count / $this->count_news);
        
        $first_page = max(1, $id_page - $this->items_on_page);

        $last_page = min($count_pages, $id_page + $this->items_on_page);

        if($id_page <= $this->items_on_page){
            $first_page = 1;
            $last_page = min($count_pages, 2 * $this->items_on_page + 1);
        }

        if($id_page >= $count_pages - $this->items_on_page){
            $last_page = $count_pages;
            $first_page = max(1, $count_pages - 2 * $this->items_on_page);
        }

        return ['id_page' => $id_page, 'count_pages' => $count_pages, 'first_page' => $first_page, 'last_page' => $last_page];
    }
}

?>