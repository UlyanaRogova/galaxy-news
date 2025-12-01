<?php
require_once 'resources/Repository.php';
class Banner
{
    private $data;

    public function __construct()
    {
        $this->data = new Repository();
    }
    public function getBannerNews() 
    {
        $data = $this->data->fetchBanner();

        return $data;
    }

    public function getBanner()
    {
        include "main/views/banner.php";
    }
}
?>