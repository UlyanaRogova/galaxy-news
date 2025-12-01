<?php
require_once 'Controllers/DetailController.php';

//use Controllers\DetailController;

//Simple router
$requestUri = $_SERVER['REQUEST_URI'];

if (preg_match('/\/detail(.*)/', $requestUri)) {
    //echo 'Detail';
    //print_r($_GET);
    //print_r($requestUri);
    $newsId = $_GET['id'];
    $detail = new DetailController();
    $detail->index($newsId);
} /*elseif() {

}*/ else {
    echo "Main";
}

?>