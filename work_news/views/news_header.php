<?php
require_once 'resources/requiries.php';
$title = new WorkNewsTitle();
$work_news = new WorkNews();
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/resources/styles.css">
    <?php $title->showTitle() ?>
    <link rel="icon" href="/resources/flavicon.svg" type="image/svg+xml">
</head>

<body>
    <header>
        <div class="header wrapper">
            <a href="/index.php">
                <div class="logo">
                    <img src="/resources/logo.svg" alt="logo">
                    <h2>ГАЛАКТИЧЕСКИЙ ВЕСТНИК</h2>
                </div>
            </a>
        </div>
    </header>