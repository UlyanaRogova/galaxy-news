<?php
require_once 'Controllers/DetailController.php';
require_once 'Controllers/MainController.php';

$detail = new DetailController();
$main = new MainController();

//Simple router
$requestUri = $_SERVER['REQUEST_URI'];

if (preg_match('/\/detail(.*)/', $requestUri)) {
    $newsId = $_GET['id'];
    $detail->index($newsId);
} /*elseif() {
    //Other pages
}*/ else {
    $main->index();
}

?>