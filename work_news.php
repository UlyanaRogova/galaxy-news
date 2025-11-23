<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="/project/resources/styles.css">
        <?php require 'work_news/models/work_news_title.php'; ?>
    </head>
    <body>
        <header>
            <?php include 'resources/header.html' ?>
        </header>
        <div class="content-news wrapper">
			<?php include 'work_news/models/news_index.php' ?>
        </div>
        <footer>
            <?php include 'resources/footer.html' ?>
        </footer>
    </body>
</html>