<?php include 'main/views/index_header.php' ?>
<main>
    <div class="main-news">
        <?php $banner->getBanner(); ?>
    </div>
    <div class="block-news wrapper">
        <h1>Новости</h1>
        <?php $block_news->getBlockNews(); ?>
    </div>
</main>
<?php include 'resources/footer.html' ?>