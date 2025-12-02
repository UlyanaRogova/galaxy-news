<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
mb_internal_encoding('UTF-8');

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
}*/ elseif (preg_match('/\//', $requestUri)) {
    $main->index();
} else {
    header('HTTP/1.0 404 Not Found');
    echo 'Страница не найдена';
}
?>