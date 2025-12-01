<?php
	require_once 'main/controllers/Banner.php';
	$news = new Banner();

	$news->getBannerNews();

	$data = $this->data->fetchBanner();

        foreach($data as $news)
			{
            $pic = "/pics/$news[image]";
            $title = $news['title'];
            $announce = $news['announce'];
            $id = $news['id'];
	?>
		<div class="banner" style="background-image: url( '<?php echo $pic ?>' );">
			<div class="main wrapper">
				<a href="/work_news.php/?id=<?php echo $id ?>">
					<h1> <?php echo $title ?> </h1>
				</a>
				<?php echo $announce ?>
			</div>
		</div>
	<?php } 
?>