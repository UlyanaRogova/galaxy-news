<?php
require_once 'Model/News.php';

class MainController
{
    private $news;
    private $title = 'Галактический вестник';
    private $countNews = 4;
    private $itemsOnPage = 1;

    public function __construct()
    {
        $this->news = new News();
    }

    public function index()
    {
        $title = $this->title;
        $news = $this->news->fetchNews();
        $bannerNews = $this->news->fetchBanner();

        $pages = $this->getPages();

        include 'Views/header.php';
        include 'Views/main.php';
        include 'Views/footer.php';
    }

    public function getPages()
    {
        $count = $this->news->fetchCountPages();
        
        $pageId = $this->news->getPageId();
        
        $countPages = ceil($count / $this->countNews);
        
        $firstPage = max(1, $pageId - $this->itemsOnPage);

        $lastPage = min($countPages, $pageId + $this->itemsOnPage);

        if($pageId <= $this->itemsOnPage){
            $firstPage = 1;
            $lastPage = min($countPages, 2 * $this->itemsOnPage + 1);
        }

        if($pageId >= $countPages - $this->itemsOnPage){
            $lastPage = $countPages;
            $firstPage = max(1, $countPages - 2 * $this->itemsOnPage);
        }

        return ['pageId' => $pageId, 'countPages' => $countPages, 'firstPage' => $firstPage, 'lastPage' => $lastPage];
    }
}

?>