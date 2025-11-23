<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 'on');
	mb_internal_encoding('UTF-8');

	require_once 'main/controllers/MainNews.php';
	$data = new MainNews();
	$news = $data->getMainNews();
	$pic = "/project/pics/$news[image]";
	$title = $news['title'];
	$announce = $news['announce'];
	$id = $news['id'];
?>
	<div class="banner" style="background-image: url( '<?php echo $pic ?>' );">
		<div class="main wrapper">
			<a href="/project/work_news.php/?id=<?php echo $id ?>">
				<h1> <?php echo $title ?> </h1>
			</a>
			<?php echo $announce ?>
		</div>
	</div>