<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="resources/styles.css">
        <?php require 'main/models/main_title.php';?>
    </head>
    <body>
        <header>
            <?php include 'resources/header.html' ?>
        </header>
        <main>
            <div class="main-news">
                <?php include 'main/models/main_news.php' ?>
            </div> 
            <div class="block-news wrapper">
                <h1>Новости</h1>
                <?php include 'main/models/block_news.php' ?>
            </div>
        </main>
        <footer>
            <?php include 'resources/footer.html' ?>
        </footer>
    </body>
</html>